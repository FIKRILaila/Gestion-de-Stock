<?php 
     include 'connection.php';

        echo $id=$_POST['id'];
        echo $nom=$_POST['nom'];
        echo $price=$_POST['price'];
        echo $cat=$_POST['cat'];
        echo $desc=$_POST['desc'];
        echo $stock=$_POST['stock'];
        echo $img=$_POST['img'];
        echo $sql = "update produit set Nom = '$nom' , Prix = '$price' ,Description = '$desc'  ,Categorie = '$cat' ,Images = '$img' ,Stock = '$stock' where Id= '$id'";
        echo $conn->query($sql);
        header("location: dashboard.php");

    ?>