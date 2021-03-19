<?php 

include "Connection.php";



    $Produit = $_POST['Produit'];
    $Description = $_POST['Description'];
    $Prix = $_POST['Prix'];
    $Stock = $_POST['Stock'];
    $Categorie = $_POST['Categorie'];
    $StockCretique = $_POST['StockCretique'];

        $sql="INSERT INTO produit(Nom,Description,Prix,Stock,Catégorie,stock_crètique) VALUES ( '$Produit', '$Description' , '$Prix' , '$Stock' , '$Categorie' , '$StockCretique')";
        // mysqli_query($conn, $sql);
        $conn->query($sql);
        $conn->close();
        
?>        
