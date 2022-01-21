<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 
     <script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <?php
        include("./connection.php");
       
        $data="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat";
         $arrP=mysqli_query($connection,$data);
           $list = array();
    while($row =mysqli_fetch_assoc($arrP))
    {
        $lists[] = $row;
    }
     ?>

    <div class="container">
        <h2>List Of Products</h2>
        <div class="add">
            <button id="addbtn" class="addbtn">Add Product</button>
        </div>
        
      
              <div class="slider">
              <?php foreach ($lists as $list) : ?>
         <div class="card">
                
                
                 <div id="pic" class="pic"><img class="pic1" src="./images/<?php echo $list['image'] ?>"></div>
                 <span id="intitule" class="intitule"><?php echo $list['Nom'] ?></span>
                 <div class="line">
                 <span  class="qte"><strong>Quantite  </strong></span>
                 <span class="cat"><strong>Categorie </strong></span>
                 <span class="qteN" id="qte"><?php echo $list['Quantite'] ?></span>
                 <span class="catT" id="cat"><?php echo $list['Nomcat'] ?></span>
                 </div>
                 <span class="prix" id="price"><?php echo $list['Price'] ?>DH</span>
            <div class="actions">
                <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $list['idP']; ?> >Edit</button>
                <form action="Crud.php" method="post">
                <input type="text" class="id" name="id" id="id" value=<?php echo $list['idP'] ?>>
                <button id="deletebtn" name="del" class="btn">del</button>
              </form>
             </div>
       
     </div>
 <?php endforeach; ?>
        </div>  
    
      
                                 <!--    CRUD Product    -->
                                 <?php 
                                         include("AddProduct.php");
                                         include("UpdateProduct.php");
                                  ?>
                                    <!-- script js -->
    <script src="./script.js"></script>
     <script >
  const products = JSON.parse('<?php echo json_encode($lists); ?>');
  console.log(products);
  const editBtns = document.querySelectorAll(".update");
editBtns.forEach(btn => {
  btn.addEventListener("click", () => {
    const id = btn.value;
    const product = products.find(p => p.idP === id);
    // console.log(product);
    openPopUp(product);
  })})
  
  </script>
</body>
</html>