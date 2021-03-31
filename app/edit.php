
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>@import url('https://fonts.googleapis.com/css2? family = Poppins: wght @ 500 & display = swap'); </style>
    <title>Document</title>
    <link rel="stylesheet" href="../css/edit.css">

</head>
<body>

    <?php include 'connection.php';
?>
<?php 
    $id=$_GET['id']; 
    $sql = "SELECT * FROM produit WHERE Id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
?>
    
    <form class="edit" action="editTraitement.php" method="POST">
        <h1>Edit Product</h1>
        <div class="input-box" action="edit.php" methode="post" >
            <div class="input-flex">
                <div class="input-group" id="idmobile">
                    <label>ID</label>
                    <input type="text" placeholder="Prduct ID" id="ID" name="id" value=<?php echo $row[0]; ?>>
                </div>
                <div class="input-group">
                    <label>Price</label>
                    <input type="text" placeholder="Prduct Price" name="price" value=<?php echo $row[3]; ?>>
                </div>
            </div>
            
            <div class="input-flex">
                <div class="input-group">
                    <label>Nom</label>
                    <input type="text" placeholder="Prduct Nom" name="nom"  value=<?php echo $row[1]; ?> >
                </div>
    
                <div class="input-group">
                    <label>Catégorie</label>
                    <input type="text" placeholder="Prduct Categorié" name="cat"  value=<?php echo $row[5]; ?>>
                </div>
            </div>
            
            <div class="input-flex">
                <div class="input-group">
                    <label>Quantite</label>
                    <input type="text" placeholder="Prduct Quantite" name="qty"  value=<?php echo $row[4]; ?>>
                </div>
    
                <div class="input-group">
                    <label>Stock critique</label>
                    <input type="text" placeholder="Stock critique" name="stock"  value=<?php echo $row[7]; ?>>
                </div>
            </div>
            <div class="Description">
                <label>Description</label>
                <textarea cols="40" rows="7" name="desc" placeholder="Description"><?php echo $row[2]; ?></textarea>
            </div>    
            
        </div>
        <div class="imgbtn">
            <div id="Pimage">
                <img id="output" src="images/noImage.svg" alt="">
                <input id="imgPlcHldr" type="file" onchange=" loadFile(event)" name="img"  placeholder="type here..."   value=<?php echo $row[6]; ?>>
            </div>
            <div class="btns">
                <a href="dashboard.php" class="BACK">BACK</a>
                <button class="SAVE" type="submit">SAVE</button>
            </div>
        </div>
        
</form>

        <script>
            var loadFile = function (event) {
                var output = document.getElementById('output');
                output.src = URL.createObjectURL(event.target.files[0]);
                output.onload = function () {
                    URL.revokeObjectURL(output.src) // free memory
                }
            };
        </script>
        </body>
        
        </html>