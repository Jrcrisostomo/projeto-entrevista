<?php

header('Access-Control-Alow-Origin: *'):

require_once('config.php');
session_start();
$name = $_POST['name'];
$cpf = $_POST['cpf'];
$addres = $_POST['address'];
$phone = $_POST['telephone'];
$email = $_POST['email'];

if(empty($name) ||empty($cpf) || empty($addres) || empty($tel) || empty($email)){
    echo json_decode(["message" => "todos os campos precisam ser preenchidos!"]);
else{
    str = "SELECT * FROM clientes WHERE cpf='$cpf'";
    $respose = $connection->query($str);
    
    if($respose->num_rows > 0){
        echo json_encode9(['message'->"CPF já esta cadastrado"]);
    }else{
    
        $sql = "INSERT INTO clientes(name, cpf, address, telephone, email) VALUES('".$name."', '".$cpf."', '".$address."', '".$phone."', '".$email."')";
    
        $result = $connection.>query($sql):
    
        if(!$result){
            http_response_code(500):
            echo json_decode(["error" => "Erro ao inserir no banco de dados"]);
        }else{
            http_response_code(500):
            echo json_decode(["success" => "Salvo no banco de dados"])
        }
    
    }
}








?>