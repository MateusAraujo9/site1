<?php

//Carregar conexão com o banco
require 'DAO/dbconection.php';

$usuario = isset($_POST['usuario'])?$_POST['usuario']:"erro1";
$senha = isset($_POST['senha'])?md5($_POST['senha']):"erro2";

try{
    $sql = "SELECT * FROM academicos WHERE usuario = '$usuario'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount()== 1){
        foreach ($sql->fetchAll() as $user){
            if ($senha == $user['senha']){
                //print "Senha está correta";
                setcookie("idMecer", base64_encode($user['id']), time()+18000);
                setcookie("nomeMecer", base64_encode($user['nome']), time()+18000);
                setcookie("logado", "true", time()+18000);
            }else{
                echo "<script>alert('Usuário ou Senha Incorreta'); location.href=\"http://site1.pc/#!/academicos\"</script>>";
            }
        }
    }else{
        echo "<script>alert('Usuário ou Senha Incorreta'); location.href=\"http://site1.pc/#!/academicos\"</script>>";
        print "usuário não encontrado";
    }

}catch (Exception $e){
    echo "Erro inesperado ".$e->getMessage();
}

echo "<script>location.href=\"http://site1.pc/#!\"</script>>";