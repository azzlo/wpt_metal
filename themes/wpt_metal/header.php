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
    <div class="divLogo">
      <div class="imgLogo">
        <a href="index.html" class=""><img src="images/logo.png" alt="" class="logo"/></a>

      </div>
      <div class="slogan enLinea">
        <h1 class="tituloPrincipal">Soldadura y metales</h1>
      </div>
      <div class="divSocial">
        <i class="fa fa-volume-control-phone tel1" aria-hidden="true"></i>
        <p class="headerTelefono">7751544642</p>
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <p class="headerCorreo">7751544642@gmail.com</p>
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
