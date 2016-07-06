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

    public function visualizaPessoa($nome, $endereço, $complemento, $cep, $numcasa, $bairro, $cidade, $pais, $telfixo, $celular, $nacionalidade, $identidade, $orgexpeditor, $cpf, $datanascimento) {

        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);

        if ($connection) {
            $sql = "INSERT INTO pessoa (numero,nome,endereco,bairro,cidade,pais,telefonefixo,celular,nacionalidade,rg,orgaoexpedidor,cpfdapessoa,datanascimento,complemento,cep) "
                    . "VALUES( " . $numcasa . ",'" . $nome . "','" . $endereço . "','" . $bairro . "','" . $cidade . "','"
                    . $pais . "'," . $telfixo . "," . $celular . ",'" . $nacionalidade . "'," . $identidade . ",'" . $orgexpeditor . "'," . $cpf . ",'" . $datanascimento . "','"
                    . $complemento . "'," . $cep . ")";

            $result = pg_query($sql);
            return $result;
        } else {
            return FALSE;
        }
    }
    public function visualizaPessoaResponsavel($responsavel,$enderecoresponsavel,$complementoresponsavel ,$cepresponsavel, $numcasaresponsavel, $bairroresponsavel, $cidaderesponsavel,
                                               $paisresponsavel, $telfixoresponsavel, $celularresponsavel, $nacionalidaderesponsavel, $identidaderesponsavel, $orgexpedidorresponsavel
                                               , $cpfresponsavel, $datanascimentoresponsavel) {

        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);

        if ($connection) {
             $sql = "INSERT INTO pessoa (numero,nome,endereco,bairro,cidade,pais,telefonefixo,celular,nacionalidade,rg,orgaoexpedidor,cpfdapessoa,datanascimento,complemento,cep) "
                    . "VALUES( " . $numcasaresponsavel. ",'" . $responsavel . "','" . $enderecoresponsavel ."','" . $bairroresponsavel . "','" . $cidaderesponsavel . "','"
                    . $paisresponsavel . "'," . $telfixoresponsavel . "," . $celularresponsavel . ",'" . $nacionalidaderesponsavel 
                    . "'," . $identidaderesponsavel . ",'" . $orgexpedidorresponsavel . "'," . $cpfresponsavel . ",'" . $datanascimentoresponsavel . "','".$complementoresponsavel."',".$cepresponsavel.")";

            $result = pg_query($sql);
            
            
              return $result;
        } 
        else {
             return FALSE;
        }
            }
        
        public function updateirmaos ($login,$qtdirmaos,$qtdirmaospuc){
            
            
        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);
        
        
        if ($connection) {
            $sql =  "UPDATE TABLE aluno SET qtdirmaos = $qtdirmaos,qtdirmaospuc = $qtdirmaospuc WHERE matricula = $login" ; 
            
             $result = pg_query($sql);
             return $result;
        }
        else {
             return FALSE;
        }
            
        }
        
    public function visualizaReponsavel($login,$nome,$identidaderesponsavel,$cpfresponsavel)
    {
        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);
        
        if ($connection) {
            $sql = "INSERT INTO responsavel (matricula,nome,identidade,cpfresponsavel)"
                    ."VALUES( " .$login. ",'" .$nome. "',".$identidaderesponsavel.",".$cpfresponsavel.")";
           
            $result = pg_query($sql);
            return $result;
        }
        
        else {
             return FALSE;
        }
        
    }


    public function novaAutenticacao($matr, $senha) {
        $database = "host=localhost port=5432 user=postgres password=postgres dbname=brafitec";
        $connection = pg_connect($database);

        if ($connection) {
            $sql = "INSERT INTO autenticacao_aluno (matricula,senha) VALUES (" . $matr . ",'" . md5($senha) . "')";
            echo $sql;
            $result = pg_query($sql);
            return $result;
        } else {
            return FALSE;
        }
    }

}
