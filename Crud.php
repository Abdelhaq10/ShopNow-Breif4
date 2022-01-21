<?php

     include("./connection.php");
//     if(isset($_POST['add']) && $_SERVER['REQUEST_METHOD']=='POST')
//     {
//         $cat=$_POST['cat'];
//         $intitule = $_POST['intitule'];
//         $price =$_POST['price'];
//         $qte=$_POST['quantite'];
//         $image=$_FILES['image']['name'];
//         $dest="images/" .($image);


// if(move_uploaded_file($_FILES['image']['tmp_name'], $dest))
// {
//     echo "succes";
// }
//     }

if(isset($_POST['add']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $image=$_FILES['image']['name'];
    $dest="images/" .($image);
      $cat=$_POST['cat'];
        $intitule = $_POST['intitule'];
        $price =$_POST['price'];
        $qte=$_POST['quantite'];

   if(move_uploaded_file($_FILES['image']['tmp_name'], $dest)) {
      $add="INSERT INTO product SET Nom='$intitule',Price='$price',image='$image',Quantite='$qte',idCat='$cat'";
      if(mysqli_query($connection,$add)){
        header('location:Manage.php?Added');
      }
  }
   }


if(isset($_POST['del']))
{
  $id=$_POST['id'];
    $query="DELETE FROM product where idP='$id'";
    $infoQuery=mysqli_query($connection,$query);
    if($infoQuery)
    {
        header('location:Manage.php?deleted');
    }
}

?>