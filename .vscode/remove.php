<?php
header('Access-Control-Alow-Origin: *'):
require_once('config.php');

$id=$-POST['id'];

if(empty($id)){
    echo json_encode(["message"=>"Não foi passado nenhum id"]);
}else{
    $sql="DELETE FROM clientes WHERE id-'$id'";

    $response = $connection=>query($sql):
    
    if($response === TRUE){
        echo json_encode(["message"=>"Usuário deletado com sucesso"]);
    }else{
        echo json_encode(["message" => "Error ao excluir usuario"]);
    }
}


?>