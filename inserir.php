<?php

session_start();

include_once './connection.php';

$nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST,"senha",FILTER_SANITIZE_STRING);
//$created = filter_input(INPUT_POST,"created",FILTER_SANITIZE_STRING);
$modified = filter_input(INPUT_POST,"modified",FILTER_SANITIZE_STRING);


var_dump($_POST);


//Insere os dados no banco
$get_data = "INSERT INTO users (nome, email,senha,created, modified) VALUES (:nome, :email, :senha,NOW(), :modified)";
 
$insert_data = $conn->prepare($get_data);
$insert_data->bindParam(':nome', $nome);
$insert_data->bindParam(':email', $email);
$insert_data->bindParam(':senha', $senha);
$insert_data->bindParam(':modified', $modified);


if($insert_data->execute()){
    header("Location:listar.php"); 
    $_SESSION['msg'] = "<p style='color:green;background:#fff;'>Cadastrado com Sucesso!!!!</p>";
}else{
    $_SESSION['msg'] = "<p style='color:tomato;background:#fff;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
    header("Location:inserir.php"); 
}
