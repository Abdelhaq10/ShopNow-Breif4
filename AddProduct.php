<?php
 include("./connection.php");
    $listCat="SELECT * FROM `categorie`";
    $arr=mysqli_query($connection,$listCat);
   
?>



<div>

<div id="Addpopup" class="box">
            <div class="popup-content animate-top">
                <div class="popup-header">
                    <h5 class="popup-title">Add Product</h5>
                    <button type="button" class="close">
                        <img src="./images/icons8-close-30.png" alt="" srcset="">
                    </button>
                </div>
                <form action="Crud.php"  method="post" id="addform" enctype="multipart/form-data">
                <div class="popup-body">
                    <!-- display message -->
                    <div class="messageBox"></div>
                    <div class="block">
                        <label for="cat">Categorie:</label>
                    <select name="cat" id="cat" class="input">
                    <?php   while($el= mysqli_fetch_array($arr)):;      ?>
                    <option value="<?php echo $el[0];?>"><?php echo $el[1]; ?></option>
                    <?php endwhile; ?>
                    </select>
                    </div>
                    <div class="block">
                        <label for="intitule">Intitule:</label>
                        <input type="text" name="intitule" id="intitule" class="input" placeholder="Enter Product Intitule" required>
                    </div>
                     <div class="block">
                     <img id="upload" width="100" height="100">
                        <input type="file" name="image" id="file"  accept="image/*" required>
                  
                    </div>
                    <div class="block">
                        <label for="quantite">Quantite:</label>
                        <input type="number" name="quantite" id="quantite" min="1" class="input" placeholder="Quantite" required>
                    </div>

                    <div class="block">
                        <label for="price">Price:</label>
                        <input type="number" min="0.00" name="price" id="price" class="input" placeholder="Enter your Price" style="" required>
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" name="add" class="btnAdd">Add Product</button>
                </div>
               
                </form>
            </div>
        </div>
</div>
