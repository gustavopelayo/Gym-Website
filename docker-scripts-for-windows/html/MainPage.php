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
            <?php foreach ($result as $row) {?>
                 <li>
                   <div class = "icon">       
                 <a href = "listMuscleGroup.php?musclegroup=<?php echo $row["name"]?>" class = "tag"> <?php echo $row["name"] ?> </a>  
                 </div>
                </li>
                <?php } ?> 
            </ul>
        </nav>

        <div id="loginContainer" class="login">
        <h1>Let's train.</h1>
        <form id="welcome">
            <div class="txt_field">
                <label>Username</label>
            </div>

           
        </form>
    </div>
       
    </body>
      
    </html>