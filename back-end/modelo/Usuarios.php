<?php
header('Content-Type: text/html; charset=utf-8');
class Usuarios{
	private $id;
	private $usuario;
	private $senha;
	
   	/*function __construct($id,$usuario,$senha) {
    	$this->id = $id;
    	$this->usuario = $usuario;
    	$this->senha = $senha;
    } */

    public function getUsuario(){
    	return $this->usuario;
    } 
    public function getId(){
    	return $this->id;
    }
    public function getSenha(){
    	return $this->senha;
    }
    public function setId($id){
    	$this->id=$id;
    }
    public function setUsuario($usuario){
    	$this->usuario=$usuario;
    }
    public function setSenha($senha){
    	$this->senha=$senha;
    }
    public function toString(){ 
    	return "Id_usuario: ". $this->getId() .";" ." Usuário: " . $this->getUsuario().";". " Senha: " .  $this->getSenha(); 
    }


}
//$u = new Usuarios(1,'Ana','vaca');
//echo $u->getUsuario();

$u1 = new Usuarios();
$u1->setId(2);
$u1->setUsuario('Wendel');
$u1->setSenha('cuzao');
echo $u1->toString();
 
 //USUARIOS TA FALTANDO MATRICULA E SIAPE
?>