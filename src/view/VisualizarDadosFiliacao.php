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
	 <h3><strong>Dados Filiação: </strong></h3>
	 <div style="margin-top:5%">
         <form action="../controller/controller.php" method="post">
	 <div class="row form-inline">
	 <label for="Responsável" class="control-label">Responsável*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="responsavel">
	 <label for="Nacionalidade" class="control-label">Nacionalidade*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="nacionalidaderesponsavel">
	 <label for="Profissão" class="control-label">Profissão*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="profissaoresponsavel">
         <label for="cpf" class="control-label">CPF*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="cpfresponsavel">
	 </div>
	 <div style="margin-top:1%">
	 <div class="row form-inline">
         <label for="Identidade" class="control-label">Identidade*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="identidaderesponsavel"> 
         <label for="Orgao expedidor" class="control-label">Orgão expedidor*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="orgaoexpedidorresponsavel"> 
	 <label for="Endereço" class="control-label">Endereço*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="enderecoresponsavel">
	 <label for="Numero da casa" class="control-label">Número*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="numcasaresponsavel">
	 </div>
	 <div style="margin-top:1%">
	 <div class="row form-inline">
         <label for="Complemento" class="control-label">Complemento: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="complementoresponsavel">
	 <label for="bairro" class="control-label">Bairro*: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="bairroresponsavel">
	 <label for="cidade" class="control-label">Cidade*: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="cidaderesponsavel">
	 <label for="CEP" class="control-label">CEP*: </label>
         <input type="text" style="width:15%;margin-left:10px" class="form-control" name="cepresponsavel">
	 </div>
	 <div style="margin-top:1%">
	 <div class="row form-inline">
         <label for="País" class="control-label">País*: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="paisresponsavel">
	 <label for="Estado civil" class="control-label">Estado civil*: </label>
	 <select style="margin-top:10px" class="report-select user-success" name="estadocivilresponsavel">
         <option value="solteiro">Solteiro</option>
         <option value="casado">Casado</option>
         <option value="viuvo">Viuvo</option>
         <option value="divorciado">Divorciado</option>
	 </select>
	 <label for="Telefone fixo" class="control-label">Telefone fixo*: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="telefoneresponsavel">
	 <label for="Celular" class="control-label">Celular*: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="celularresponsavel">
	 </div>
	 <div style="margin-top:1%">
	 <div class="row form-inline">
         <label for="Datanascimento" class="control-label">Data de nascimento*: </label>	
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="datanascimentoresponsavel"> 
	 <label for="Irmãos aluno" class="control-label">Quantidade de irmãos do aluno : </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="qtdirmaos">
	 <label for="Irmãos PUC" class="control-label">Quantos estudam na PUC?: </label>
	 <input type="text" style="width:15%;margin-left:10px" class="form-control" name="qtdirmaospuc">
	 </div>
	 <div style="margin-top:1%">
	 <div class="row form-inline">
         <input type="hidden" name="formulario" value="AlterarDadosFiliacao" />
	 <button class="btn btn-success">Alterar</button>
	 <button class="btn btn-danger">Voltar</button>
	 </div>
         </form>