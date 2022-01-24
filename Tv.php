<?php
include("./connection.php");
$catTv="SELECT NomCat FROM categorie where idCat=2";
$caTv=mysqli_query($connection,$catTv);
$tvcat=mysqli_fetch_array($caTv);

$dataTv="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=2";
 $arrTv=mysqli_query($connection,$dataTv);
   $tvs = array();
while($rowTv =mysqli_fetch_assoc($arrTv))
{
$tv[] = $rowTv;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $tvcat[0] ?></div>
      <div class="slider">
      <?php foreach ($tv as $t) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $t['image'] ?>"></div>
          <div class="priceTag"><?php echo $t['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $t['Nom'] ?></h3>
            <div class="text"><?php echo $t['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $t['idP']; ?>><img src="images/updated.png"></button>

              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $t['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <script>
        const Tvs = JSON.parse('<?php echo json_encode($tv); ?>');
        console.log(Tvs);
        const editBtnstv = document.querySelectorAll(".update");
        
        editBtnstv.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const tv = Tvs.find(t => t.idP === id);
            // console.log(product);
            openPopUpTv(tv);
          })
        });
    </script>