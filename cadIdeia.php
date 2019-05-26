<?php
require 'DAO/dbconection.php';

$nomeIdeia = isset($_POST['nomeIdeia'])?$_POST['nomeIdeia']:"Sem nome";
$objetivoIdeia = isset($_POST['objetivoIdeia'])?$_POST['objetivoIdeia']:"Sem objetivo";
$justificativaIdeia = isset($_POST['justificativaIdeia'])?$_POST['justificativaIdeia']:"Sem justificativa";
$informacoesIdeia = isset($_POST['informacoesIdeia'])?$_POST['informacoesIdeia']:"Sem informações";
$caracteristicasIdeia = isset($_POST['caracteristicasIdeia'])?$_POST['caracteristicasIdeia']:"Sem caracteristicas";
$idAcademico = base64_decode($_COOKIE['idMecer']);

try{
    $sql = "INSERT INTO ideias (nome, objetivo, justificativa, informacoes, caracteristicas) VALUES ('$nomeIdeia', '$objetivoIdeia', '$justificativaIdeia', '$informacoesIdeia', '$caracteristicasIdeia')";
    $sql = $pdo->query($sql);
    if ($sql->rowCount()==1){
        $sql = "SELECT max(id)as id FROM ideias WHERE nome = '$nomeIdeia'";
        $sql = $pdo->query($sql);
        $idIdeia;
        foreach ($sql as $row){
            $idIdeia = $row['id'];
        }
        $sql = "INSERT INTO ideia_academico (idideia, idacademico, contlike) VALUES ('$idIdeia', '$idAcademico', '0')";
        $sql = $pdo->query($sql);
    }
}catch (Exception $e){
    echo "Erro inesperado";
}

header("location: http://site1.pc/#!/ideias");