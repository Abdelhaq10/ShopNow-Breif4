<?php
include("./connection.php");
$catTab="SELECT NomCat FROM categorie where idCat=1";
$caTab=mysqli_query($connection,$catTab);
$tabletcat=mysqli_fetch_array($caTab);

$dataTab="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=1";
 $arrTab=mysqli_query($connection,$dataTab);
   $tablets = array();
while($rowTab =mysqli_fetch_assoc($arrTab))
{
$tablet[] = $rowTab;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $tabletcat[0] ?></div>
      <div class="slider">
      <?php foreach ($tablet as $tab) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $tab['image'] ?>"></div>
          <div class="priceTag"><?php echo $tab['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $tab['Nom'] ?></h3>
            <div class="text"><?php echo $tab['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $tab['idP']; ?>><img src="images/updated.png"></button>
      
              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $tab['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      
      <script>
        const Tablets = JSON.parse('<?php echo json_encode($tablet); ?>');
        console.log(Tablets);
        const editBtns = document.querySelectorAll(".update");
        
        editBtns.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const tablet = Tablets.find(t => t.idP === id);
            // console.log(product);
            openPopUpTablet(tablet);
          })
        });
    </script>