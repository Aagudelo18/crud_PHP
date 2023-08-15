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

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="bg-white p-5 rounded text-dark shadow" style="width:25rem">
    <form action="iniciarSession.php" method="post">
        <div class="d-flex justify-content-center ">
            <img src="icon/login.svg" alt="login-icon" style= "height : 7rem;">
        </div>
        <div class="text-center fs-1 fw-bold">Login</div>
        <div class="input-group mt-4">
            <div class="input-group-text bg-dark">
                <img src="icon/username.svg" alt="username-icon" style="height: 1rem;">
            </div>
            <input class="form-control bg-light" type="text" name="nombre" placeholder="Username">
        </div>
        <div class="input-group mt-1">
            <div class="input-group-text bg-dark">
                <img src="icon/password.svg" alt="username-icon" style="height: 1rem;">
            </div>
            <input class="form-control bg-light" type="password" name="password" placeholder="Password">
        </div>
        <div class="d-flex justify-content-around mt-1">
            <div class="d-flex align-items-center gap-1">
                <input class="form-check-input" type="checkbox">
                <div class="pt-1" style="font-size:0.8rem">Remember me</div>
            </div>
            <div class="pt-1">
                <a href="#" class="text-decoration-none text-dark fw-semibold fst-italic" style="font-size:0.8rem">Forgot your password?</a>
            </div>
        </div>
        <div>
            <input class="btn btn-dark text-white w-100 mt-4 fw-semibold type:input" type="submit" value="Login" name="enviar">
        </div>
        <div class="d-flex gap-1 justify-content-center mt-1">
            <div>Don't have account?</div>
            <a class="text-decoration-none text-dark fw-semibold" href="#">Register</a>
        </div>
        <div class="p-3">
            <div class="border-bottom text-center" style="height: 0.9rem">
                <span class="bg-white px-3">or</span>
            </div>
        </div>
        <div class="btn d-flex gap-2 justify-content-center border mt-3 shadow-sm">
        <img src="icon/google.svg" alt="google-icon" style= "height:1.6rem">
        <div class="fw-semibold text-dark">
            Continue with Google
        </div>
        </div>
    </form>
    </div>
</body>
</html>
