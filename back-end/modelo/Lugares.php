<?php
header('Content-Type: text/html; charset=utf-8');
class Lugares{
	private $id;
	private $lugar;

    public function getId(){
    	return $this->id;
    }
    public function getLugar(){
        return $this->lugar;
    }
    public function setId($id){
    	$this->id=$id;
    }
    public function setLugar($lugar){
    	$this->lugar=$lugar;
    }
    public function toString(){ 
    	return "Id_lugar: ". $this->getId() .";" ." Lugar: " . $this->getLugar(); 
    }
}

$l = new Lugares();
$l -> setId(1);
$l -> setLugar('Pavilhão 4');
echo $l->toString();
?>