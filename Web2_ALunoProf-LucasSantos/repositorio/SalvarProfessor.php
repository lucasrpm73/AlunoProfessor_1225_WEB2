<?php
include_once('conexao.php');

require_once('../modelo/Professor.php');
$Professor = new Professor();

$Professor->setNome($_POST['nome']);
$Professor->setIdade($_POST['idade']);
$Professor->setCpf($_POST['cpf']);
$Professor->setSiape($_POST['siape']);

try {
    $mgs_professor = "insert into Aluno(nome, idade, cpf, siape) values('".$Aluno->getNome()."','".$Aluno->getIdade()."','".$Aluno->getCpf()."','".$Aluno->getSiape()."');";
    exec($mgs_professor);
    echo"Professor Salvo!";
} catch (\Throwable $th) {
     echo $th->getMessage();
 }
?>