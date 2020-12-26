<?php
session_start();
$msg = $_SESSION["msg"]; 
unset($_SESSION["msg"]);
?>

<html>
<head>
    <title> Login and Register Form</title>
    <link rel= "stylesheet "href = "style.css" > 
</head>

<body>
    <div class= title>
        <h1>FitMe</h1>
    </div>
  
    <div class = "student">
    
        <div class = "formbox">
            <br>
            <br>
            <div class= "buttonbox">
                
                <button type="button" class="toggle-btn" onclick="login()" >  Login</button>
                <button type="button" class="toggle-btn" onclick="register()"> Register</button>

    
            </div>
            
            <form id = "login" class="input-group" action ="action_login.php" method = "post">
                <input type="text" class = "inputfield" placeholder="userID" required>
                <input type="password" class = "inputfield" placeholder="Enter Password" required>
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


    <script>
        var x = document.getElementById("login");

        var y = document.getElementById("register");
       
       function register()
       {
        x.style.left="400px";
        y.style.left="50px";
       }
       function login()
       {
        x.style.left="50px";
        y.style.left="450px";
       }
    </script>
    

</body>


</html>