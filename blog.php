<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./blog/wp-blog-header.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kate's Blog</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div style="width:100%; float:left; background:url(images/shadow.png) no-repeat center top;">
	<div id="wrap1">
    <div class="topright">
    </div>
    <div id="headernew"><a href="#" title="Logo"><img src="images/logo.jpg" alt="Logo" /></a>
    
    	<div class="nav">
        	<ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="wedding.html">Wedding Photos</a></li>
				<li><a href="portraits.html">Headshots & Print Work</a></li>  
				<li><a href="tips.html">Photo Session Tips</a></li>
            	<li><a href="packages.html">Photo Packages</a></li>
            	<li><a href="about.html">About Us</a></li>
            	<li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
    </div>
   	  <div id="bodyContentnew">
      <div class="content">
      		<!--wordpress blog section-->
			
			<?php// if ( have_posts() ) : ?>

				<?php// twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php// while ( have_posts() ) : the_post(); ?>

					<?php// get_template_part( 'content', get_post_format() ); ?>

				<?php //endwhile; ?>

				<?php// twentyeleven_content_nav( 'nav-below' ); ?>

			<?php// else : ?>

				<!--<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php// _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<!--<div class="entry-content">
						<p><?php// _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php //get_search_form(); ?>
					</div><!-- .entry-content -->
			<!--	</article><!-- #post-0 -->

			<?php// endif; ?>
			
			<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;
?>
			
      </div>
        <div id="footerContainer">&copy;Copyright 2012 Kate Dwek Photos .All Right Reserved</div>
    </div>
    </div>
</body>
</html>
