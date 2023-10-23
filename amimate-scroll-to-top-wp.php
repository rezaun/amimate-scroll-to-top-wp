<?php
/*
Plugin Name:Amimate Scroll To Top WP
Plugin URI :http://wordpress.org/plugins/amimate-scroll-to-top-wp/
Description: Simple Animate Scroll to Top Wordpress. Easy to manage.
Author: Rezaun Kabir
Version: 1.0
Author URI: https://rezaun.netlify.app/
License: GPLv2 or later
Requires at least: 5.2
Requires PHP: 7.2
Stable tag: 3.1.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: astt 
*/


//including css
function astt_enqueue_style(){
    wp_enqueue_style('astt-style', plugins_url('css/jquery.back-to-top.css', __FILE__));
    wp_enqueue_style('fontawesome', plugins_url('css/fontawesome-all.css', __FILE__));
}
add_action("wp_enqueue_scripts","astt_enqueue_style");



// adding JavaScript
function astt_enqueue_scripts(){
    //wp_enqueue_script('jquery');
    wp_enqueue_script('astt-script', plugins_url('js/jquery.back-to-top.js', __FILE__),array(), '1.0.0');
}
add_action("wp_enqueue_scripts","astt_enqueue_scripts");

//Plugin setting Activation
function astt_scroll_script(){?>
    <script type="text/javascript">
	jQuery(document).ready(function () {
            $('.bck').backToTop({
                iconName : 'fas fa-arrow-up',
                fxName : 'rightToLeft'
            });
        });      
    </script>
    <?php
}
add_action("wp_footer","astt_scroll_script");

