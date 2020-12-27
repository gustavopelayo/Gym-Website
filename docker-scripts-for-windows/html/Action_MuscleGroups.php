<?php
    session_start();

    $dbh = new PDO('sqlite:db/database.db');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
      $stmt = $dbh->prepare('SELECT name from muscleGroup');
    $stmt->execute();
    $result = $stmt->fetchAll();
    } catch (PDOException $e) {
      echo $e->getMessage();
      exit(0);
    }
?>