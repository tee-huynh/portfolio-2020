<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
		<script type="text/javascript">
			$(function(){
			  $('.carousel-item').eq(0).addClass('active');
			  var total = $('.carousel-item').length;
			  var current = 0;
			  $('#moveRight').on('click', function(){
			    var next=current;
			    current= current+1;
			    setSlide(next, current);
			  });
			  $('#moveLeft').on('click', function(){
			    var prev=current;
			    current = current- 1;
			    setSlide(prev, current);
			  });
			  function setSlide(prev, next){
			    var slide= current;
			    if(next>total-1){
			     slide=0;
			      current=0;
			    }
			    if(next<0){
			      slide=total - 1;
			      current=total - 1;
			    }
			           $('.carousel-item').eq(prev).removeClass('active');
			           $('.carousel-item').eq(slide).addClass('active');
			      setTimeout(function(){

			      },800);
			    

			    
			    console.log('current '+current);
			    console.log('prev '+prev);

			  }
			});
		</script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>

		<header class="main-header">
			<div class="container">
				<nav class="main-nav">
					<ul class="main-nav-list">
						<li>
		  					<a id="about-header" href="./about">about</a>
						</li>
						<li>
							<a id="resume-header" href="./resume">resume</a>
						</li>
						<li>
							<a id="projects-header" href="./projects">projects</a>
						</li>
						<li id="logo-header">
							<?php twentytwenty_site_logo(); ?>
						</li>
						<li>
							<a id="design-header" href="./design">design</a>
						</li>
						<li>
							<a id="art-header" href="./art">art</a>
						</li>
						<li>
							<a id="commissions-header" href="./commissions">commissions</a>
						</li>
					</ul>
				</nav>
			</div>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
