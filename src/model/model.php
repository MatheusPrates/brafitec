<?php

class Model {

    public function __construct() {

    }

    public function novoAluno($matr, $email, $curso, $periodo, $crult, $cratual, $dpto, $formatura, $creditos, $qtdrep) {
        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);
        if ($connection) {
            $sql = "INSERT INTO aluno (matricula,email,curso,periodoatual,crultperiodo,cratual,departamento,formatura,totaldecreditos,qtdreprovacoes) "
                    . "VALUES( " . $matr . ",'" . $email . "','" . $curso . "'," . $periodo . "," . $crult . "," . $cratual . ",'" . $dpto . "','" . $formatura . "'," . $creditos . "," . $qtdrep . ")";
            $result = pg_query($sql);
            pg_close();
            return $result;
        } else {
            return FALSE;
        }
    }

    public function visualizaPessoa($nome, $endereço,$complemento,$cep, $numcasa, $bairro, $cidade, $pais, $telfixo, $celular, $nacionalidade, $identidade, $orgexpeditor, $cpf, $datanascimento) {

        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);

        if ($connection) {
            $sql = "INSERT INTO pessoa (numero,nome,endereco,bairro,cidade,pais,telefonefixo,celular,nacionalidade,rg,orgaoexpedidor,cpfdapessoa,datanascimento,complemento,cep) "
                    . "VALUES( " . $numcasa. ",'" . $nome . "','" . $endereço ."','" . $bairro . "','" . $cidade . "','"
                    . $pais . "'," . $telfixo . "," . $celular . ",'" . $nacionalidade . "'," . $identidade . ",'" . $orgexpeditor . "'," . $cpf . ",'" . $datanascimento . "','"
                    .$complemento."',".$cep.")";

            $result = pg_query($sql);
            // return $result;
        } else {
            // return FALSE;
        }
    }

}
