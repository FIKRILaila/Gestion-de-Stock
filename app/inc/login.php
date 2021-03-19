<?php 

include "Connection.php";


if (isset($_POST['Email']) && isset($_POST['Password'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

 

        $sql = "SELECT * FROM admin WHERE Email='$Email' AND Password='$Password'";

        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
       
        if (mysqli_num_rows($result) == 1) {
            if ($row['Email'] == $Email && $row['Password'] == $Password) {
                $_SESSION['Email'] = $row['Email'];

                header("Location: http://localhost/Stock/app/dashboard.php");
                
                exit();
            }else{
                header("Location: http://localhost/Stock/app/login.php?error=invalide email or password");
             
                exit();
            }
        }else{
            header("Location: http://localhost/Stock/app/login.php?error=invalide email or password");

            exit();
        }
    }

?>