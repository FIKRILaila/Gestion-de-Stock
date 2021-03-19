<?php 
     include 'connection.php';
     global $conn;
    echo $id=$_POST["idP"];

    $sql = "DELETE FROM produit WHERE Id= '$id'";
    mysqli_query($conn, $sql);

   $conn->close();
    header("location: dashboard.php");

    ?>





