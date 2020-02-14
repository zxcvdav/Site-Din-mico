<?php
//Meu arquivo de conexão

//Conectar ao servidor
$servidor = "localhost";

//Definir o usuário para conexão 
$usuario = "root";

//Senha do usuário
$senha = "";

//Nome do banco de dados que irá conectar
$banco = "projeto";

//Variável que vai receber o resultado da execução
//do método php responsável pela conexão.*/ 
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Verificar se a conexãp está ativa

if(!$conexao){
    die("Erro de conexão: ". $conexao->connect_error);

}
else{
echo ("Conectado com sucesso.");
}

mysqli_set_charset($conexao, 'utf8');

?>