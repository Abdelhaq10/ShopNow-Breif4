<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <?php
         include("./connection.php");
    ?>

<div id="login" class="box">

            <div class="popup-content">
                <div class="popup-header">
                    <h5 class="popup-title">ShopNow</h5>
                </div>
                <form action="" method="post" enctype="multipart/form-data">

                <div class="popup-body">
                   
                    <div class="messageBox">
                        <?php
                          session_start();
   
                          if($_SERVER["REQUEST_METHOD"] == "POST") {
                        
                             
                             $username = $_POST['username'];
                             $password = $_POST['password']; 
                             
                             $query = "SELECT * FROM admin WHERE username = '$username' and pass = '$password'";
                             $result = mysqli_query($connection,$query);
                             $row = mysqli_fetch_array($result);
                             
                             $count = mysqli_num_rows($result);     
                             if($count == 1) {
                               
                                $_SESSION['admin'] = $username;
                                
                                header("location: manage.php");
                             }else {
                                echo "Username or Password is invalid";
                             }
                          }
                       ?>
                    </div>
                     <div class="block">
        
                        <input type="text" name="username" id="user" class="input" placeholder="username">
                    </div>
                   
                    
                  <div class="block">
                        <input type="password" name="password" id="pw" class="input" placeholder="password">
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" name="login" class="log">login</button>
                </div>
                </form>
            </div>
        </div>
    </div>





</body>
</html>