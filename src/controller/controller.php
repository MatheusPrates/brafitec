<?php

require("../model/model.php");

switch ($_POST['formulario']) {
    case "autenticacao":
        autenticacao();
        break;
    case "cadastroInicial":
        cadastroInicial();
        break;
    case "AlterarDadosPessoais":
        alterarDadosCadastrais();
        break;
    case "AlterarDadosFiliacao":
        alterarDadosFiliacao();
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
    $error = array();
    $data = array();
    if (!isset($nome) || empty($nome)) {
        $error[] = 'Campo Nome não preenchido.\n';
    }
    if (!isset($matricula) || empty($matricula)) {
        $error[] = 'Campo Matricula não preenchido.\n';
    }
    if (!isset($senha1) || empty($senha1)) {
        $error[] = 'Campo Senha não preenchido.\n';
    }
    if (!isset($senha2) || empty($senha2)) {
        $error[] = 'Campo Confirme a senha não preenchido.\n';
    }
    if ($senha1 !== $senha2) {
        $error[] = 'Senhas não são iguais.\n';
    }
    if (!isset($email) || empty($email)) {
        $error[] = 'Campo Email não preenchido.\n';
    }
    if (!isset($curso) || empty($curso)) {
        $error[] = 'Campo Curso não preenchido.\n';
    }
    if (!isset($periodo) || empty($periodo)) {
        $error[] = 'Campo Período não preenchido.\n';
    }
    if (!isset($crult) || empty($crult)) {
        $error[] = 'Campo CR do período não preenchido.\n';
    }
    if (!isset($cratual) || empty($cratual)) {
        $error[] = 'Campo CR acumulado não preenchido.\n';
    }
    if (!isset($dpto) || empty($dpto)) {
        $error[] = 'Campo Departamento não preenchido.\n';
    }
    if (!isset($formatura) || empty($formatura)) {
        $error[] = 'Campo Semestre da formatura não preenchido.\n';
    } else {
        $len = strlen($formatura);
        $ponto = substr($formatura, -2, 1);
        $ano_atual = date('Y');
        $ano = substr($formatura, 0, 4);

        if ($len != 6 || $ponto !== '.' || $ano < $ano_atual) {
            $error[] = 'Campo Semestre da formatura não foi preenchido no formato do exemplo.\n';
            $formatura = '';
        }
    }
    if (!isset($creditos) || empty($creditos)) {
        $error[] = 'Campo Créditos cursados não preenchido.\n';
    }
    if (!isset($qtdrep) || empty($qtdrep)) {
        $error[] = 'Campo Quantidade de reprovações não preenchido.\n';
    }
    if (count($error) > 0) {
        $data['senha1'] = '';
        $data['senha2'] = '';
        $data['nome'] = $nome;
        $data['matricula'] = $matricula;
        $data['email'] = $email;
        $data['curso'] = $curso;
        $data['periodo'] = $periodo;
        $data['crult'] = $crult;
        $data['cratual'] = $cratual;
        $data['dpto'] = $dpto;
        $data['formatura'] = $formatura;
        $data['creditos'] = $creditos;
        $data['qtdrep'] = $qtdrep;
        $data['error'] = $error;
        header("Location:../view/TelaCadastro.php?data=" . urlencode(serialize($data)));
    }
    $resultado = $model->novoAluno($matricula, $email, $curso, $periodo, $crult, $cratual, $dpto, $formatura, $creditos, $qtdrep);
    if (!$resultado) {
        echo "<script>alert('Ocorreu algum erro no cadastro. Por favor tentar novamente mais tarde.');window.location.href='../view/homepage.php';  </script>";
    } else {
        $resultadoLogin = $model->novaAutenticacao($matricula, $senha1);
        if ($resultadoLogin) {
            echo "<script>alert('Cadastrado com sucesso. Entre no sistema para continuar.'); window.location.href='../view/login.php'; </script>";
        } else {
            echo "<script>alert('Ocorreu algum erro no cadastro. Por favor tentar novamente mais tarde.');window.location.href='../view/homepage.php';  </script>";
        }
    }
}

function alterarDadosCadastrais() {
    $model = new Model();
    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $endereço = $_POST['endereço'];
    $numcasa = $_POST['numcasa'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $pais = $_POST['pais'];
    $telfixo = $_POST['telfixo'];
    $celular = $_POST['celular'];
    $nacionalidade = $_POST['nacionalidade'];
    $identidade = $_POST['identidade'];
    $orgexpeditor = $_POST['orgexpeditor'];
    $cpf = $_POST['cpf'];
    $datanascimento = $_POST['datanascimento'];
    $estadocivil = $_POST['estadocivil'];
    $numfilhos = $_POST['numfilhos'];
    $email = $_POST['email'];
    $cep = $_POST['cep'];
    $error = array();
    $data = array();



    $datanascimento = implode("-", array_reverse(explode("/", $datanascimento)));

    $resultado = $model->visualizaPessoa($nome, $endereço, $complemento, $cep, $numcasa, $bairro, $cidade, $pais, $telfixo, $celular, $nacionalidade, $identidade, $orgexpeditor, $cpf, $datanascimento);
    if (!$resultado) {
        echo "<script>alert('Ocorreu algum erro no cadastro. Por favor tentar novamente mais tarde.');window.location.href='../view/homepage.php';  </script>";
    } else {
        echo "<script>alert('Cadastrado com sucesso. Entre no sistema para continuar.'); window.location.href='../view/login.php'; </script>";
    }
}
