<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.10.3, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.10.3, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/logosample-bytailorbrands-1-128x128.jpg" type="image/x-icon">
  <meta name="description" content="Website Maker Description">
  
  <title>Page 13</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
  <section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-b" data-rv-view="54">
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
                            <h1 style="color:white"; class="mbr-header__text">Colsultar empleados</h1>
                            <h2 style="color:white"; class="mbr-header__text">Filtrar por:</h2>
                        </div>
                        <form action="" method="POST" name="Consulform">
                            <input type="hidden" value="innHeXBb55zoFbwaS1OAuH4Jydba8Xbd7wqjfXqNeMkrYP9CQttcbDMChHxP6o97GYuNhGUj7cE8cjHFZQhO25N5edh3biSYSZ+2B8ZNskqMFCjaQR64XiJ2IYJs9st/">
                            <div class="form-group">
                                <input class="form-control" name="Nombre" required placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="Apellido" required placeholder="Apellido">
                            </div>
                           <div class="form-group">
                                <input class="form-control" name="rol" required placeholder="Id_rol">
                            </div>
                            <div class="mbr-buttons mbr-buttons--right"><input type="submit" class="mbr-buttons__btn btn btn-lg btn-danger" value="Consultar" name="consuldat"/></div>
                        </form>
                        <br>
                        <?php
                              include("coneccion.php");
                              if(isset($_POST['consuldat']))
                              {
                                $nomem=$_POST['Nombre'];
                                $apelem=$_POST['Apellido'];
                                $rolm=$_POST['rol'];
                                $resu=mysqli_query($coneccion,"SELECT * FROM empleados WHERE NomEmple='$nomem' AND ApelEmple='$apelem' AND Id_rol='$rolm'");
                                echo"<br>
                                <table width=\"100%\" style=\"background-color: white; border-collapse: collapse;\">
                                  <thead style=\"background-color: #246355; border-bottom: solid 5px #0F362D; color: white;\">
                                <tr>
                                      <td style=\"padding: 20px\";>Id Empleado</td>
                                      <td style=\"padding: 20px\";>Nombre</td>
                                      <td style=\"padding: 20px\";>Apellido</td>
                                      <td style=\"padding: 20px\";>Edad</td>
                                      <td style=\"padding: 20px\";>Teléfono</td>
                                      <td style=\"padding: 20px\";>Correo</td>
                                      <td style=\"padding: 20px\";>Id Rol</td>
                                    </tr>";
                                while($consulta=mysqli_fetch_array($resu))
                                {
                                  echo"<thead>
                                  <tr>
                                      <td style=\"padding: 20px\";>".$consulta['Id_emple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['NomEmple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['ApelEmple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['EdadEmple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['TelEmple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['CorreoEmple']."</td>
                                      <td style=\"padding: 20px\";>".$consulta['Id_rol']."</td>
                                    </tr>";
                                }
                                echo"</table><br>";
                              }
                            ?>
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