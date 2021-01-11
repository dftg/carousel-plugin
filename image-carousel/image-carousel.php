<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              nope
 * @since             1.0.0
 * @package           Image_Carousel
 *
 * @wordpress-plugin
 * Plugin Name:       Image Carousel
 * Plugin URI:        gius
 * Description:       Sample plugin for PETA
 * Version:           1.0.0
 * Author:            Dave Stevens
 * Author URI:        nope
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       image-carousel
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'IMAGE_CAROUSEL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-image-carousel-activator.php
 */
function activate_image_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-carousel-activator.php';
	Image_Carousel_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-image-carousel-deactivator.php
 */
function deactivate_image_carousel() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-carousel-deactivator.php';
	Image_Carousel_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_image_carousel' );
register_deactivation_hook( __FILE__, 'deactivate_image_carousel' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-image-carousel.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_image_carousel() {

	$plugin = new Image_Carousel();
	$plugin->run();

}
run_image_carousel();

add_action( 'init', 'wpshout_do_thing' );
function wpshout_do_thing() {
		if( ! isset( $_GET['wpsdt'] ) ) :
			return;
		endif;

		var_dump("Here");
		die;
}

?>



<head>
  <title>Carousel Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
    width: 70%;
    margin: auto;
  }
  </style>



<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/1.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/2.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/3.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/4.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/5.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/6.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/7.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/8.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="http://www.gravenimage.us/wp-content/uploads/2021/01/9.jpg" alt="">
        <div class="carousel-caption">
        </div>
      </div>

  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<?php