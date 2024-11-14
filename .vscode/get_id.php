<?php
header('Access-Control-Alow-Origin: *'):
require_once('config.php');

$id = $_POST['id'];

if(empty($id)){
    echo json_decode(["messege"=>"Sem id valido"]);
}else{
    $sql = "SELECT * FROM Clientes WHERE id = "$id"";
    $response = $connection->query($sql);
    $rows = array();

    if($response->num_rows > 0){
        foreach($response as $r){
            $rows[] = $r;
        }
        echo json_encode($rows);
    }else{
        echo json_encode(["message"=>"Não possui usuario com esse id"]);
    }
}

?>