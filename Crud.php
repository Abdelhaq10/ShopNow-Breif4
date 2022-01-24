<?php

     include("./connection.php");
if(isset($_POST['add']) && $_SERVER['REQUEST_METHOD']=='POST'){
    $image=$_FILES['image']['name'];
    $dest="images/" .($image);
      $cat=$_POST['cat'];
        $intitule = $_POST['intitule'];
        $price =$_POST['price'];
        $qte=$_POST['quantite'];
     $sqlid="SELECT MAX(idP) FROM product";
  $getid=mysqli_query($connection,$sqlid);
  $id=mysqli_fetch_assoc($getid);
 $idp=$id['MAX(idP)']+1;
   if(move_uploaded_file($_FILES['image']['tmp_name'], $dest)) {   // $add="INSERT INTO product SET Nom='$intitule',Price='$price',image='$image',Quantite='$qte',idCat='$cat'";
    $add="INSERT INTO `product`(`idP`, `Nom`, `Price`, `image`, `Quantite`, `idCat`)
     VALUES ('$idp','$intitule','$price','$image','$qte','$cat')";
      if(mysqli_query($connection,$add)){
        header('location:Manage.php?Added');
      }
  }
   }


   if(isset($_POST['submit']) && $_SERVER['REQUEST_METHOD']=='POST')
   {
                $idp=$_POST['id'];
                $image=$_FILES['imageup']['name'];
                $dest="images/" .($image);
                $cat=$_POST['cat'];
                $intitule = $_POST['intitule'];
                $price =$_POST['price'];
                $qte=$_POST['quantite'];
          if(move_uploaded_file($_FILES['imageup']['tmp_name'], $dest)) { 
           $edit="UPDATE `product` SET `Nom`='$intitule',`Price`='$price',`image`='$image',`Quantite`='$qte',`idCat`='$cat' WHERE `idP`= $idp";
             if(mysqli_query($connection,$edit)){
               header('location:Manage.php?updated');
             }
             else {
               echo "error";
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