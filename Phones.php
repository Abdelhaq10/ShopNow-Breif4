<?php
include("./connection.php");
$catPhone="SELECT NomCat FROM categorie where idCat=6";
$caPhone=mysqli_query($connection,$catPhone);
$phonecat=mysqli_fetch_array($caPhone);

$dataPhone="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=6";
 $arrPhone=mysqli_query($connection,$dataPhone);
   $phones = array();
while($rowP =mysqli_fetch_assoc($arrPhone))
{
$phones[] = $rowP;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $phonecat[0] ?></div>
      <div class="slider">
      <?php foreach ($phones as $phone) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $phone['image'] ?>"></div>
          <div class="priceTag"><?php echo $phone['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $phone['Nom'] ?></h3>
            <div class="text"><?php echo $phone['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $phone['idP']; ?>><img src="images/updated.png"></button>

              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $phone['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <script>
        const Phones = JSON.parse('<?php echo json_encode($phones); ?>');
        console.log(Phones);
        const editBtnsphone = document.querySelectorAll(".update");
        
        editBtnsphone.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const phone = Phones.find(ph => ph.idP === id);
            // console.log(product);
            openPopUpPhone(phone);
          })
        });
    </script>