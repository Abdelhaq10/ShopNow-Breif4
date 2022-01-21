document.getElementById('file').addEventListener("change",function(event)
{
    var image=document.getElementById('upload');
    image.src=URL.createObjectURL(event.target.files[0]);
});
document.getElementById('imgup').addEventListener("change",function(event)
{
    var imageup=document.getElementById('uploadup');
    imageup.src=URL.createObjectURL(event.target.files[0]);
});
var Addpopup=document.getElementById("Addpopup");
var Updatepopup=document.getElementById("Updatepopup");

var Addbtn =document.getElementById("addbtn");  
var Updatebtn =document.getElementById("updatebtn");    
var Deletebtn =document.getElementById("deletebtn");
var closeUpdate = document.getElementById("close");
var closeAdd= document.querySelector(".close");


const idInput=document.querySelector('#idup');
const catInput=document.querySelector('#catup');
const titleInput= document.querySelector('#intituleup');
const priceInput = document.querySelector('#priceup');
const quantiteInput=document.querySelector('#quantiteup');
const imgsrc=document.querySelector("#imgup");




Addbtn.addEventListener("click",function(){
    Addpopup.style.display="block";
});


    // $(document).on('click', '#updatebtn', function(){
    //     var id=this.value;
    //     var intitule=document.getElementById('intitule').innerText;
    //      Updatepopup.style.display="block";
    //    document.getElementById('idup').value=id;
    //    document.getElementById('intituleup').value=intitule
    // });


    // $(".update").on('click',function(event)
    // {
    //      Updatepopup.style.display="block";
    // });



    function openPopUp(product)
    {
        const {idP, Nom, Price, image, Quantite, idCat, Nomcat} = product;
        idInput.value=idP;
        titleInput.value=Nom;
        priceInput.value=Price;
        quantiteInput.value=Quantite;
        catInput.querySelectorAll("option").forEach(op => {
            if(op.value === idCat){
              op.selected  = true;
            }
          })
        imgsrc.src=image;
        Updatepopup.style.display="block";
    }




closeAdd.addEventListener("click",function(){
    Addpopup.style.display = "none"; 
});
closeUpdate.addEventListener("click",function(){
   Updatepopup.style.display = "none"; 
});

document.querySelector('body').addEventListener('click', function(e){
    if(e.target.classList.contains("box")){
        Addpopup.style.display = "none";
        Updatepopup.style.display = "none";
    }

});