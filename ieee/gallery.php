<?php
global $directory; 
		$currentID=get_the_ID();
		$event= new WP_Query('p='.$currentID);
		$event->the_post();
		$permalink=get_the_permalink();
		$event_name=get_field("event_name");
                $gallery_images=get_field("gallery");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $gallery_event_name; ?> gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="description" content="Responsive Image Gallery with jQuery" />
        <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="<?php echo $directory; ?>../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo $directory; ?>style/gallery/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $directory; ?>style/gallery/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $directory; ?>style/gallery/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $directory; ?>style/gallery/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
		<noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
    </head>
    <body style="background:#1F1F1F url(<?php echo $directory; ?>images/gallery/pattern.png) repeat top left;">
		<div class="container">
					
			<div class="content">
				<h1><?php echo $event_name; ?> Gallery <span>IEEE NITC Students Branch</span></h1>
				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<?php if(get_field('gallery')): ?>
								<ul>
									<?php foreach( $gallery_images as $image ): ?>
									<li><a href="#"><img src="<?php echo $image['sizes']['thumbnail']; ?>" data-large="<?php echo $image['sizes']['large']; ?>"/></a>
									</li>
									 <?php endforeach; ?>
								</ul>
 
                                                             <?php endif; ?>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
				</div><!-- content -->
		</div><!-- container -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $directory ?>js/gallery/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?php echo $directory ?>js/gallery/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo $directory ?>js/gallery/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?php echo $directory ?>js/gallery/gallery.js"></script>
    </body>
</html>		









