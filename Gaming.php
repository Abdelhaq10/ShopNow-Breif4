<?php
include("./connection.php");
$catGame="SELECT NomCat FROM categorie where idCat=3";
$catGaming=mysqli_query($connection,$catGame);
$gamingCat=mysqli_fetch_array($catGaming);

$dataGaming="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=3";
 $arrGaming=mysqli_query($connection,$dataGaming);
   $pcs = array();
while($rowPc =mysqli_fetch_assoc($arrGaming))
{
$pcs[] = $rowPc;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $gamingCat[0] ?></div>
      <div class="slider">
      <?php foreach ($pcs as $pc) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $pc['image'] ?>"></div>
          <div class="priceTag"><?php echo $pc['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $pc['Nom'] ?></h3>
            <div class="text"><?php echo $pc['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $pc['idP']; ?>><img src="images/updated.png"></button>

              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $pc['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <script>
        const Pcs = JSON.parse('<?php echo json_encode($pcs); ?>');
        console.log(Pcs);
        const editBtnspc = document.querySelectorAll(".update");
        
        editBtnspc.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const pc = Pcs.find(p => p.idP === id);
            // console.log(product);
            openPopUpTv(pc);
          })
        });
    </script>