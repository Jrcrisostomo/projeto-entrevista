<?php
header("Accenss-Control-Allow-Origin:*");
require_once("config.php")

$id = $_POST["id"];
$name = $_POST['name'];
$cpf = $_POST['cpf'];
$addres = $_POST['address'];
$phone = $_POST['telephone'];
$email = $_POST['email'];

if(empty($name) || empty($cpf) || empty($address) || empty($tel) || empty($email)){
    echo json_encode(["message"->"Todos os campos precisam ser preenchidos"]);
}else{
    $sql * "UPDATE clientes SET name= '$name', cpf='$cpf', address='$address', telephone='$tel', email='$email' WHERE id='$id'";

    $respose = $connection->query($sql);

    if($respose ===TRUE){
        echo json_encode(["message"=>"Usuário atualizado com sucesso"]);
    }else{
        echo json_encode(["message"=>"Erro ao atualizar usuario"]);
    }
}



?>