<form action="../controller/controller_cliente.php" method="post">
    <!-- Caixas de texto que receberão os valores da classe cliente-->
    Nome: <input type="text" name="nome" /><br/>
    Endereco: <input type="text" name="endereco" /><br/>
    Email: <input type="text" name="email" /><br/>
    Telefone: <input type="text" name="telefone" /><br/>
	<input type="hidden" name="formulario" value="salvarCliente" />
    <button type="submit">Enviar</button>
</form>
 
