<?php
require 'DAO/dbconection.php';

$cadastroNome = isset($_POST['cadastroNome'])?$_POST['cadastroNome']:"Nome";
$cadastroEmail = isset($_POST['cadastroEmail'])?$_POST['cadastroEmail']:"Email";
$cadastroTurma = isset($_POST['cadastroTurma'])?$_POST['cadastroTurma']:"Turma";
$cadastroNasc = isset($_POST['cadastroNasc'])?$_POST['cadastroNasc']:"01/01/2000";
$cadastroFone = isset($_POST['cadastroFone'])?$_POST['cadastroFone']:"00000000000";
$cadastroCpf = isset($_POST['cadastroCpf'])?$_POST['cadastroCpf']:"11111111111";
//$cadastroIdeia = isset($_POST['cadastroIdeia'])?$_POST['cadastroIdeia']:"texto ideia"; //opção desabilidade
$usuario = isset($_POST['usuario'])?$_POST['usuario']:$cadastroNome;
$senha = isset($_POST['senha'])?md5($_POST['senha']):"sem senha";
print($cadastroNome."<br/>"
    .$cadastroEmail."<br/>"
    .$cadastroTurma."<br/>"
    .$cadastroNasc."<br/>"
    .$cadastroFone."<br/>"
    .$cadastroCpf."<br/>"
    .$usuario."<br/>"
    .$senha."<br/><br/>");



try{
    $sql = "INSERT INTO academicos (nome, email, turma, dtnasc, telefone, cpf, usuario, senha) VALUES ('$cadastroNome', '$cadastroEmail', '$cadastroTurma', '$cadastroNasc', '$cadastroFone', '$cadastroCpf', '$usuario', '$senha')";
    $sql = $pdo->query($sql);
}catch (PDOException $e){
    echo "Erro no comando ".$e->getMessage();
}catch (Exception $e){
    echo "Erro inesperado ".$e->getMessage();
}


//Descomentar essa linha para redirecionar o caboclo para a pagina de cadastro logo apos cadastrar
//header("location: http://site1.pc/#!/ideias");
