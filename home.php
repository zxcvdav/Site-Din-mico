<?php
session_start();
if (isset($_SESSION['userEmail'])){

$email = $_SESSION['userEmail'];
}else{
    header("location: login.php?err=102");
}
?>
<!doctype html>
<html lang="pt">
  <head>
  <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<body>
<style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin : 0 auto;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      
    }
   
    /* Add a gray background color and some padding to the footer */
    .footer {
      color: #9d9d9d;
      padding: 25px;
    }
    li{
        color:white; 
    }    

  </style>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="home.php">ShoesInTheSky</a>
    </div>
    <ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Pagina inicial</a></li>
    </ul>
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <div class="letra">
    <ul class="nav navbar-nav navbar-right">
    <li><?php echo $email; ?>
      <a href="logoff.php"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
    </ul>
</div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">

      <img src="foto/adidas.jpg" style="width:100%; height:500px" alt="Chania">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="foto/nike.jpg" style="width:100%; height:500px" alt="Chania">
      <div class="carousel-caption">

      </div>
    </div>

    <div class="item">
      <img src="foto/converse.jpg" style="width:100%; height:500px" alt="Flower">
      <div class="carousel-caption">
      </div>
    </div>

    <div class="item">
      <img src="foto/vanslogo.jpg" style="width:100%; height:500px" alt="Flower">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">15% DE DESCONTO</div>
        <div class="panel-body"><img src = "foto/air.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Air Jordan <br> R$700,00
        </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">10% DE DESCONTO</div>
        <div class="panel-body"><img src="foto/caro.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Balenciaga <br> R$1.700,00 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">30% DE DESCONTO</div>
        <div class="panel-body"><img src="foto/top.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Chuteira da Topper <br> R$50,00 </div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">15% DE DESCONTO</div>
        <div class="panel-body"><img src="foto/fofo.jpg" class="img-responsive" style="width:100%;"  alt="Image"></div>
        <div class="panel-footer">Tênis Adidas Yeezy Boost 350 V2 <br> R$2.400,00 </div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">15% DE DESCONTO</div>
        <div class="panel-body"><img src="foto/vans.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Sk8-Hi Top Sneaker <br> R$840,00</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">15% DE DESCONTO</div>
        <div class="panel-body"><img src="foto/all.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Tênis Converse Chuck Taylor All Star <br> R$240,00</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Obrigado pro visitar nosso site</p>  
  
</footer>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>