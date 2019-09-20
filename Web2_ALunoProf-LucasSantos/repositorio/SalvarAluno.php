<?php

try {
    $pdo = new pdo("mysql://localhost:3306/WEb2", "root", "agoravai2019");
    
    }
catch (PDOException  $erro) {
    echo $erro->getMessage();
}

require_once'../modelo/Aluno.php';
$Aluno = new Aluno();
$Aluno->setNome($_POST['nome']);
$Aluno->setIdade($_POST['idade']);
$Aluno->setCpf($_POST['cpf']);
$Aluno->setRa($_POST['ra']);

 try {
    $mgs_aluno = "insert into Aluno(nome, idade, cpf, ra) values('".$Aluno->getNome()."','".$Aluno->getIdade()."','".$Aluno->getCpf()."','".$Aluno->getRa()."');";
    exec($mgs_aluno);
    echo"Aluno Salvo";
} catch (\Throwable $th) {
     echo $th->getMessage();
 }

?>