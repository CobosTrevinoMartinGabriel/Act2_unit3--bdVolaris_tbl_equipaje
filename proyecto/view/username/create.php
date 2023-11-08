<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <input type="hidden" name="id" value="<?= $user[0]?>">
        <label for="idCliente" class="form-label">Id del Cliente</label>
        <input type="number" name="idCliente" required class="form-control" id="idCliente" aria-describedby="emailHelp">
        <label for="idVuelo" class="form-label">Id del vuelo</label>
        <input type="number" name="idVuelo" required class="form-control" id="idVuelo" aria-describedby="emailHelp">
        <label for="Peso_gr" class="form-label">Peso(gr)</label>
        <input type="number" name="Peso_gr" required class="form-control" id="Peso_gr" aria-describedby="emailHelp">
        <label for="tipoEquipaje" class="form-label">tipo de equipaje</label>
        <input type="text" name="tipoEquipaje" required class="form-control" id="tipoEquipaje" aria-describedby="emailHelp">
        <label for="size" class="form-label">size</label>
        <input type="text" name="size" required class="form-control" id="size" aria-describedby="emailHelp">
        <label for="equipajeMano" class="form-label">trae equpaje de mano?</label>
        <input type="number" max="1" min="0"  name="equipajeMano" required class="form-control" id="equipajeMano" aria-describedby="emailHelp">
        <label for="pesoMano" class="form-label">peso de equipaje de mano</label>
        <input type="number" name="pesoMano" required class="form-control" id="pesoMano" aria-describedby="emailHelp">

    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
