<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: PUT, GET, POST");
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  ?>
  <title>Sistema de Control de Cajas</title>


  <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="<?= CSS . 'sistema.css' ?>">

  <link type="text/css" href="<?= JS ?>library/toast/resources/css/jquery.toastmessage.css" rel="stylesheet" />
</head>
<body>

    <!-- Menu -->
    <header>
        
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e5e5e5; border-bottom: 0.5px solid #ccc;" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="<?= IMG_URL.'Logo-Bioprot-001.jpg' ?>" style="width:211px ;filter: brightness(1.1); mix-blend-mode:multiply "  >  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('caja'); ?>">
                                <B><i class="fas fa-box"></i> CAJAS</B></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('cajamovimiento'); ?>"><b> <i class="fas fa-sync-alt"></i> MOVIMIENTOS</b></a>
                        </li>                        
                    </ul>
                   
                </div>
            </div>
        </nav>
    </header>
    <?= $this->renderSection('contenido') ?>


    <!-- Footer -->
    <div class="footer">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
            </ul>
            <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
        </footer>
    </div>
</body>

</html>