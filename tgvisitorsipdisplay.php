<?php
/*
Plugin Name: TG Visitors IP Display
Plugin URI: NA
Description: A Simple Plugin to display IP of the visitor
Version: 1.0
Author: Tarang Gupta
Author URI: https://weblinkitservices.in
*/

function tgvipd_getip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    echo "Your Public IP is <b>" . $ip . "</b>";
}


add_shortcode( 'tg_ip_display', 'tgvipd_getip' );

?>