<!DOCTYPE html>
<html>
<head>
    <title> Organizare Evenimente login</title>
    <!-- EXPLICIT PAGE STYLE -->
    <link rel="stylesheet" type="text/css" href="styles/login.css">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" action="process\register-process.php" method="POST">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <input id="register-name" name="register-name" type="text" placeholder="name"/>
                </div>    

                <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                    <input id="register-password" name="register-password" type="password" placeholder="password"/>
                </div>
                
                <button type="submit" >Register</button>

                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" action="process\login-process.php" method="POST">
                <input id="login-name" name="login-name" type="text" placeholder="username"/>
                <input id="login-password" name="login-password" type="password" placeholder="password"/>

                <button type="submit" >Login</button>

                <p class="message">Not registered? <a href="#">Create an account</a></p>
                
            </form>
        </div>
    </div>  

    <!-- Jquery and Bootstrap-->
     
     <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    
    <!-- Explicit Page scripts -->
     <script src="scripts/login.js"></script> 

</body>

</html>