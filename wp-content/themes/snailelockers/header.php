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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link href="<?php  echo get_stylesheet_directory_uri()?>/css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php  echo get_stylesheet_directory_uri()?>/css/default.css" rel="stylesheet" type="text/css">

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

<?php wp_head(); ?>
</head>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
<button type="button" class="close" data-dismiss="modal">&times;</button>
    <!-- Modal content-->
    <div class="modal-content">
        
      <div class="modal-body">
        <iframe width="100%" height="550" src="https://embed.wix.com/video?instanceId=74593d9d-a593-48bf-b36a-05d880227282&biToken=9c8d8264-0a88-06f8-14f6-75f8e4509f56&pathToPage=mutli-residential&channelId=7dbf07b0-1bc1-471d-b051-dbe4831d2e81&videoId=8d0aef7ecd0e4c68bdbba32eb4068527&compId=comp-jq8rbeqa&sitePageId=taww1" frameborder="0" allowfullscreen></iframe>
      </div>
      
    </div>

  </div>
</div>


<body>
	<header class="container-flud fix">
	    <div class="container">
    	<div class="col-lg-12 col-md-12 col-sm-12 clearfix">
        	<ul class="top-right clearfix">


            	<li id="cont"><a href="https://snailedev.omdev.ca/#contact1">CONTACT</a></li>
                <li>LANGUAGE</li>
                <li><a href="<?php bloginfo( 'url' ) ?>" class="active">EN</a></li>
                <li><a href="/fr/">FR</a></li>
            </ul> 
        </div>
    	
        <div class="col-lg-4 col-md-4 col-sm-12">
        <a href="<?php bloginfo( 'url' ) ?>"><img src="<?php  echo get_stylesheet_directory_uri()?>/images/logo.jpg" class="logo" /></a>
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm-12">
        	<div class="row">
            <?php
                wp_nav_menu( array( 
                    'theme_location' => 'my-custom-menu', 
                    'container_class' => 'custom-menu-class main-menu clearfix ' ) ); 
                ?>
            </div>
        </div>
        </div>
    </header>
    
 