<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']);
?>    
    <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <input type="hidden" name="id" value="<?= $user[0]?>">
    <div class="mb-3 row">
        <label for="idCliente" class="col-sm-2 col-form-label">Nuevo Id del Cliente</label>
        <div class="col-sm-10">
            <input type="number" name="idCliente" required class="form-control" id="idCliente" aria-describedby="emailHelp" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="idVuelo"  class="col-sm-2 col-form-label">Nuevo Id del vuelo</label>
        <div class="col-sm-10">
            <input type="number" name="idVuelo" required class="form-control" id="idVuelo" aria-describedby="emailHelp" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
    <label for="Peso_gr" class="col-sm-2 col-form-label">Peso(gr)</label>
        <div class="col-sm-10">
            <input type="number" name="Peso_gr" required class="form-control" id="Peso_gr" aria-describedby="emailHelp" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tipoEquipaje" class="col-sm-2 col-form-label">tipo de equipaje</label>
        <div class="col-sm-10">
            <input type="text" name="tipoEquipaje" required class="form-control" id="tipoEquipaje" aria-describedby="emailHelp" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="size" class="col-sm-2 col-form-label">size</label>
        <div class="col-sm-10">
            <input type="text" name="size" required class="form-control" id="size" aria-describedby="emailHelp" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="equipajeMano" class="col-sm-2 col-form-label">trae equpaje de mano?</label>
        <div class="col-sm-10">
        <input type="number" max="1" min="0"  name="equipajeMano" required class="form-control" id="equipajeMano" aria-describedby="emailHelp" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="pesoMano" class="col-sm-2 col-form-label">peso de equipaje de mano</label>
        <div class="col-sm-10">
            <input type="number" name="pesoMano" required class="form-control" id="pesoMano" aria-describedby="emailHelp" value="<?= $user[7]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>