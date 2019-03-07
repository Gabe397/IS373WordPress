<?php
/**
 * Plugin Name: Very First Plugin
 * Description: This is the very first plugin I ever created.
 * Version: 1.0
 * Author: Gabe
 * Author URI: http://yourwebsiteurl.com/
 **/


function my_thank_you_text ( $content ) {
    return $content .= '<p>Thank you for reading!</p>';
}
add_action( 'the_content', 'my_thank_you_text' );


