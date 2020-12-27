<?php

    session_start();

    $dbh = new PDO('sqlite:db/database.db');
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $username = $_POST ["username"];
    $password = $_POST ["password"];

    function insertUser($username, $password)
    {
        global $dbh;
       
            $stmt = $dbh->prepare('INSERT into person(username, password) VALUES (?,?)');
            $stmt->execute(array($username,$password)); 

       
    }
   /*function checkUser($username)
    {
        global $dbh;
        $stmt = $dbh->prepare('select count(*) from person where username = "$username"');
         $result = $stmt->fetch();
     return $result;
        
    }
    */

    try
    {
      insertUser($username, sha1($password)); 
      header('Location: MainPage.php');
      $_SESSION["msg"] = "Registration sucessful!";
    }catch (PDOException $e) {
       
            $_SESSION["msg"] = "Username already exists!";
        
       
        header('Location: login.php');

    }
    


?>