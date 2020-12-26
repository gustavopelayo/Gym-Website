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
       
            $stmt = $dbh->prepare('INSERT into person(username, password) VALUES (?,?)');
            $stmt->execute(array($username, sha1($password))); 

       
            return $stmt->fetch();
    }
#if login successful
#create session atribute for user
#redirect to main page
#else
#login failed

if (loginIsValid($username, $password)){
    $_SESSION["username"] = $username;

}
    else {
        $_SESSION["msg"] = "login failed!";
    }

    header('Location: index.php');
?>