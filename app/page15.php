<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v4.10.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logosample-bytailorbrands-1-128x128.jpg" type="image/x-icon">
  <meta name="description" content="Web Site Creator Description">
  
  <title>Registrar empleado</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>
<body>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-c" data-rv-view="65">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="index.php"><img src="assets/images/logosample-bytailorbrands-1-128x128.jpg" class="mbr-navbar__brand-img mbr-brand__img" alt="Mobirise"></a></span>
                        
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info"></a></section><section class="mbr-section mbr-section--relative mbr-section--fixed-size mbr-parallax-background mbr-after-navbar" id="form1-8" data-rv-view="34" style="background-image: url(assets/images/depositphotos-205854170-stock-photo-young-people-playing-guitar-forest-1600x1167.jpg);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container" style="padding-top: 93px; padding-bottom: 93px;">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" style="background-color: rgba(33,33,33,0.9);">
                      <br>
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 style="color:white" class="mbr-header__text">Registrar datos de empleado</h2>
                        </div>
                        <form action="" method="POST" name="FormuloarioCrear">
                            <input type="hidden" value="I5AJaAvT0xFipVvcy4WJ1oP2yo2P7E8nXk4iWUB5aMXanZRiOVFBIuv7jqBTbGczEGDV8A8x8UgMkZBvlYYoAKW4dg8RIDWWm2tH0f80vgi0QKAihtConAthNWDOSX4s">
                            <div class="form-group">
                                <input class="form-control" name="nombre" required placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="apellido" required placeholder="Apellido">
                            </div>
                             <div class="form-group">
                                <input class="form-control" name="edad" required placeholder="Edad">
                            </div>
                             <div class="form-group">
                                <input class="form-control" name="telefono" required placeholder="Telefono">
                            </div>
                             <div class="form-group">
                                <input class="form-control" name="correo" required placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="nomUsua" required placeholder="Nombre Usuario">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="contrasena" required placeholder="Contraseña">
                            </div>
                              <div class="form-group">
                                <select class="form-control" name="idrol" required placeholder="Rol">
                                  <option value="1" selected>Director
                                  <option value="2" selected>Instructor
                                </select>
                              </div>
                            <div class="mbr-buttons mbr-buttons--right"><input type="submit" class="mbr-buttons__btn btn btn-lg btn-danger" value="Ingresar" name="ingdat"/></div>
                        </form>
                        <?php
                          include("coneccion.php");
                          if(isset($_POST['ingdat']))
                          {
                            $nom=$_POST['nombre'];
                            $ap=$_POST['apellido'];
                            $ed=$_POST['edad'];
                            $tel=$_POST['telefono'];
                            $cor=$_POST['correo'];
                            $nomus=$_POST['nomUsua'];
                            $con=$_POST['contrasena'];
                            $rol=$_POST['idrol'];
                            $exiseu=0;
                             $resule=mysqli_query($coneccion,"SELECT * FROM empleados WHERE NomEmple='$nom' AND ApelEmple='$ap' AND EdadEmple='$ed' 
                              AND TelEmple='$tel' AND CorreoEmple='$cor'");
                            $resulu=mysqli_query($coneccion,"SELECT * FROM usuario WHERE NomUsua='$nomus' AND ContraUsua='$con' AND Id_rol='$rol'");
                            while(($consultae=mysqli_fetch_array($resule))&&($consultau=mysqli_fetch_array($resulu)))
                            {
                              $exiseu=1;
                            }
                            
                            if($exiseu==1)
                            {
                              echo "<h2 style=\"color:white;\">El usuario ya está registrado</h2>";
                            }
                            else
                            {
                              $con=password_hash($con,PASSWORD_DEFAULT);
                              $resul=mysqli_query($coneccion,"INSERT INTO empleados (NomEmple,ApelEmple,EdadEmple,TelEmple, CorreoEmple,Id_rol)
                              values ('$nom','$ap','$ed','$tel','$cor','$rol')");
                              $resul2=mysqli_query($coneccion,"INSERT INTO usuario (NomUsua,ContraUsua,Id_rol)
                              values ('$nomus','$con','$rol')");
                              echo "<h2 style=\"color:white;\">Usuario registrado correctamente<h2>";
                            }
                          }
                        ?>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <!--[if lte IE 9]>
    <script src="assets/jquery-placeholder/jquery.placeholder.min.js"></script>
  <![endif]-->
  <script src="assets/mobirise/js/script.js"></script>
  <script src="assets/formoid/formoid.min.js"></script>
  
</body>
</html>