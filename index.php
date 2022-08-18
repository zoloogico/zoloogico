



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Zoloogico</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="../../vendor/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../zoloogico/front-end/vistas/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <form class="form-signin" action="../zoloogico/back-end/controladores/usuarios_controlador.php" method="POST">
  <!--<img class="mb-4" src="../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">-->
  <h1 class="h3 mb-3 font-weight-normal">Por favor, registrese</h1>
  <label for="inputEmail" class="sr-only">Correo</label>
  <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" name="passw" class="form-control" placeholder="Password" required>
  <input type="hidden" name="opcion" value="4">
  <!--<div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>-->
  <input class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesión</input>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
</form>


    
  </body>
</html>
