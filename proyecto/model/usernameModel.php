<?php
    class bd_volarisModel{
        private $PDO;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano){
            $stament = $this->PDO->prepare("INSERT INTO tbl_equipaje VALUES(null,:idCliente,:idVuelo,:peso_gr,:tipoEquipaje,:size,:equipajeMano,:pesoMano)");
            $stament->bindParam(":idCliente",$idCliente);
            $stament->bindParam(":idVuelo",$idVuelo);
            $stament->bindParam(":peso_gr",$peso_gr);
            $stament->bindParam(":tipoEquipaje",$tipoEquipaje);
            $stament->bindParam(":size",$size);
            $stament->bindParam(":equipajeMano",$equipajeMano);
            $stament->bindParam(":pesoMano",$pesoMano);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_equipaje where idEquipaje = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM tbl_equipaje");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
        public function update($id,$idCliente,$idVuelo,$peso_gr,$tipoEquipaje,$size,$equipajeMano,$pesoMano){
            $stament = $this->PDO->prepare("UPDATE tbl_equipaje SET idCliente = :idCliente, idVuelo = :idVuelo, Peso_gr = :peso_gr, tipoEquipaje = :tipoEquipaje, size = :size,equipajeMano = :equipajeMano, pesoMano = :pesoMano WHERE idEquipaje = :id");
            $stament->bindParam(":idCliente",$idCliente);
            $stament->bindParam(":idVuelo",$idVuelo);
            $stament->bindParam(":peso_gr",$peso_gr);
            $stament->bindParam(":tipoEquipaje",$tipoEquipaje);
            $stament->bindParam(":size",$size);
            $stament->bindParam(":equipajeMano",$equipajeMano);
            $stament->bindParam(":pesoMano",$pesoMano);
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $id : false;
        }
        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM tbl_equipaje WHERE idEquipaje = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>