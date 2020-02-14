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
    <link rel="icon" type="imagem/png" href="img/logo.png">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Faça contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Pousada Parnaioca</title>
    <style> 
.col-xl-6{
    margin-right:100px;
}
.Query_border{
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
.container-fluid{
    color:white;
    
}
.bradcam_area{
    margin-top:-20px;
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
              <li class=""><a href="index.html">Página inicial</a></li>
              <li><a href="sobre.php">Sobre</a></li>
              <li><a href="suites.php">Suítes</a></li>
              <li><a href="apartamentos.php">Apartamentos</a></li>
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
                            <img src="img/p7.png" alt="">
                        </div>
                        <h3>Promoção 35% de Desconto <br>
                            </h3>
                        <ul>
                            <li>Apartamento 5 quartos</li></li>
                            <li>Espaço para 3 Adultos e 2 Crianças</li>
                            <li>Sala de jogos</li>
                        </ul>
                        <a href="#" class="book_now">Reserve Agora</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/p6.png" alt="">
                        </div>
                        <h3>Promoção 20% de Desconto<br>
                            </h3>
                        <ul>
                            <li>Apartamento 7 quartos</li>
                            <li>Espaço para 6 adultos e 3 crianças</li>
                            <li>Piscina exclusiva</li>
                        </ul>
                        <a href="#" class="book_now">Reserve Agora</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb">
                            <img src="img/p5.png" alt="">
                        </div>
                        <h3>Promoção 40% de Desconto<br>
                            </h3>
                        <ul>
                            <li>Apartamento 6 quartos</li>
                            <li>3 Adultos e 3 crianças</li>
                            <li>Silenciosa e calma, play kis para crianças</li>
                        </ul>
                       <div class="Query_border">
                            
                       <a href="#" class="book_now">Reserve Agora</a>

                    </div>
                </div>
                
            </div>
            <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb"><br/>
                            <img src="img/p4.png" alt="">
<br/>
                        </div>
                        <h3>Promoção 25% de Desconto<br>
                        </h3>
                        <ul>
                            <li>Apartamento 4 quartos</li>
                            <li>2 Adultos e 2 crianças</li>
                            <li>Academia exclusiva e hidromassagem</li>
                        </ul>
                       <div class="Query_border">
                            
                       <a href="#" class="book_now">Reserve Agora</a>

                    </div>
</div> 
                  
    </div>
    <div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb"><br/>
                            <img src="img/ap3.png" alt="">
<br/>
                        </div>
                        <h3>Promoção 10% de Desconto<br>
                            </h3>
                        <ul>
                            <li>Apartamento 3 quartos</li>
                            <li>2 Adultos e 1 criança</li>
                            <li>Vista para o Morro Boa Vista</li>
                        </ul>
                       <div class="Query_border">
                            
                       <a href="#" class="book_now">Reserve Agora</a>

                    </div>
    
    
</div>
</div>
<div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb"><br/>
                            <img src="img/ap2.png" alt="">
<br/>
                        </div>
                        <h3>Promoção 40% de Desconto<br>
                            </h3>
                        <ul>
                            <li>Apartamento com 2 quartos</li>
                            <li>2 Adultos</li>
                            <li>Vista para o Mar e Spa</li>
                        </ul>
                       <div class="Query_border">
                            
                       <a href="#" class="book_now">Reserve Agora</a>

                    </div>
    
</div>

</div>
<div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb"><br/>
                            <img src="img/ap1.png" alt="">
<br/>
                        </div>
                        <h3>Promoção 36% de Desconto<br>
                            </h3>
                        <ul>
                            <li>Apartamento 6 quartos</li>
                            <li>6 Adultos</li>
                            <li>Vista para o Usina Nuclear</li>
                        </ul>
                       <div class="Query_border">
                            
                       <a href="#" class="book_now">Reserve Agora</a>
                       
</div>

</div>

</div>
<div class="col-xl-4 col-md-4">
                    <div class="single_offers">
                        <div class="about_thumb"><br/>
                            <img src="img/qr.png" alt="">
<br/>
                        </div>
                        <h3>Reserve agora<br>
                            pelo WhatsApp</h3>
                        <ul>
                            <li>Número +55(21) 973389448</li>
                            
                        </ul>
                       <div class="Query_border">
                            
                      

                    </div>
    
</div>

</div>
                           
<br/>

                        </div>
                   
        
</div>

</div>
                    </div>
</div>    
    
</div>
</div>
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