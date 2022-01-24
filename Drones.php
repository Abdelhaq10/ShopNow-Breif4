<?php
include("./connection.php");
$catDro="SELECT NomCat FROM categorie where idCat=5";
$caDro=mysqli_query($connection,$catDro);
$Dronecat=mysqli_fetch_array($caDro);

$dataDro="SELECT p.*,c.Nomcat FROM product AS p INNER JOIN categorie AS c ON p.idCat=c.idCat WHERE p.idCat=5";
 $arrDro=mysqli_query($connection,$dataDro);
   $Drones = array();
while($rowDro =mysqli_fetch_assoc($arrDro))
{
$Drones[] = $rowDro;
}
// print_r($tablet);

?>



<div class="categoryName"><?php echo $Dronecat[0] ?></div>
      <div class="slider">
      <?php foreach ($Drones as $drone) : ?>
        <div class="cardBox">
          <div class="imgBox"><img src="./images/<?php echo $drone['image'] ?>"></div>
          <div class="priceTag"><?php echo $drone['Price'] ?>DH</div>
          <div class="whiteBox">
            <h3><?php echo $drone['Nom'] ?></h3>
            <div class="text"><?php echo $drone['Quantite'] ?></div>
    
            <div class="actions">
            <button id="updatebtn"  name="edit" class="btn update" value=<?php echo $drone['idP']; ?>><img src="images/updated.png"></button>
      
              <form action="Crud.php" method="post">
                <input type="text" class="id" name="id"  value="<?php echo $drone['idP'] ?>" id="id">
                
                <button id="deletebtn" name="del" class="btn"><img src="images/delete.png"></button>
              </form> 
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <script>
        const Drones = JSON.parse('<?php echo json_encode($Drones); ?>');
        console.log(Drones);
        const editBtnsDrone = document.querySelectorAll(".update");
        
        editBtnsDrone.forEach(btn => 
        {
          btn.addEventListener("click", () => 
          {
            const id = btn.value;
            const drone = Drones.find(d => d.idP === id);
            // console.log(product);
            openPopUpDrone(drone);
          })
        });
    </script>