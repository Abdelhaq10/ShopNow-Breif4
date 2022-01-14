document.getElementById('file').addEventListener("change",function(event)
{
    var image=document.getElementById('upload');
    image.src=URL.createObjectURL(event.target.files[0]);
});
document.getElementById('fileup').addEventListener("change",function(event)
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

Addbtn.addEventListener("click",function(){
    Addpopup.style.display="block";
});
// Updatebtn.addEventListener("click",function(){
//     Updatepopup.style.display="block";
// });
function update()
{
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