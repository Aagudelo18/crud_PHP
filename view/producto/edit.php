<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/head.php");
    require_once("c://xampp/htdocs/laparisinamvc/controller/productoController.php");
    $obj = new productoController();
    $cat = $obj->show($_GET['id']);
    $categorias = $obj->listarCategorias();
?>

<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<form action="update.php" method="post">
    <h2 class="text-white">Editar Producto</h2>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-10">
            <input type="text" name="id" readonly class="form-control-plaintext" value="<?= $cat[0] ?>">
        </div>
    </div>
    <div class="mb-3">
    <?php
            $db = new PDO('mysql:host=localhost;dbname=laparisina', 'root', '');

                // Consultar los valores de la tabla servicio
                $query = "SELECT idCategoria, Nombre FROM categoria";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
        <label for="category" class="form-label">Categoria</label>
        <select name="categoria" id="categoria">
            <?php foreach ($categorias as $categoria): ?>
                <option value="<?php echo $categoria['idCategoria']; ?>"><?php echo $categoria['Nombre']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control" id="inputPassword" value="<?= $cat[2] ?>">
        </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Descripcion</label>
        <div class="col-sm-10">
            <input type="text" name="descripcion" class="form-control" id="inputPassword" value="<?= $cat[3] ?>">
        </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
            <input type="number" name="precio" class="form-control" id="inputPassword" value="<?= $cat[4] ?>">
        </div>
  </div>
  <div class="row justify-content-end mt-4">
            <div class="col-auto">
                <a href="show.php?id=<?= $cat[0] ?>" class="btn btn-primary">Cancelar</a>
                <input class="btn btn-warning" type="submit" value="Guardar">
            </div>
        </div>
</form>


<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/footer.php");
?>
<?php
} else{
    header('location:../login.php');
}
?>