<?php
header('Content-Type: text/html; charset=utf-8');
class Problemas{
	private $id;
    private $id_categoria;
    private $id_lugar;
    private $id_usuario;
	private $descricao;
    private $foto;
    private $data_subimissao;
    private $status;

    public function getId(){
    	return $this->id;
    }
    public function getId_categoria(){
        return $this->id_categoria;
    }
    public function getId_lugar(){
        return $this->id_lugar;
    }
    public function getId_usuario(){
        return $this->id_usuario;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getFoto(){
        return $this->foto;
    }
    public function getData_subimissao(){
        return $this->data_subimissao;
    }
    public function getStatus(){
        return $this->status;
    }
    public function setId($id){
    	$this->id=$id;
    }
    public function setId_categoria($id_categoria){
        $this->id_categoria=$id_categoria;
    }
    public function setId_lugar($id_lugar){
        $this->id_lugar=$id_lugar;
    }
    public function setId_usuario($id_usuario){
        $this->id_usuario=$id_usuario;
    }
    public function setDescricao($descricao){
        $this->descricao=$descricao;
    }
    public function setFoto($foto){
        $this->foto=$foto;
    }
    public function setData_subimissao($data_subimissao){
        $this->data_subimissao=$data_subimissao;
    }
    public function setStatus($status){
        $this->status=$status;
    }
    public function toString(){ 
        return "Id: ". $this->getId() .";" ." Categoria : " . $this->getId_categoria().";" ." Lugar : " . $this->getId_lugar() .";" ." Usuario : " . $this->getId_usuario().";" ." Descricao : " . $this->getDescricao().";" ." Foto : " . $this->getFoto().";" ." Data_Subimissão : " . $this->getData_subimissao().";" ." Status : " . $this->getStatus();
    }
}

$p = new Problemas();
$p -> setId(1);
$p -> setId_categoria(1);
$p -> setId_lugar(1);
$p -> setId_usuario(1);
$p -> setDescricao('Sala 410 com problemas de luz');
$p -> setFoto('imagem.png');
$p -> setData_subimissao('21/11/2016');
$p -> setStatus(2);
echo $p->toString();
?>