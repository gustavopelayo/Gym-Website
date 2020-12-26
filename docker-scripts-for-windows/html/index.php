<?php
session_start();
$msg = $_SESSION["msg"];
unset($_SESSION["msg"]);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>FitMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="main_page_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa fa-align-justify"></i>
        </label>
        <label class="logo">FitMe</label>
        <ul>
        </ul>
    </nav>

    <div id="loginContainer" class="login">
        <h1>Login</h1>
        <form id="login" action="action_login.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" value="Login">
            <div class="signup_link">
                Not a member? <a onclick="register()">Signup</a>
            </div>
            <form> <?php echo $msg; ?> </form>
        </form>
    </div>

    <div id="registerContainer" class="register">
        <h1>Register</h1>
        <form id="register" action="action_register.php" method="post">
            <div class="txt_field">
                <input type="text" name="username" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <input type="submit" value="Register">
            <div class="signup_link">
                Already have an account? <a onclick="login()">Login</a>
            </div>
        </form>
    </div>
    <!--
    <div class = "student">
        <div class = "formbox">
            <br>
            <br>
            <div class= "buttonbox">
                <button type="button" class="toggle-btn" onclick="login()" >  Login</button>
                <button type="button" class="toggle-btn" onclick="register()"> Register</button>
            </div>
            
            <form id = "login" class="input-group" action ="action_login.php" method = "post">
                <input type="text" class = "inputfield" placeholder="userID" name = "username" required>
                <input type="password" class = "inputfield" placeholder="Enter Password" name = "password" required>
                <input type="checkbox" class="check-box" > <span>Remember Password</span>
                <button type = "submit" class="submit-bttn">Login</button>
                <form> <?php echo $msg; ?> </form> 
            </form>
            <form id = "register" class="input-group" method = "post" action = "action_register.php">
                <input type="text" class = "inputfield" placeholder="userID" name = "username" required>
                <input type="password" class = "inputfield" placeholder="Enter Password"  name = "password" required>
                <button type = "submit" class="submit-bttn">Register</button>
       
            </form>       
        </div>       
    </div>
-->

    <script>
        function register() {
            var x = document.getElementById("loginContainer");
            var y = document.getElementById("registerContainer");

            x.style.display = "none";
            y.style.display = "block";
        }
        function login() {
            var x = document.getElementById("loginContainer");
            var y = document.getElementById("registerContainer");

            y.style.display = "none";
            x.style.display = "block";
        }
    </script>

</body>


</html>