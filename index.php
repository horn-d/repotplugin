<?php
/*
* Plugin Name: Blogplugin 
* Plugin URI: http://localhost/learningwordpress/cheers
* Description: This is a Blogpost Signup form Plugin for RePot based on HTML5, CSS, JS and PHP
* Version: 2.9.9
* Author: Kenneth, Benedicte, Maria & Lise
* Author URI: http://localhost/learningwordpress/cheers
* License: GPL2
*/

function newsletter_form()
{
    $content = '';
    $content .= '<div class="login-form1">';
    $content .= '<div class="popupCloseButton1">X</div>';
  	$content .= '<section>';
    $content .= '<h3 id="velkommen">Welcome TO </h3>';
    $content .= '<img id="logoblog" src=" '.plugins_url("blogplugin/img/logo.png").' " ';
    $content .= 'alt="RePot Logo">';
  	$content .= '<h5 id="tilmeld">Sign up for our blog-posts</h5>';
  	$content .= '</section>';
    $content .= '<section class="form1">';
    $content .= '<form action="#" id="myForm">';
    $content .= '<div class="input">';
    $content .= '<input type="email1" name="email" id="email1" placeholder="Enter your name here..." required><i class="fas1 fa-envelope"></i>';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="submitpopup" value="LET THE BLOGS BEGIN!" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';
  	$content .= '<div>';
 	$content .= '<input type="buttonpopup" value="No, I\'m boring" name="submitBtn1" id="submitBtn1">';
    $content .= '</div>';
    $content .= '</form1>';
    $content .= '</section>';
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_blogpopup','newsletter_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');
    

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontMontserrat','https://fonts.googleapis.com/css?family=Montserrat:400,500,800&display=swap');
        
        wp_enqueue_style('CustomStylesheet', plugins_url('blogplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('blogplugin/js/script.js'), array('jquery'), null, true);
    }
