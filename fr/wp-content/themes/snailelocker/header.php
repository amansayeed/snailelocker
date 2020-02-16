<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Canada's Parcel Locker Company | Snaile Toronto, Vancouver</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Raleway|Roboto&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
$("#cont").click(function() {
    $('html, body').animate({
        scrollTop: $("#con").offset().top
    }, 2000);
});
</script>

<link href="<?php  echo get_stylesheet_directory_uri()?>/css/default.css" rel="stylesheet" type="text/css">
<?php wp_head(); ?>
</head>



<body>
	<header class="container">
    	<div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<ul class="top-right clearfix">


            	<li id="cont"><a href="#">CONTACT</a></li>
                <li>LANGUAGE</li>
                <li><a href="#" class="active">EN</a></li>
                <li><a href="#">FR</a></li>
            </ul> 
        </div>
    	
        <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/logo.webp" /></a>
        	<!-- <a href="#"><img src="images/logo.webp" title=""  alt=""/></a> -->
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm-12">
        	<div class="row">
        	<ul class="main-menu clearfix">

            <?php
wp_nav_menu( array( 
    'theme_location' => 'my-custom-menu', 
    'container_class' => 'custom-menu-class' ) ); 
?>
            	<!-- <li><a href="#">LOCKERS BY APPLICATION</a>
                	<ul>
                    	<li><a href="#">Multi-Residential</a></li>
						<li><a href="#">Commercial</a></li>
						<li><a href="#">Retail</a></li>
						<li><a href="#">School Campuses</a></li>
                    </ul>
                </li>
                <li><a href="#">INDUSTRY TALK</a></li>
                <li><a href="#">PARTNERS</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#" class="btn">Need Help?</a></li> -->
            </ul>
            </div>
        </div>
    </header>