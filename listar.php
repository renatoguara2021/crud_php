<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">

    <title>Comando Select em PHP</title>
</head>
<body>
<div>
    <ul>
        <h1>Listar Usuários em PHP</h1>
        <li><a href="formulario.html">Cadastrar Usuário</a></li>
    </ul>
</div>
<table  class="table table-striped table-hover table-bordered" width="100%"> 
    <tr> 

    <thead>
    <tr>
      <th scope="col">Id:</th>
      <th scope="col">Nome:</th>
      <th scope="col">E-mail:</th>
      <th scope="col">Senha:</th>
      <th scope="col">Nível Acesso:</th>
      <th scope="col">Data Cadastro:</th>
      <th scope="col">Modificado:</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
          

    <?php
     include_once './connection.php';

    $query_users = "SELECT id,nome,email,senha,niveis_acesso_id,created,modified FROM users ORDER BY id ASC";

    $result_users = $conn->prepare($query_users);

    $result_users->execute();

       
       ?>
   <?php while($row = $result_users->fetch(PDO::FETCH_ASSOC)){?>

    
       
    <tr>
        
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['nome']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['senha']; ?></td>
        <td><?php echo $row['niveis_acesso_id']; ?></td>
        <td><?php echo $row['created']; ?></td>
        <td><?php echo $row['modified']; ?></td>
        
        <td> 
            <a class="btn btn-warning" href="update.php?id=<?php echo $row['id']; ?>">Editar </a> 
            
            <a class="btn btn-danger" href="deletar.php?id=<?php echo $row['id']; ?>">Excluir</a> 
        </td> 
        
   </tr>
   <?php } ?>

   </table>


    



    <scritp src="/assets/js/popper.min.js"></scritp>
    <scritp src="/assets/js/bootstrap.min.js"></scritp>
    <scritp src="/assets/js/jquery-3.5.1.min.js"></scritp> 

</body>
</html>