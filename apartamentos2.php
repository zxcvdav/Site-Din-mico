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
.bradcam_area{
    margin-top:-20px;
}
.container-fluid{
    color:white;
    
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
              <li class=""><a href="index.php">Página inicial</a></li>
              <li><a href="sobre2.php">Sobre</a></li>
              <li><a href="suites2.php">Suítes</a></li>
              <li><a href="apartamentos2.php">Apartamentos</a></li>
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><?php echo $email; ?>
                
            <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li> 
              <li><a href="index.html"><span class="glyphicon glyphicon-log-out"></span> Logoff</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  
    <div class="bradcam_area breadcam_bg_1">
        <h3>Apartamentos de luxo</h3>
    </div>
   
    <div class="offers_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                    
                        <h3>Nossas Ofertas</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/1.png" alt="">
                        </div>
                        <h3>Promoção 35% de Desconto <br>
                            Apartamento OverFlow</h3>
                        <ul>
                            <li>Apartamento de Luxo</li>
                            <li>Espaço para 8 Adultos e 2 Crianças</li>
                            <li>Vista para o Mar</li>
                        </ul>
                        <a href="#" class="book_now">Reserve Agora</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/2.png" alt="">
                        </div>
                        <h3>Promoção 20% de Desconto<br>
                            Apartamento Francisco Albuquerque</h3>
                        <ul>
                            <li>Suíte de Luxo</li>
                            <li>Espaço para 6 adultos e 3 crianças</li>
                            <li>Vista para o Mar</li>
                        </ul>
                        <a href="#" class="book_now">Reserve Agora</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/offers/3.png" alt="">
                        </div>
                        <h3>Promoção 40% de Desconto<br>
                            Apartamento Hotzone</h3>
                        <ul>
                            <li>Suíte de Luxo</li>
                            <li>2 Adultos</li>
                            <li>Vista para o Morro Boa Vista</li>
                        </ul>
                       <div class="Query_border">
                            <br>
                       <a href="#" class="book_now">Reserve Agora</a>
<h3><dd onclick="index.html"><a href=maisapartamentos2.php>Ver mais...</a></dd></h3>
                </div>
            </div>
</div> 
</div>         
    </div>
    
    <div class="about_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb2 d-flex">
                        <div class="img_1">
                            <img src="img/about/1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="about_info">
                        <div class="section_title mb-20px">
                           
                            <h3>Servimos comidas<br>
                              Frescas e deliciosas</h3>
                        </div>
                        <p>Café em grãos 100% Arábica, de cultivo sustentável moído na hora, frutas frescas, frutas secas, pães, bolos, integrais fresquinhos e atendimento a pedidos. Para quem aprecia comer bem, com bom gosto e simplicidade num ambiente rústico com um toque de modernidade.</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    
    <div class="features_room">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-100">
                        <span>Quartos em Destaque</span>
                        <h3>Escolha o melhor quarto</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="rooms_here">
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/1.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Por R$250/noite</span>
                            <h3>Quarto vip</h3>
                        </div>
                        <a href="#" class="line-button">Reserve agora</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/2.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Por R$250/noite</span>
                            <h3>Quarto de Luxo</h3>
                        </div>
                        <a href="#" class="line-button">Reserve agora</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/3.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Por R$250/noite</span>
                            <h3>Casa de Festa</h3>
                        </div>
                        <a href="#" class="line-button">Reserve agora</a>
                    </div>
                </div>
            </div>
            <div class="single_rooms">
                <div class="room_thumb">
                    <img src="img/rooms/4.png" alt="">
                    <div class="room_heading d-flex justify-content-between align-items-center">
                        <div class="room_heading_inner">
                            <span>Por R$250/noite</span>
                            <h3>Quarto de casal</h3>
                        </div>
                        <a href="#" class="line-button">Reserve agora</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="forQuery">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-md-12">
                    <div class="Query_border">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="Query_text">
                                <p>Quer reservar uma suíte? Conta-te nos!</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="phone_num">
                                    <a href="#" class="mobile_no"><img src="img/qr.png"width="100px";/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="instragram_area">
        <div class="single_instagram">
            <img src="img/instragram/1.png" alt="">
            <div class="ovrelay">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/2.png" alt="">
            <div class="ovrelay">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/3.png" alt="">
            <div class="ovrelay">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/4.png" alt="">
            <div class="ovrelay">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="single_instagram">
            <img src="img/instragram/5.png" alt="">
            <div class="ovrelay">
                    <i class="fa fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Endereço
                            </h3>
                            <p class="footer_text"> Rua das Pedras, 200  <br>
                                Angra dos Reis, Brasil</p>
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
                                <li><a href="#">Principal</a></li>
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
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        
                           
 
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