<?php


include_once './connection.php';

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

$queryUsers = "DELETE  FROM users WHERE id = :id";

$delete = $conn->prepare($queryUsers);

$delete->bindParam(':id',$id, PDO::PARAM_INT);


if($delete->execute()){


    echo "Usuário apagado com Sucesso!!!!!";

}else{


    echo "Não foi possível apagar usuário";
}


