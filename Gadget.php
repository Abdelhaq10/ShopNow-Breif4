<?php
include("./connection.php");
$catGad="SELECT NomCat FROM categorie where idCat=4";
$catGadget=mysqli_query($connection,$catGad);
$GadgetCat=mysqli_fetch_array($catGadget);

$dataGad="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=4";
 $arrGad=mysqli_query($connection,$dataGad);
   $Gadgets = array();
while($rowGad =mysqli_fetch_assoc($arrGad))
{
$Gadgets[] = $rowGad;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $GadgetCat[0] ?></div>
      <div class="slider">
      <?php foreach ($Gadgets as $gadget) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $gadget['image'] ?>"></div>
          <div class="priceTag"><?php echo $gadget['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $gadget['Nom'] ?></h3>
            <div class="text"><?php echo $gadget['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $gadget['idP']; ?>><img src="images/updated.png"></button>
      
              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $gadget['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <script>
        const Gadgets = JSON.parse('<?php echo json_encode($Gadgets); ?>');
        console.log(Gadgets);
        const editBtnsGadgets = document.querySelectorAll(".update");
        
        editBtnsGadgets.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const gadget = Gadgets.find(g => g.idP === id);
            // console.log(product);
            openPopUpGadget(gadget);
          })
        });
    </script>