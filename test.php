<!DOCTYPE html>
<html lang="en">
<?php
if(isset($_POST['save']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $image=$_FILES['image']['name'];
    $dest="images/" .($image);
   if(move_uploaded_file($_FILES['image']['tmp_name'], $dest)) {
    echo "succes";}
   }
if(isset($_POST['x'])){
    $x=$_POST['x'];
    echo "its  ".$x;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
        <input type="file" accept="image/*" name="image">
        <select name="x">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <button type="submit" name="save">Save</button>
        </form>
</body>

</html>