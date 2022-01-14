<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>List Of Products</h2>
        <div class="add">
            <button id="addbtn" class="addbtn">Add Product</button>
        </div>
        
      
        <div class="slider">
         <div class="card">
            <div class="pic"><img  class="pic1" src="./images/pexels-garvin-st-villier-3311574.jpg" alt="" srcset=""></div>
            <span class="type"><strong>intitule : </strong>intitule1</span>
            <span class="fuel"><strong>Price : </strong>120.00$</span>
            <span class="gear"><strong>Quantite : </strong>5</span>
            <span class="price"><strong>Categorie : </strong>Categorie1</span>
            <div class="actions">
                <button id="updatebtn" class="btn">edit</button>
                <button id="deletebtn" class="btn">del</button>
             </div>
        </div>
        <div class="card">
         <div class="pic"><img  class="pic1" src="./images/pexels-garvin-st-villier-3311574.jpg" alt="" srcset=""></div>
         <span class="type"><strong>intitule : </strong>intitule2</span>
         <span class="fuel"><strong>Price : </strong>100.00$</span>
         <span class="gear"><strong>Quantite : </strong>10</span>
         <span class="price"><strong>Categorie : </strong>Categorie2</span>
         <div class="actions">
            <button id="updatebtn" class="btn">edit</button>
            <button id="deletebtn" class="btn">del</button>
         </div>
     </div>
     <div class="card">
         <div class="pic"><img  class="pic1" src="./images/pexels-garvin-st-villier-3311574.jpg" alt="" srcset=""></div>
         <span class="type"><strong>intitule : </strong>intitule3</span>
         <span class="fuel"><strong>Price : </strong>130.00$</span>
         <span class="gear"><strong>Quantite : </strong>15</span>
         <span class="price"><strong>Categorie : </strong>Categorie3</span>
         <div class="actions">
            <button id="updatebtn" class="btn">edit</button>
            <button id="deletebtn" class="btn">del</button>
         </div>
     </div>
     <div class="card">
         <div class="pic"><img  class="pic1" src="./images/pexels-garvin-st-villier-3311574.jpg" alt="" srcset=""></div>
         <span class="type"><strong>intitule : </strong>intitule4</span>
         <span class="fuel"><strong>Price : </strong>150.00$</span>
         <span class="gear"><strong>Quantite : </strong>20</span>
         <span class="price"><strong>Categorie : </strong>Categorie4</span>
         <div class="actions">
            <button id="updatebtn" class="btn">edit</button>
            <button id="deletebtn" class="btn">del</button>
         </div>
 
     </div>
        </div>    









        <!-- Add product Pop-up -->
        <div id="Addpopup" class="box">
            <div class="popup-content animate-top">
                <div class="popup-header">
                    <h5 class="popup-title">Add Product</h5>
                    <button type="button" class="close">
                        <img src="./Breif3/images/icons8-close-30.png" alt="" srcset="">
                    </button>
                </div>
                <form method="post" id="addform">
                <div class="popup-body">
                    <!-- display message -->
                    <div class="messageBox"></div>
                
                    <div class="block">
                        <label>Intitule:</label>
                        <input type="text" name="intitule" id="intitule" class="input" placeholder="Enter Product Intitule">
                    </div>
                    <div class="block">
                        <label>Price:</label>
                        <input type="text" name="price" id="price" class="input" placeholder="Enter your Price">
                    </div>
                    <div class="block">
                        <label>Quantite:</label>
                        <input type="number" name="quantite" id="quantite" class="input" placeholder="Quantite">
                    </div>
                    <div class="block">
                     <img id="upload" width="100" height="100">
                        <input type="file" name="image" id="file" class="input" accept="image/*">
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" class="btnAdd">Add Product</button>
                </div>
                </form>
            </div>
        </div>
        <!-- Update product popup -->
        <div id="Updatepopup" class="box">
            <div class="popup-content animate-top">
                <div class="popup-header">
                    <h5 class="popup-title">Update Product</h5>
                    <button type="button" class="close" id="close">
                        <img src="./Breif3/images/icons8-close-30.png" alt="" srcset="">
                    </button>
                </div>
                <form method="post" id="updateform">
                <div class="popup-body">
                    <!-- display message -->
                    <div class="messageBox"></div>
                
                    <div class="block">
                        <label>Intitule:</label>
                        <input type="text" name="intitule" id="intitule" class="input" placeholder="Enter Product Intitule">
                    </div>
                    <div class="block">
                        <label>Price:</label>
                        <input type="text" name="price" id="price" class="input" placeholder="Enter your Price">
                    </div>
                    <div class="block">
                        <label>Quantite:</label>
                        <input type="number" name="quantite" id="quantite" class="input" placeholder="Quantite">
                    </div>
                    <div class="block">
                     <img id="upload" width="100" height="100">
                        <input type="file" name="image" id="file" class="input" accept="image/*">
                    </div>
                </div>
                <div class="popup-footer">
                    <button type="submit" class="btnEdit">Update Product</button>
                </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
            document.querySelector('#file').addEventListener("change",function(event)
            {
                var image=document.getElementById('upload');
                image.src=URL.createObjectURL(event.target.files[0]);
            });
        var Addpopup=document.getElementById("Addpopup");
        var Updatepopup=document.getElementById("Updatepopup");
        // var Deletepopup=document.getElementById("Deletepopup");

        var Addbtn =document.getElementById("addbtn");  
        var Updatebtn =document.getElementById("updatebtn");    
        var Deletebtn =document.getElementById("deletebtn");
        var closeUpdate = document.getElementById("close");
        var closeAdd= document.querySelector(".close");
        $(document).ready(function(){ 
           Addbtn.addEventListener("click",function(){
                Addpopup.style.display="block";
            });
           Updatebtn.addEventListener("click",function(){
                Updatepopup.style.display="block";
            });
           Deletebtn.addEventListener("click",function(){
                popup.style.display="block";
            });
            closeAdd.addEventListener("click",function(){
                Addpopup.style.display = "none"; 
            });
            closeUpdate.addEventListener("click",function(){
               Updatepopup.style.display = "none"; 
            });
        });
        document.querySelector( document ).ready(function() {
        resizeWindow();
        document.querySelector( window ).resize(function() {
            resizeWindow();
        });

        function resizeWindow(){
            var bodyEl = document.querySelector( ".divTableBody .divTableRow:nth-child(2) div");
            for (i = 1; i <= bodyEl.length; i++) {
                var bodyCellElWidth = document.querySelector( ".divTable.divTableContent .divTableRow:nth-child(1) div:nth-child("+i+")").width();
                document.querySelector(".divTableHeadHold div:nth-child("+i+")").width(bodyCellElWidth);
            };
        };
    });
        </script>
</body>
</html>