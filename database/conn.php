<?php

$url = "http://localhost/crud/";
$servidor= 'localhost';
$usuario='root';
$senha='';
$banco='crud';

try{

    $pdo =new PDO("mysql:dbname=$banco;host=$servidor;charset=utf8","$usuario", "$senha");
} catch(PDOException $e){
    echo "Erro: " , $e->getMessage();
}

?>