<?php

$exercise= $_GET["exercise"];

$dbh = new PDO('sqlite:db/database.db');
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try {
  $stmt = $dbh->prepare("SELECT points from exercise WHERE name =?");
$stmt->execute(array($exercise));
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
    <link rel="stylesheet " href="ExerciseDemoStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700;900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>       
        </label>
        <label class="logo">FitMe</label>
        <ul>
            <li>
                   <span class="img-hover-zoom">
                        <img src="Images/ExerciseGif/<?php echo $exercise?>.gif" class = "img">
                     <figcaption>
                        <a> <?php echo $exercise?> </a>  
                     </figcaption> 
                     <?php foreach ($result as $row) {?>

                         <div> Points you'll get: <?php echo $row["points"] ?> </div>
                      <?php } ?> 
                             <div class="form">
                             <form>
                                   <b><input type="submit" value="Claim points!"></b>
                              </form>
                            </div>
            </li>
        </ul>
    </h1>

</body>

</html>