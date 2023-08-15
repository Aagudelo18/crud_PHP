<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/head.php");
    require_once("c://xampp/htdocs/laparisinamvc/controller/productoController.php");
    $productoModel = new productoController();
    $categorias = $productoModel->listarCategorias();

    
?>

<?php
session_start();
if (isset($_SESSION["usuario"])){
    ?>
<div class="container-fluid">
  <div class="col-4 row justify-content-center">
      <div>
        <h1 class="text-white">Nuevo Producto</h1>
      </div>
      <div>
        <form action="store.php" method="post" enctype="multipart/form-data">
            <label for="categoria">Categoría:</label>
            <?php
            $db = new PDO('mysql:host=localhost;dbname=laparisina', 'root', '');

                // Consultar los valores de la tabla servicio
                $query = "SELECT idCategoria, Nombre FROM categoria";
                $stmt = $db->prepare($query);
                $stmt->execute();
                $categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);
                ?>
            <select name="categoria" id="categoria">
                <?php foreach ($categorias as $categoria): ?>
                    <option value="<?php echo $categoria['idCategoria']; ?>"><?php echo $categoria['Nombre']; ?></option>
                <?php endforeach; ?>
            </select>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descripcion</label>
                <textarea name="descripcion" id="descripcion" class="form-control" row="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" name="precio" id="precio" class="form-control" required>
            </div>
            <div class="">
                <a href="/laparisinamvc/view/producto/index.php"><button type="button" class="btn btn-danger">Cancelar</button></a>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
  </div>
</div>


<?php
    require_once("c://xampp/htdocs/laparisinamvc/view/head/footer.php");
?>
<?php
} else{
    header('location:../login.php');
}
?>