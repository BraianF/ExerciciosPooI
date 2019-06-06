<?php

//mysql:host=localhost;dbname=test;port=3306;charset=utf8mb4

$host = '127.0.0.1';
$db   = 'aulaPOO';
$user = 'root';
$pass = '123456';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// $options = [
//     PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//     PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//     PDO::ATTR_EMULATE_PREPARES   => false,
// ];
try {

    $nome = "ped";

    //  $pdo = new PDO($dsn, $user, $pass, $options);
     $pdo = new PDO($dsn, $user, $pass);

     $sql = "select * from pessoa JOIN funcionario ON pessoa.id = funcionario.idpessoa where nome like 'pedro';";
    
     $stmt = $pdo->prepare($sql);
     $stmt->bindParam(':nome', $nome);
     echo "<br> Execute: ".$stmt->execute();
     echo "<br> Lines: ".$stmt->rowCount();
     //$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    //  while($row = $rs->fetch(PDO::FETCH_OBJ)){
    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
        echo "<br>".$row->nome . "<br />";
      }

     //echo "<pre>";
     //var_dump($stmt->fetch(PDO::FETCH_OBJ));
     //echo "</pre>";

} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// public function select($id){
//     $sql = "select * from categoria where id=:valorid order by nome";
//     try{
//         $stmt = $this->conexao->prepare($sql);
//         $stmt->bindParam(':valorid', $id);
//         $stmt->execute();
//         $categorias = $stmt->fetchAll(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'Categoria', ['nome', 'descricao', 'id']);
//         return $categorias;
//     }catch (PDOException $e){
//         throw new PDOException($e);
//     }
// }