<?php

require("../model/model.php");

switch ($_POST['formulario']) {
    case "autenticacao":
        autenticacao();
        break;
    case "cadastroInicial":
        cadastroInicial();
        break;
    default:
        header('Location: ../index.php');
}

function TelaHome() {
    header('Location:../view/homepage.php');
}

function autenticacao() {

}

function cadastroInicial() {
    $model = new Model();
    $nome = $_POST['nome'];
    $matricula = $_POST['matr'];
    $senha1 = $_POST['senha1'];
    $senha2 = $_POST['senha2'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $periodo = $_POST['periodo'];
    $crult = $_POST['crultperiodo'];
    $cratual = $_POST['crtotal'];
    $dpto = $_POST['departamento'];
    $formatura = $_POST['formatura'];
    $creditos = $_POST['creditos'];
    $qtdrep = $_POST['qtdrep'];
    $resultado = $model->novoAluno($matricula, $email, $curso, $periodo, $crult, $cratual, $dpto, $formatura, $creditos, $qtdrep);
    if (!$resultado) {
        echo "<script>alert('Ocorreu algum erro no cadastro. Por favor tentar novamente mais tarde.');window.location.href='../view/homepage.php';  </script>";
    } else {
        echo "<script>alert('Cadastrado com sucesso. Entre no sistema para continuar.'); window.location.href='../view/login.php'; </script>";
    }
}
