<?php
  function menu(){
   register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
   ));
   }
   add_action('after_setup_theme','menu');
?>