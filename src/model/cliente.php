<?php
class Cliente {
    // propriedades da classe objeto
    private $nome;
    private $endereco;
    private $email;
    private $telefone;
 
    // setters e getters
    public function setNome ($nome) {
        $this->nome = $nome;
    }
    public function getNome () {
        return $this->nome;
    }
 
    public function setEndereco ($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco () {
        return $this->endereco;
    }
 
    public function setEmail ($email) {
        $this->email = $email;
    }
    public function getEmail () {
        return $this->email;
    }
 
    public function setTelefone ($telefone) {
        $this->telefone = $telefone;
    }
    public function getTelefone () {
        return $this->telefone;
    }
	
	public function salvar(){
		echo "salvar pessoa ".$this->nome;
	}

	public function excluir(){
		echo "excluir pessoa ".$this->nome;
	}
 
	public function selecionar($nome){
		echo "selecionar pessoa ".$nome;
	}
}
?>