<?php

$exercise= $_GET["exercise"];


?>
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
        </ul>
    </h1>
    <section>

    </section>
</body>

</html>