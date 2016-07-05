<?php

require("../model/cliente.php");

// guardando na variável p os dados provenientes do formulário
// os valores são passados para o objeto
switch ($_POST['formulario']) {
    case "salvarCliente":
        salvarCliente();
        break;
    default:
        header('Location: ../index.php');
}

function salvarCliente() {
    $cliente = new cliente();

    $cliente->setNome($_POST['nome']);
    $cliente->setEndereco($_POST['endereco']);
    $cliente->setEmail($_POST['email']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->salvar();
    header('Location: ../view/homepage.php');
}

?>