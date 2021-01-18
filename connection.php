<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Conexão em PDO em PHPtitle></title>
</head>
<body>
    
<?php
/* ######################CREDENCIAIS DO SERVIDOR PHP######################   */

$servidor= 'localhost';
$user = 'root';
$password = '';
$dbName = 'celke_php';
$port = 3306;


try{

$conn = new PDO("mysql:host=$servidor;port=$port;dbname=" .$dbName, $user,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
<div class="alert alert-success" role="alert">
  Conectado com Sucesso!!!!!!
</div>

<?php
}catch(PDOException $ex){

?>

<div class="alert alert-danger" role="alert">
  Erro ao Conectar!!!!!!
</div>
<?php
    echo "<h1>Erro ao Conectar</h1>".$ex->getMessage();

}

?>

        <script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>



