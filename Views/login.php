<?php
    include_once '../Controller/Controller_Sesion.php';
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style-login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div  class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Iniciar Sesión</h2>
        <div class="text-center mb-5 text-dark">Negocios Verdes</div>
        <div class="card my-5">
          <form action="#" method="POST" class="card-body cardbody-color p-lg-5">
            <div class="text-center">
              <img src="../images/logo PV.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="username" placeholder="Usuario">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name="password" placeholder="Contraseña" >
            </div>
            <div class="text-center"><input type="submit"  value="Iniciar sesión" class="btn btn-primary"></div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>


