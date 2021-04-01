<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2? family = Poppins: wght @ 500 & display = swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Document</title>
</head>

<body>

    <header>
        <h3>Hi, Admin! </h3>
        <i class="fa fa-user"></i>
        <i class="fa fa-bell"></i>
    </header>
    

    <aside>
        <div class="logo">
            <img src="images/Electro._Safi.png" alt="#">
            <h2>Electro.Safi</h2>
            <i class="fa fa-bars" onclick="menu_show('menu')"></i>
        </div>

        <div class="logout">
            <i class="fa fa-sign-out"></i>
           <a href="../app/login.php"><span>LogOut</span></a>

        </div>
    </aside>

    <div class="menu" id="menu">
        <div class="title">
            <h2>Electro.Safi</h2>
            <i class="fa fa-times-circle" onclick="div_hide('menu')"></i>
        </div>
        <div class="menu_ul">
            <ul>
                <li>Profil</li>
                <li>Notifations</li>
                <li>Dashboard</li>
                <li>Log out</li>
            </ul>
            
        </div>
    </div>



    <div class="all">
        <div class="bar">

            <a href="Login et Formule/Formul.html" class="btn-a">+ ADD</a>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <select name="" id="searchButton">
                    <option value="1">Search By</option>
                    <option value="2">Catégorie</option>
                    <option value="3">Name</option>
                </select>
            </div>

        </div>

        <?php include 'connection.php';
?>

        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th class="th_hide">Categorié</th>
                    <th class="th_hide">Quantité</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM produit';
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result))
                {
            ?>
                <tr>
                    <td><?php echo $row['Nom']; ?></td>
                    <td class="th_hide"><?php echo $row['Categorie']; ?></td>
                    <td class="th_hide"><?php echo $row['Stock']; ?></td>
                    <td><?php echo $row['Prix']; ?></td>
                    <td class="view_info"><?php echo $row['Id']; ?></td>
                    <td class="view_info"><?php echo $row['Description']; ?></td>
                    <td class="view_info"><?php echo $row['Images']; ?></td>
                    <td class="view_info"><?php echo $row['stock_critique']; ?></td>
                    <td>
                        <ul>
                            <li><a href="edit.php?id=<?php echo $row['Id'] ?>"><i class="fa fa-edit"></i></a></i></li>
                            <li value="<?php echo $row['Id'];?>" onclick="div_show('delete', this.value)"><i class="fa fa-times-circle"  ></i></li>
                            <li id="viewProduct"><i class="fa fa-chevron-circle-right"></i></li>
                        </ul>
                    </td>
                </tr>
                <?php 
            }?>
            </tbody>
        </table>
    </div>


    <section class="content" id="show">
        <div class="view">
            <div class="titre">
                <h1>View Product</h1>
                <i class="fa fa-times-circle" onclick="div_hide('show')"></i>

            </div>

            <div class="container">
                <div class="image"><img src="images/pngegg.png" alt=""></div>
                <div class="info">
                    <p>
                        <span>ID :</span><br>
                        <span>Nom :</span><br>
                        <span>Categorié:</span><br>
                        <span>Stock Critique :</span><br> 
                        <span>Price:</span><br>
                        <span>Quantite :</span><br>
                        <span>Description :</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <form action="delete.php" method="post" class="delete"  id="delete">
        <div class="contenu">
            <h1>ARE YOU SURE ?</h1>
            <input type="text" hidden name="idP" value="">
            <div class="btn_delete">
                <a class="cancel" href="dashboard.php">CANCEL</a>
                <!-- <button class="cancel" onclick="div_hide('delete')">CANCEL</button> -->
                <button type="submit" class="yes">YES</button>
            </div>
        </div>
    </form>




    <script>
        function div_show(id,d) {
            var id_delete=document.querySelector("#delete > div > input[type=text]");
            id_delete.value=d;
            document.getElementById(id).style.display = "block";
        }
        function menu_show(id) {
            document.getElementById(id).style.display = "block";
        }

        //Function to Hide Popup
        function div_hide(id){
            document.getElementById(id).style.display = "none";
        }

        Array.from(document.querySelectorAll('#viewProduct')).forEach(product => {

            product.addEventListener('click', function () {
                document.getElementById('show').style.display = "block";
                let row = product.parentElement.parentElement.parentElement;

                let id = row.children[4].textContent;
                let name = row.children[0].textContent;
                let categorie = row.children[1].textContent;
                let price = row.children[3].textContent;
                let quantite = row.children[2].textContent;
                let description = row.children[5].textContent;
                let critique = row.children[7].textContent;
                let image = row.children[6].textContent;

                let html = `<p>
                        <span>ID :</span>${id}<br>
                        <span>Nom :</span>${name}<br>
                        <span>Categorié:</span> ${categorie}<br>
                        <span>Stock Critique :</span> ${critique}<br> 
                        <span>Price:</span>${price}<br>
                        <span>Quantite :</span>${quantite}<br>
                        <span>Description :</span>${description}
                    </p>`;
            
                document.querySelector('.info').innerHTML = html;
                
                // let img =`<img src="${image}" alt="">`;
                // document.querySelector('.image').innerHTML = img;
            });

        });

    </script>
</body>

</html>