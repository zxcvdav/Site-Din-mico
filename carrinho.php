<?php
session_start();
if (isset($_SESSION['userEmail'])){

$email = $_SESSION['userEmail'];
}else{
    header("location: login.php?err=102");
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="icon" type="imagem/png" href="img/logo.png">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Pousada Parnaioca</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style> 
.navbar-inverse{
    margin-top:-10px;
    width:1423,5px;
    height:    
    

}
.slider_area{
    margin-top:-21px;
    margin-bottom:-5px;
    
   
    }

.footer{

    margin-top:131px;
}
.container-fluid{
    color:white;
    margin-top:12px;
}

    </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-brand" href="index.html">Parnaioca</a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class=""><a href="#">Página inicial</a></li>
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="suites.php">Suítes</a></li>
              <li><a href="apartamentos.php">Apartamentos</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><?php echo $email; ?>
                <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li> 
              
            
            </ul>
          </div>
        </div>
      </nav>
      <?php
$conexao = new PDO('mysql:host=localhost;dbname=projeto',"root","");

$select = $conexao->prepare("SELECT * FROM carrinho");
$select-> execute();
$fetch = $select->fetchAll();

foreach($fetch as $produto){
    echo 'Nome do produto: '.$produto['nomesuite'].' &nbsp;
          Quantidade: '.$produto['diariaap'].'
          <a href="reserva.php?add=carrinho&id='.$produto['id'].'">Adicionar ao Carrinho</a>
          <br/>';
}
?>
   
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Endereço
                            </h3>
                            <p class="footer_text"> 200, Blue road,  <br>
                                Martine, Itália</p>
                            <a href="#" class="line-button">Volte ao inicio</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Reservas
                            </h3>
                                <p class="footer_text">(021)97338-9448<br>
                                parnaioca@gmail.com</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Navegação
                            </h3>
                            <ul>
                                <li><a href="#">Princial</a></li>
                                <li><a href="#">Suítes</a></li>
                                <li><a href="#">Sobre</a></li>
                                <li><a href="#">Novidades</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Novidades
                            </h3>
                            <form action="#" class="newsletter_form">
                                <input type="text" placeholder="Digite o seu E-mail">
                                <button type="submit">Inscreva-se</button>
                            </form>
                            <p class="newsletter_text">Inscreva-se nas novidades, para receber informações</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
            
             
               
                  
                        
                           
 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
        
 



</body>

</html>
