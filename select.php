<?php



include_once './connection.php';



$querySelect = " SELECT  * FROM users  ";


 $resultUsers= $conn->prepare($querySelect);


 $resultUsers->execute();


 while($row_user = $resultUsers->fetch(PDO::FETCH_ASSOC)){


//var_dump($row_user);

echo "ID:". $row_user['id'] ."</br>";
echo "Nome:". $row_user['nome'] ."</br>";
echo "Email:". $row_user['email'] ."</br>";
echo "Senha:". $row_user['senha'] ."</br>";
echo "Situação " . $row_user['sits_user_id'] ."</br>";
echo "Nível de Acesso:". $row_user['niveis_acesso_id'] ."</br>";
echo "Criado em:".$row_user['created'] ."</br><hr>";




 }

