<?php

class Model {

    public function __construct() {

    }

    public function novoAluno($matr, $email, $curso, $periodo, $crult, $cratual, $dpto, $formatura, $creditos, $qtdrep) {
        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $variables = array($matr, $email, $curso, $periodo, $crult, $cratual, $dpto, $formatura, $creditos, $qtdrep);
        $prepared_var = implode(",", $variables);
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

}
