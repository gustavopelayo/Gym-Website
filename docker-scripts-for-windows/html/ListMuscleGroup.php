<?php

$mg_name= $_GET["musclegroup"];

$dbh = new PDO('sqlite:db/database.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
  $stmt = $dbh->prepare("SELECT name from muscle WHERE name_mg=?");
$stmt->execute(array($mg_name));
$result = $stmt->fetchAll();

$category = $stmt->fetchAll();
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
    <link rel="stylesheet " href="ListStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>


<body>
    <div id = "page">
    <nav>
        
        <i class="fa fa-align-justify"></i>
        </label>
        <label class="logo">FitMe</label>
        <ul>
        <?php foreach ($result as $row) {?>
             <li>
             <span class="img-hover-zoom">
             <img src="Images/Muscles/<?php echo $row["name"] ?>.jpg" class = "img">
             </span>
             <figcaption>
             <a href = "listMuscleExercises.php?muscle=<?php echo $row["name"]?>"> <?php echo $row["name"] ?> </a>  
             </figcaption>
            </li>
            <?php } ?> 
        </ul>
    </nav>
    </div>

    

