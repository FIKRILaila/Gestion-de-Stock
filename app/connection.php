<?php
    $conn=mysqli_connect('localhost','root','','stock');
    if(!$conn)
    {
        die(' Please Check Your Connection'.mysqli_error($conn));
    } 
?>
