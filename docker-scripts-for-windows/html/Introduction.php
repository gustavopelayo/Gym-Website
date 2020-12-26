<?php
   session_start();
   ?>
<html>
<head>
    <link rel= "stylesheet "href = "style.css" > 
</head>

<body>
    <div class= title>
        <h1>FitMe</h1>       
    </div>
    <span> <?php echo $_SESSION["msg"]; ?> </span> 
</body>
</html>
