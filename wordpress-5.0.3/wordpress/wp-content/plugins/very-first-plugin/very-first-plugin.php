<?php
/**
 * Created by PhpStorm.
 * User: pree120
 * Date: 3/6/2019
 * Time: 1:51 PM
 */
function dh_modify_read_more_link() {

    return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';

}

add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );
?>