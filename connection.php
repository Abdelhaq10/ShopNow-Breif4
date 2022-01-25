<?php 
$connection=mysqli_connect('localhost','root','','shopnow');
    if(!$connection)
    {
        echo 'connection error',mysqli_connect_error();
    }
?>