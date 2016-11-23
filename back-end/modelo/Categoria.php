<?php
header('Content-Type: text/html; charset=utf-8');
class Categoria{
	private $id;
	private $categoria;

    public function getId(){
    	return $this->id;
    }
    public function getCategoria(){
        return $this->categoria;
    }
    public function setId($id){
    	$this->id=$id;
    }
    public function setCategoria($categoria){
    	$this->categoria=$categoria;
    }
    public function toString(){ 
    	return "Id_categoria: ". $this->getId() .";" ." Categoria: " . $this->getCategoria(); 
    }
}

$c = new Categoria();
$c -> setId(1);
$c -> setCategoria('Iluminação');
echo $c->toString();
 
?>