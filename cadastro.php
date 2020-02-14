<html>
  <body>
  <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Página inicial</a></li>
  </body>
</html>
<?php

/*Incluir o arquivo responsável pela conexão com o banco de dados*/

include "conexao.php";

/*Prepara para receber os dados do formulário*/

//if(isset($_POST['cadastrar'])){
    

/*Definir variável pegar que armazena os do formulário indicado pelo nome dentro do método. O método usado no PHP é 
equivalente ao usado no formulário. */    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $senha =  $_POST['senha'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];


    $pesquisa = "SELECT email FROM cadastro WHERE email = '$email'";

    $resultado=mysqli_query($conexao,$pesquisa);    
  
  if ($resultado->num_rows > 0){
      echo "E-mail já cadastrado";

  }else{
 
    /*Enviar os dados para a tabela*/

    $sql = "insert into cadastro(email, senha, nome, cpf, cep,  telefone, cidade, estado, endereco) 
    values ('$email','$senha', '$nome', '$cpf', '$cep', '$telefone', '$cidade','$estado','$endereco')";

    $inserir = mysqli_query( $conexao, $sql);
 
    echo "E-mail não cadastrado";

  }
    /*Verificar se os dados foram enviados com sucesso*/



?>