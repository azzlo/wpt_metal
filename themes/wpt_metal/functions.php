<?php
  add_theme_support('post-thumbnails');

  function register_my_menu(){
    register_nav_menu('top-menu', ('menu superior'));
  }
  add_action('init', 'register_my_menu');
