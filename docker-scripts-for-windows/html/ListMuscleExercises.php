<?php

$muscle= $_GET["muscle"];

$dbh = new PDO('sqlite:db/database.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
  $stmt = $dbh->prepare("SELECT name, points  from exercise WHERE muscle =?");
$stmt->execute(array($muscle));
$result = $stmt->fetchAll();

$category = $stmt->fetchAll();
} catch (PDOException $e) {
  echo $e->getMessage();
  exit(0);
}
?>
?>
   <html>

<head>
    <meta charset="utf-8">
    <title>FitMe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet " href="ListStyleExercises.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
      
       
       
        <label class="logo">FitMe</label>
        <ul>
        <?php foreach ($result as $row) {?>
               <li>
               <span class="img-hover-zoom">
               <img src="Images/Exercises/<?php echo $row["name"] ?>.jpg" class = "img">
             </span>
             <figcaption>
             <a href = "ExerciseDemo.php?exercise=<?php echo $row["name"]?>" >  <?php echo $row["name"] ?> </a>  
             </figcaption>
               <div> Points you'll get:<?php echo $row["points"] ?> </div>
              </li>
            <?php } ?> 
        </ul>
    </h1>
   
   
</body>

</html>