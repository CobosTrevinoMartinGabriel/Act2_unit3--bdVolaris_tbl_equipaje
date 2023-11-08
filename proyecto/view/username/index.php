<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $rows = $obj->index();
?>
<div class="mb-3">
   <a href="/proyecto/view/username/create.php" class="btn btn-primary">Agregar nuevo equipaje</a>
    <h1>Empresa volaris</h1>
    <h2>Tabla volaris</h2>
    <h2>Hecho por Martin Gabriel Cobos Treviño</h2>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">IdEquipaje</th>
            <th scope="col">idCliente</th>
            <th scope="col">idVuelo</th>
            <th scope="col">Peso_gr</th>
            <th scope="col">tipoEquipaje</th>
            <th scope="col">size</th>
            <th scope="col">equipajeMano</th>
            <th scope="col">pesoMano</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if($rows): ?>
            <?php foreach($rows as $row): ?>
                <tr>
                    <th><?= $row[0] ?></th>
                    <th><?= $row[1] ?></th>
                    <th><?= $row[2] ?></th>
                    <th><?= $row[3] ?></th>
                    <th><?= $row[4] ?></th>
                    <th><?= $row[5] ?></th>
                    <th><?= $row[6] ?></th>
                    <th><?= $row[7] ?></th>
                    
                    <th>
                        <a href="show.php?id=<?= $row[0]?>" class="btn btn-primary">Ver</a>
                        <a href="edit.php?id=<?= $row[0]?>" class="btn btn-success">Modificar</a>
                        <!-- Button trigger modal -->
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#id<?=$row[0]?>">Eliminar</a>

                        <!-- Modal -->
                        <div class="modal fade" id="id<?=$row[0]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Una vez eliminado no se podra recuperar el registro
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                    <a href="delete.php?id=<?= $row[0]?>" class="btn btn-danger">Eliminar</a>
                                    <!-- <button type="button" >Eliminar</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </th>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="9" class="text-center">No hay registros actualmente</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
