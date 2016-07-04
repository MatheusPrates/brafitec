<?php
    require("../model/cliente.php");
 
    // guardando na variável p os dados provenientes do formulário
    $p = $_POST;
 
    $cliente = new cliente();
 
    // os valores são passados para o objeto
    $cliente->setNome($p['nome']);
    $cliente->setEndereco($p['endereco']);
    $cliente->setEmail($p['email']);
    $cliente->setTelefone($p['telefone']);

	switch ($p['formulario']) {
    case "salvarCliente":
        salvarCliente($cliente);
        break;
	default:
       header('Location: ../index.php');
	}
	
	function salvarCliente($cliente){
		$cliente->salvar();
	}
	
?>