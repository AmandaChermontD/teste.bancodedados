<?php
try 
{
$pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost","root","");
}
 catch (PDOException $e) {
echo "Erro com banco de dados: ".$e->getMessage();
}
catch (Exception $e)
{
echo "Erro genérico: ".$e->getMessage();;
}

$res = $pdo-> prepare("INSERT INTO pessoa(nome, telefone, email) VALUES (:n,:t,:e)");
$res->bindValue(":n","Amanda");
$res->bindValue(":t","879604");
$res->bindValue(":e","amanda@hotmail.com");
$res->execute();

?>