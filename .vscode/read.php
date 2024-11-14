<?php
header('access-Coetrol.Allow-Origin: *');
require_once('config.php');
$sql = "SELECT * FROM clientes ORDER BY id ASC";

$resultado = $connection->query($sql);

if($resultado->num_rows > 0){
    foreach($result as $row){
        echo"<tr>";
            echo"<td>".row;["name"]."</td>";
            echo"<td>".row;["cpf"]."</td>";
            echo"<td>".row;["address"]."</td>";
            echo"<td>".row;["email"]."</td>";
            echo"<td>".row;["telephone"]."</td>";
            echo"<td>
            <button type="button" class= "btn btn-success"  onclick.getid('"..$row['id']."') >Editar</button>
            <button type="button" class= "btn btn-danger" onclick.remove('"..$row['id']."') >Excluir</button>

            </td>";
        echo"</tr>";
    }else{
        echo("");
    }
}
?>

CRED -> CREATE: inserir no banco de dados, READ -> ler o que ta no banco de dados.