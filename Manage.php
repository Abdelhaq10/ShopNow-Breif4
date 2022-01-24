<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>

<body>
    <?php
        include("./connection.php");
       
        session_start();
   
        $user = $_SESSION['admin'];
        
        $queryses = mysqli_query($connection,"select username from admin where username = '$user' ");
        
        $rows = mysqli_fetch_assoc($queryses);
        
        $session = $rows['username'];
      
        if(!isset($_SESSION['admin'])){
           header("location:login.php");
           die();
        }

     ?>


    <header>
      <a href="#" class="logo">Shop<span>Now</span></a>
      <div class="menuToggle" onclick="toggleMenu()"></div>
      <ul class="navigation">
        <li><a href="index.html#banner" onclick="toggleMenu()">Home</a></li>
        <li id="listbreak">|</li>
        <li><a href="./logout.php" onclick="toggleMenu()">LOG OUT</a></li>
      </ul>
    </header>

  <section class="cards" id="cards">
      <div class="dimlight"></div>
      <h2>List Of Products</h2>
        <div class="add">
            <button id="addbtn" class="addbtn">Add Product</button>
        </div>
    
             <?php   
                include("./Tablets.php")   ;
                include("./Tv.php");
                include("./Gaming.php");
                include("./Gadget.php");
                include("./Drones.php");
                include("./Phones.php");
             ?>
   </section>
    
  
<!-- ***********CRUD Product***********  -->
    <?php 
      include("AddProduct.php");
      include("UpdateProduct.php");
    ?>

<!-- ***********Script JS*********** -->
    <script src="./script.js"></script>

    <script>
      window.addEventListener("scroll", function()
      {
        const header = document.querySelector("header");
        header.classList.toggle("sticky", window.scrollY>0);
      })

      function toggleMenu()
      {
          const menuToggle = document.querySelector(".menuToggle");
          const navigation = document.querySelector(".navigation");
          menuToggle.classList.toggle("active");
          navigation.classList.toggle("active");
      }
    </script>
  </body>
</html>