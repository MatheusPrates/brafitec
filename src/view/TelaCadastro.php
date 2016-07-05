<html>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
    <style>
        h1 {
            font-size: 300%;
            color: #8B4513;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <form action="../controller/controller.php" method="post">
        <body style="margin-left:0px;margin-top:-8px">
            <div style="width:1360px">
                <div style="height:200px;background-color:#FFF8DC">
                    <div style="padding-top:50px;padding-left:50px;width:70%;float:left">
                        <h1> Brafitec PUC-RIO </h1>
                    </div>
                    <div style="float:right;padding-right:200px;padding-top:30px">
                        <p style="font-size: 120%"> Entrar no sistema: </p>
                        <a href="login.php">  <button type="button" class=" btn btn-primary">Entrar</button></a>

                        <button class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
                <div style="margin-left:15%;margin-right:10%;margin-top:5%">
                    <h3><strong>Cadastro de dados:</strong></h3>
                    <h4 style="color:red">Todos os campos são de preenchimento obrigatório </h4>
                    <hr class="footer-hr">
                    <h3><strong>Dados pessoais: </strong></h3>
                    <div style="margin-top:5%">
                        <div class="row form-inline">
                            <label for="name" class="control-label">Nome: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="nome">
                            <label for="login" style="padding-left:10px" class="control-label">Matrícula: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="matr">

                        </div>
                        <div class="row form-inline" style="margin-top:10px">
                            <label for="password"  class="control-label">Senha: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="senha1">
                            <label for="password" style="padding-left:10px" class="control-label">Confirme a senha: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="senha2">
                            <label style="padding-left:10px" class="control-label">Email: </label>
                            <input type="email" style="width:15%;margin-left:10px" class="form-control" name="email">
                        </div>
                    </div>
                    <hr class="footer-hr">
                    <h3><strong>Dados acadêmicos: </strong></h3>
                    <div style="margin-top:5%">
                        <div class="row form-inline">
                            <label for="name" class="control-label">Curso: </label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="curso">
                            <label for="login" style="padding-left:10px" class="control-label">Período: </label>
                            <input type="number" style="width:15%;margin-left:10px" class="form-control" name="periodo">
                            <label for="password" style="padding-left:10px" class="control-label">CR do período: </label>
                            <input type="number" step="0.1" placeholder="Ex: 8.0" style="width:10%;margin-left:10px" class="form-control" name="crultperiodo">
                            <label for="password" style="padding-left:10px" class="control-label">CR acumulado: </label>
                            <input type="number" step="0.1"  placeholder="Ex: 8.0" style="width:10%;margin-left:10px" class="form-control" name="crtotal">
                        </div>
                        <div class="row form-inline" style="margin-top:10px">
                            <label for="name" class="control-label">Departamento:</label>
                            <input type="text" style="width:15%;margin-left:10px" class="form-control" name="departamento">
                            <label for="login" style="padding-left:10px" class="control-label">Semestre de formatura: </label>
                            <input type="text" style="width:15%;margin-left:10px" placeholder="Ex: 2018.1" class="form-control" name="formatura">
                            <label for="password" style="padding-left:10px" class="control-label">Créditos cursados: </label>
                            <input type="number" style="width:10%;margin-left:10px" class="form-control" name="creditos">
                        </div>
                        <div class="row form-inline" style="margin-top:10px">
                            <label for="name" class="control-label">Quantidade de reprovações:</label>
                            <input type="number" style="width:15%;margin-left:10px" class="form-control" name="qtdrep">
                        </div>
                        <div style="margin-top:20px">
                            <input type="hidden" name="formulario" value="cadastroInicial"/>
                            <button class="btn btn-success" type="submit">Confirmar</button>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </form>
