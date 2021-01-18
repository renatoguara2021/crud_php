<?php


include_once './connection.php';

$nome;
$email;
$senha;
$nivelAcessoId;
$criado;


$idUpdate = filter_input(INPUT_GET, "ID",FILTER_SANITIZE_NUMBER_INT);


    $queryUser = "SELECT id, nome, email, senha ,niveis_acesso_id,created FROM users WHERE id = :idUser ";
    $result_user = $conn->prepare($queryUser);

    $result_user->bindParam(':idUser', $idUpdate,PDO::PARAM_INT);
    $result_user->execute();

    $row_user = $result_user->fetch(PDO::FETCH_ASSOC);

    var_dump($row_user);



    try {
        
        $queryUsers = "UPDATE users SET nome = :nome, email = :email, senha = :senha ,niveis_acesso_id = :nivelAcessoId, created =  :criado WHERE id = ?";

        $stmt = $conn->prepare($queryUsers);

        $stmt->bindParam(':nome',$nome,PDO::PARAM_STR);
        $stmt->bindParam(':email', $email,PDO::PARAM_STR);
        $stmt->bindParam(':senha', $senha,PDO::PARAM_STR);
        $stmt->bindParam(':nivelAcessoId', $nivelAcessoId,PDO::PARAM_STR);
        $stmt->bindParam(':criado', $criado,PDO::PARAM_STR);
        $stmt->bindParam(6, $_POST['id']);

        $stmt->execute();


        //var_dump($stmt);

       // header("Location:formulario.html"); 

    } catch (PDOException $ex) {
        
        
        echo  "Erro ao Atualizar Usuário:" .$ex->getMessage();
    }

    