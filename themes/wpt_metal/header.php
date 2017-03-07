<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo(title);?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merriweather|Courgette" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo(stylesheet_url);?>">
  </head>
  <body>
    <div class="divLogo container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="contenedorLogo">
            <img class="logoJemac" src="http://localhost/wordpress/wp-content/themes/wpt_metal/img/logo.png"/>
          </div>

        </div>
        <div class="col-md-5  contactoHeaderContenedor">
          <div class="contactoHeader ">
            <i class="fa fa-volume-control-phone " aria-hidden="true"></i>

          </div>
          <div class="contactoHeader tel1">
            <p class="headerTelefono">7751544642</p>
          </div>
          <div class="contactoHeader correo1">
                <i class="fa fa-envelope" aria-hidden="true"></i>
          </div>
          <div class="contactoHeader">

            <p class="headerCorreo">7751544642@gmail.com</p>
          </div>

        </div>
      </div>
    </div>
<?php
  wp_nav_menu(
    array(
      'theme_location' => 'top-menu',
      'container' => 'nav',
      'menu_class' => 'nav_list'
    )
  )
 ?>
