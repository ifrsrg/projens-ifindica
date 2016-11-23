<?php
header('Content-Type: text/html; charset=utf-8');
class Comentarios{
	private $id;
    private $id_problema;
    private $id_usuario;
    private $comentario;
    private $data;

    public function getId(){
    	return $this->id;
    }
    public function getId_problema(){
        return $this->id_problema;
    }
    public function getId_usuario(){
        return $this->id_usuario;
    }
    public function getComentario(){
        return $this->comentario;
    }
    public function getData(){
        return $this->data;
    }
    public function setId($id){
    	$this->id=$id;
    }
    public function setId_problema($id_problema){
        $this->id_problema=$id_problema;
    }
    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    public function setComentario($comentario){
        $this->comentario=$comentario;
    }
    public function setData($data){
        $this->data=$data;
    }
    public function toString(){ 
        return "Id: ". $this->getId() .";" ." Id_problema : " . $this->getId_problema().";" ." Usuario : " . $this->getId_usuario().";" ." Comentario : " . $this->getComentario().";" ." Data : " . $this->getData();
    }
}

$c = new Comentarios();
$c -> setId(1);
$c -> setId_problema(1);
$c -> setId_usuario(1);
$c -> setComentario('NOSSA JUREG');
$c -> setData('19/11/2016');
echo $c->toString();
?>