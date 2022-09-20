
<?php
    if(!isset($_GET['id'])){
        header('Location: integrantes.php?mensaje=error');
        exit();
    }

    

    include_once './daos/dao.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("select * from persona where id = ?;");
    $sentencia->execute([$id]);
    $persona = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($persona);
?>
<header class="lodearriba">

<nav class="navy">
  <a href="#" class="logo navy-link"><img src="imagenes/log.jpg" width="130" height="130" line-height="100"></a>
  <button class="navy-torao">
    <i class="fas fa-bars"></i>
  </button>

  <ul class="navy-menu navy-menu_vis">
    <li class="navy-menu-item"><a href="index.html"
        class="navy-menu-link navy-link">Nosotras</a>
    </li>
    <li class="navy-menu-item"><a href="eventos.html" class="navy-menu-link navy-link ">Eventos</a>
    </li>
    <li class="navy-menu-item"><a href="don.html" class="navy-menu-link navy-link ">Donaciones</a>
    </li>
    <li class="navy-menu-item"><a href="usuarios.html" class="navy-menu-link navy-link   navy-menu-link_active ">Usuarios</a>
    </li>


  </ul>
</nav>

</header>
<br><br>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" required 
                        value="<?php echo $persona->nombre; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required
                        value="<?php echo $persona->edad; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tiempo: </label>
                        <input type="text" class="form-control" name="txtTiempo" autofocus required
                        value="<?php echo $persona->tiempo; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css" class="css">
  <script src="https://kit.fontawesome.com/a6d0149aed.js" crossorigin="anonymous"></script>
  <script defer src="index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
