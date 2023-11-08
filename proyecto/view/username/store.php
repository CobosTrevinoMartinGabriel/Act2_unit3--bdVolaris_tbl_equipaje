<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $obj->guardar($_POST["id"],$_POST['idCliente'],$_POST['idVuelo'],$_POST['Peso_gr'],$_POST['tipoEquipaje'],$_POST['size'],$_POST['equipajeMano'],$_POST['pesoMano']);

    
    
    
    
    
    
?>
