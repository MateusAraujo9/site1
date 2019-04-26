<?php

$dbsn = 'pgsql:dbname=mecer;host=localhost';
$dbuser = 'postgres';
$dbpass = 'postgres';


try{
    $pdo = new PDO($dbsn, $dbuser, $dbpass);
}catch (PDOException $e){
    echo "Falhou a conexão".$e->getMessage();
}catch (Exception $e){
    echo "Erro inesperado";
}
/**
 * Created by PhpStorm.
 * User: Mateus
 * Date: 25/04/2019
 * Time: 19:06
 */