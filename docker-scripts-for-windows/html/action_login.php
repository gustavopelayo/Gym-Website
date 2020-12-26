<?php
    session_start();

    $dbh = new PDO('sqlite:db/database.db');
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $username = $_POST ["username"];
    $password = $_POST ["password"];

    function loginIsValid($username, $password)
    {
        global $dbh;
       
            $stmt = $dbh->prepare('SELECT username from person WHERE username=? and password =? and fitnesslevel =?');
            $stmt->execute(array($username, sha1($password),0)); 

           
            return $stmt->fetch();
    }
#if login successful
#create session atribute for user
#redirect to main page
#else
#login failed

if ($test= loginIsValid($username, $password)){
    $_SESSION["username"] = $username;
    header('Location: introduction.php');

}
    else {
        $_SESSION["msg"] =$test;
        /*header('Location: index.php');*/
        header('Location: index.php');

    }

   
?>