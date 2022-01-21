<?php 
$connection=mysqli_connect('localhost','abdelhaq','akrate123','shopnow');
    if(!$connection)
    {
        echo 'connection error',mysqli_connect_error();
    }
?>