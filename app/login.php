
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');</style> 
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');</style> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/Login.scss">
   
    <title>Login</title>
 
</head>
<body> 

    <div class="container">
        <div class="header">
            <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p style="color: red; text-align: center; font-size: 15px" class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        </div>
        
        <form id="form" class="form"  action="inc/login.php" method="post">
    
            <div class="form-control">
                <label for="username" <i class="fa fa-user"></i> <span style="font-family: 'Poppins', sans-serif;">
                        Email</span></label>
                <input type="email" placeholder="Email"  name="Email" id="email" />
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>
            </div>
            <div class="form-control">
                <label for="username" <i class="fa fa-lock"></i> <span style="font-family: 'Poppins', sans-serif;">
                        Password</span></label>
                <input type="password" placeholder="Password"  name="Password"id="password" />
                <i class="fa fa-check-circle"></i>
                <i class="fa fa-exclamation-circle"></i>
                <small>Error message</small>

            </div>
             <input type="submit" name="login" class="button" value="Login" />
            <!-- <button>Submit</button> -->
        </form>
    </div>






    <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    let error = urlParams.get('error')

    if (error) {
        console.log('errrrrror');
    }

    const form = document.getElementById('form');
    const email = document.getElementById('email');
    const password = document.getElementById('password');

    
    form.addEventListener('input', e => {
        // e.preventDefault();
        
        checkInputs();
    });
    
    function checkInputs() {
        // trim to remove the whitespaces
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
       
        

        
        if(emailValue === '') {
            setErrorFor(email, 'Email cannot be blank');
        } else if (!isEmail(emailValue)) {
            setErrorFor(email, 'Not a valid email');
        } else {
            setSuccessFor(email);
        }
        
        if(passwordValue === '') {
            setErrorFor(password, 'Password cannot be blank');
        } else {
            setSuccessFor(password);
        }
        
 
    }
    
    function setErrorFor(input, message) {
        const formControl = input.parentElement;
        const small = formControl.querySelector('small');
        formControl.className = 'form-control error';
        small.innerText = message;
    }
    
    function setSuccessFor(input) {
        const formControl = input.parentElement;
        formControl.className = 'form-control success';
    }
        
    function isEmail(email) {
        return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
    }
    

    </script>
    
    
</body>
</html>