<?php
 
 include_once ("hoje.php");

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="home.css">
</head>
<body>

<div class="container">
  <h1>Campus UNIFG</h1>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="https://braziljournal.com/wp-content/uploads/2022/06/714a92b6-ef12-9905-67bc-eb5fada780a3.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www.centrouniversitariounifg.edu.br/wp-content/uploads/2022/07/MicrosoftTeams-image.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTk4Gk88RKfkisbidAf-yIJiSmuHmiFKZkXJw&usqp=CAU" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://1.bp.blogspot.com/-GBR8Xwbk0m8/XfP0Vgt1vII/AAAAAAACSLA/v0S2c9DWt1Aa-KsA1fZCnrGDGyMvXHQnwCLcBGAsYHQ/s1600/725950fcf8080aad29b1517a470572c4_XL.jpg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://www.centrouniversitariounifg.edu.br/wp-content/uploads/2023/01/Panoramica-1-scaled.jpg" alt="New york" style="width:100%;">
      </div>



    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  


</div>
</div>

<br>
<form action="login.php" method="get">
<div id="fazer"><input type="submit" value="Fazer login"></div>
</form>





<?php
 include_once ("rp.php");
 ?>

</body>
</html>
