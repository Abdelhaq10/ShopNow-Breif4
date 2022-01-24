<?php 
 include("./connection.php");
 $listCat="SELECT * FROM `categorie`";
 $arr=mysqli_query($connection,$listCat);


?>

 
<div id="Updatepopup" class="box">

            <div class="popup-content animate-top">
                <div class="popup-header">
                    <h5 class="popup-title">Update Product</h5>
                    <button type="button" class="close" id="close" >
                        <img src="./images/icons8-close-30.png" alt="" srcset="">
                    </button>
                </div>
                <form action="Crud.php" method="post" id="updateform" enctype="multipart/form-data">

                <div class="popup-body">
                   <!--  -->
                    <!-- display message -->
                    <div class="messageBox"></div>
                     <div class="block">
                        <label>Product Id:</label>
                        <input type="text" name="id" id="idup" class="input">
                    </div>
                    <div class="block">
                    <label for="catup">Categorie:</label>
                    <select name="cat" id="catup" class="input">
                    <?php   while($el= mysqli_fetch_array($arr)):;      ?>
                    <option value="<?php echo $el[0];?>"><?php echo $el[1]; ?></option>
                    <?php endwhile; ?>
                    </select>
                    </div>
                  <div class="block">
                        <label>Intitule:</label>
                        <input type="text" name="intitule" id="intituleup" class="input">
                    </div>
                    <div class="block">
                        <label>Price:</label>
                        <input type="text" name="price" id="priceup" class="input">
                    </div>
                    <div class="block">
                        <label>Quantite:</label>
                        <input type="number" name="quantite" id="quantiteup" class="input">
                    </div>
                    <div class="block">
                     <img id="uploadup" width="100" height="100">
                        <input type="file" name="imageup" id="imgup" class="input" accept="image/*">
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" name="submit" class="btnEdit">Update Product</button>
                </div>
                </form>
            </div>
        </div>
    </div>