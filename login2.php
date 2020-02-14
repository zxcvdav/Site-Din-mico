<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<link rel='stylesheet' href='//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css'>
<style>
    body {
  background: #eee !important;
}

.wrapper {
  margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #fff;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 30px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  font-size: 16px;
  height: auto;
  padding: 10px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 20px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

  </style>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
</head>
<body translate="no">
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
                <li><a href="carrinho.php"><span class="glyphicon glyphicon-shopping-cart"></span> Carrinho</a></li> 
              <li><a href="formhtml.html"><span class="glyphicon glyphicon-user"></span> Registrar</a></li>
              <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
          </div>
        </div>
      </nav>
<div class="wrapper">
<form class="form-signin" method="POST" action = "autenticar2.php">
<h2 class="form-signin-heading">Efetue o Login</h2>
<input type="text" class="form-control" name="email" id="email" placeholder="Email" required="" autofocus="" />
<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required="" />

</label>
<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
</form>
</div>
</body>
</html>


<?php
if(isset($_GET['err'])){
    if($_GET['err']==101){
        echo"login Invalido";
    }else if($_GET['err']==102){
        echo "Necessario Efetuar o login";
    
}else if($_GET['err']==103){
    echo "email invalido";
}
}
    



?>
</body>
</html>