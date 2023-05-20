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
  
  <title>Page 12</title>
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
                      <br><br>
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 style="color:white" class="mbr-header__text">Actualizar datos de estudiante</h2>
                        </div>
                        <form action="" method="POST" name="ActualForm">
                            <input type="hidden" value="I5AJaAvT0xFipVvcy4WJ1oP2yo2P7E8nXk4iWUB5aMXanZRiOVFBIuv7jqBTbGczEGDV8A8x8UgMkZBvlYYoAKW4dg8RIDWWm2tH0f80vgi0QKAihtConAthNWDOSX4s">
                            <div class="form-group">
                                <input type="" class="form-control" name="Id_estudiante" required placeholder="Id_estudiante">
                            </div>
                            <div class="form-group">
                                <input type="" class="form-control" name="Nombre" required placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <input type="" class="form-control" name="Apellido" placeholder="Apellido">
                            </div>
                             <div class="form-group">
                                <input type="" class="form-control" name="Edad" placeholder="Edad">
                            </div>
                             <div class="form-group">
                                <input type="" class="form-control" name="Telefono" placeholder="Telefono">
                            </div>
                             <div class="form-group">
                                <input type="" class="form-control" name="Correo" placeholder="Correo">
                            </div>
                            <div class="form-group">
                                <input type="" class="form-control" name="Id_curso" placeholder="Id_curso">
                            </div>
                            <div class="form-group">
                                <input type="" class="form-control" name="Id_rol" placeholder="Id_rol">
                             </div>   
                             <div class="mbr-buttons mbr-buttons--right"><input type="submit" class="mbr-buttons__btn btn btn-lg btn-danger" value="Actualizar" name="actualdat"/></div>
                        </form>
                        <?php
                          include("coneccion.php");
                          if(isset($_POST['actualdat']))
                          {
                            $idest=$_POST['Id_estudiante'];
                            $nom=$_POST['Nombre'];
                            $apel=$_POST['Apellido'];
                            $ed=$_POST['Edad'];
                            $tel=$_POST['Telefono'];
                            $cor=$_POST['Correo'];
                            $cur=$_POST['Id_curso'];
                            $rol=$_POST['Id_rol'];
                            $exis=0;
                            $resul=mysqli_query($coneccion,"SELECT * FROM estudiante WHERE Id_estu='$idest'");
                            while($consulta=mysqli_fetch_array($resul))
                            {
                              $exis++;
                            }
                            if($exis==0)
                            {
                              echo "<h2 style=\"color:white;\">El documento diligenciado no existe</h2>";
                            }
                            else
                            {
                              $UpdateSQL="UPDATE estudiante SET 
                              Id_estu='$idest', 
                              NomEstu='$nom', 
                              ApelEstu='$apel', 
                              EdadEstu='$ed',
                              TelEstu='$tel',
                              CorreoEstu='$cor',
                              Id_curso='$cur',
                              Id_rol='$rol' 
                              WHERE Id_estu='$idest'";
                              mysqli_query($coneccion,$UpdateSQL);
                              echo "<h2 style=\"color:white;\">Datos actualizados correctamente</h2>";
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