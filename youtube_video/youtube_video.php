<?php
/**
 * Plugin Name: youtube_video
 * Plugin URI: URI du plugin (si vous le mettez a disposition sur un site)
 * Description: Plugin qui recupere l'id des video youtube pour les afficher.
 * Version: Version 1.0
 * Author: Medina Flavien
 * Author URI: http://www.flavien-medina.fr
 * License: La ou les license(s) relative(s) à votre plugin
 */
 ?>
<?php
  function yv( $atts ) {
   extract( shortcode_atts( array(
      'id'     => '',
   ), $atts, 'yv' ) );
   $iframe = "<iframe width='854' height='480' src='https://www.youtube.com/embed/$id' frameborder='0' allowfullscreen></iframe>";
   return $iframe;
}
add_shortcode( 'yv', 'yv' );
 ?>
