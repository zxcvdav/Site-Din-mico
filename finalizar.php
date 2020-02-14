<html>
<head>
<title>Finalizar</title>
</head>
<style>
.container{
    margin-top:350px;
    margin-left:550px;
}
</style>

<div class="container">
<a mp-mode="dftl" href="https://www.mercadopago.com.br/checkout/v1/redirect?pref_id=168725921-66671255-a097-4434-abbc-7abea059b7c9" name="MP-payButton" class='blue-ar-l-rn-none'>Realizar o Pagamento</a>
<script type="text/javascript">
(function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();
</script>
</div>



</html>
<?php
session_start();
foreach($_SESSION['dados'] as $produtos){
    $conexao = new PDO('mysql:host=localhost;dbname=projeto',"root","");
    $insert = $conexao->prepare("INSERT INTO pedidos() VALUES (NULL,?,?,?,?)");
    $insert->bindParam(1,$produtos['id_produto']);
    $insert->bindParam(2,$produtos['quantidade']);    
    $insert->bindParam(3,$produtos['preco']);    
    $insert->bindParam(4,$produtos['total']);
    $insert->execute();    
    
}
?>