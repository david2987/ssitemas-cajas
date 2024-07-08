<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
  <?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: PUT, GET, POST");
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  ?>
  <title>Sistema de Control de Cajas</title>
  <!--Made with love by Mutiullah Samim -->

  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="<?= CSS . 'login.css' ?>">

  <link type="text/css" href="<?= JS ?>library/toast/resources/css/jquery.toastmessage.css" rel="stylesheet" />
</head>

<body>
  <div class="align-item-end">
    <div class="toast-container fixed-top mr-4 mt-3" style="place-self: end;"></div>
  </div>
  <div class="container">

    <?php if (session()->get('success')) : ?>
      <div class="alert alert-success" role="alert">
        SESION INICIADA
        <?= session()->get('success') ?>
      </div>
    <?php endif; ?>

    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h3>Login</h3>
          <div class="d-flex justify-content-end social_icon">
          </div>
        </div>
        <div class="card-body">
          <form action="<?= base_url('login') ?>" method="post" >
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" name="usuario" placeholder="Usuario">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" name="password" class="form-control" placeholder="Contraseña">
            </div>
            <div class="row align-items-center remember">
              <input type="checkbox" name="guardarSesion">Recordar Sesión
            </div>
            <div class="form-group">
              <input value="Login" type="submit"   class="btn float-right login_btn text-white ">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            No tiene cuenta ?<a href="#">Registrarse</a>
          </div>
          <div class="d-flex justify-content-center">
            <a href="#">Olvidaste las contraseña?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript">
  var rutaLogin = '<?= API ?>/login'
</script>

<script src="<?= JS . 'front/login.js' ?>"></script>
<script src="<?= JS . 'library/gral.js' ?>"></script>
<script src="<?= JS . 'library/validate/jquery.validate.min.js' ?>"></script>
<script src="<?= JS . 'library/toast/jquery.toastmessage.js' ?>"></script>