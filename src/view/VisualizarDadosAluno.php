<html>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <style>
        h1 {
            font-size: 300%;
            color: #8B4513;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <body style="margin-left:0px;margin-top:-8px">
        <div style="width:1360px">
            <div style="height:200px;background-color:#FFF8DC">
                <div style="padding-top:50px;padding-left:50px;width:70%;float:left">
                    <h1 > Brafitec PUC-RIO </h1>
                </div>
                <div style="float:right;padding-right:200px;padding-top:30px">
                    <p style="font-size: 120%;color: #8B4513;font-size:150%;margin-top:20px"> Olá, Matheus. </p>
                    <button type="button" class=" btn btn-danger" style="margin-left:20px">Sair</button>
                </div>
            </div>
            <div style="margin-left:15%;margin-right:10%;margin-top:5%">
                <h3><strong>Dados atualmente cadastrados:</strong></h3>
                <h4 style="color:red">Campos com * são de preenchimento obrigatório </h4>
                <hr class="footer-hr">
                <h3><strong>Dados pessoais: </strong></h3>
                <div style="margin-top:5%">
                    <form action="../controller/controller.php" method="post">
                        <div class="row form-inline">
                            <label for="name" class="control-label">Nome*: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Matheus Suknaic">
                            <label for="login" style="padding-left:10px" class="control-label">Matrícula*: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" value="1413200" readonly>
                            <label for="endereço" class="control-label">Endereço*: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Rua dos Bobos">
                            <label for="Número da casa" class="control-label">Número*: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" value="0">
                        </div>
                        <div style="margin-top:1%">
                            <div class="row form-inline">
                                <label for="Número da casa" class="control-label">Complemento: </label>
                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Qualquer coisa">
                                <label for="bairro" class="control-label">Bairro*: </label>
                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Tijuca">
                                <label for="cidade" class="control-label">Cidade*: </label>
                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Rio de Janeiro">
                                <label for="CEP" class="control-label">CEP*: </label>
                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="20543-000">
                            </div>
                            <div style="margin-top:1%">
                                <div class="row form-inline">
                                    <label for="País" class="control-label">País*: </label>
                                    <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Brasil">
                                    <label for="Telefone fixo" class="control-label">Telefone fixo*: </label>
                                    <input type="text" style="width:15%;margin-left:10px" class="form-control" value="22649117">
                                    <label for="Celular" class="control-label">Celular*: </label>
                                    <input type="text" style="width:15%;margin-left:10px" class="form-control" value="9101055">
                                    <label for="Nacionalidade" class="control-label">Nacionalidade*: </label>
                                    <input type="text" style="width:15%;margin-left:10px" class="form-control" value="Americano">
                                </div>
                                <div style="margin-top:1%">
                                    <div class="row form-inline">
                                        <label for="Identidade" class="control-label">Identidade*: </label>
                                        <input type="text" style="width:15%;margin-left:10px" class="form-control" value="123456789">
                                        <label for="Órgão expedidor" class="control-label">Órgão expedidor*: </label>
                                        <input type="text" style="width:15%;margin-left:10px" class="form-control" value="DENTRAN">
                                        <label for="CPF" class="control-label">CPF*: </label>
                                        <input type="text" style="width:15%;margin-left:10px" class="form-control" value="12345678910">
                                    </div>
                                    <div style="margin-top:1%">
                                        <div class="row form-inline">
                                            <label for="Data de nascimento" class="control-label">Data de nascimento*: </label>
                                            <input type="text" style="width:15%;margin-left:10px" class="form-control" value="23/04/1996">
                                            <label for="Estado civil" class="control-label">Estado civil*: </label>
                                            <select style="margin-top:10px" class="report-select user-success" name="estadocivil">
                                                <option value="solteiro">Solteiro</option>
                                                <option>Casado</option>
                                                <option>Viúvo</option>
                                                <option>Divorciado</option>
                                            </select>
                                        </div>
                                        <div style="margin-top:1%">
                                            <div class="row form-inline">
                                                <label for="Número de filhos" class="control-label">Filhos*: </label>
                                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="0">
                                                <label for="email" class="control-label">Email*: </label>
                                                <input type="text" style="width:15%;margin-left:10px" class="form-control" value="exemplo@gmail.com">
                                            </div>
                                            <div style="margin-top:1%">
                                                <div class="row form-inline">
                                                    <input type="hidden" name="formulario" value="AlterarDadosPessoais">
                                                    <button type="submit" class="btn btn-success">Alterar</button>
                                                    <button class="btn btn-danger">Voltar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>