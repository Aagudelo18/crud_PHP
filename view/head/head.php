<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Header</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Importando los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Importando los scripts de Bootstrap (jQuery es necesario) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </head>

  <body class="bg-secondary">

    <!-- Inicio del menu -->
    
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">

        <!-- icono o nombre -->
        <a class="navbar-brand" href="/laparisinamvc/view/index.php" >
          <img src="https://laparisina.co/wp-content/uploads/2021/10/reposteria-francesa-medellin-300x138.png" alt="" width="120">
        </a>
            
        <!-- boton del menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

          <!-- elementos del menu colapsable -->
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav me-auto">
          <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/laparisinamvc/view/tipoDocumento/index.php">Tipo Documento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/laparisinamvc/view/empleado/index.php">Empleados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/laparisinamvc/view/cliente/index.php">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laparisinamvc/view/categoria/index.php">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laparisinamvc/view/producto/index.php">Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laparisinamvc/view/pedido/index.php">Pedidos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/laparisinamvc/view/venta/index.php">Ventas</a>
            </li>
          </ul>

        <form class="d-flex">
          <a href="../cerrarSession.php" class="btn btn-outline-warning d-none d-md-inline-block ">Cerrar Sesion</a>
        </form>
          
          
        </div>
     
        </div>  
      </nav>
      <div class="container-fluid">

