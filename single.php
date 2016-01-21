<?php global $directory; ?>

<?php
		$currentID=get_the_ID();
		$event= new WP_Query('p='.$currentID);

		$event->the_post();
		$permalink=get_the_permalink();
		//echo get_field("event_name");
		if($_GET["gallery"]==1):

			$gallery_event_name=get_field("name");
			$gallery_images=get_field("gallery");

			if(get_field("gallery")):
?>
<?php	

			$gallery_event_name=get_field("name");
			$gallery_images=get_field("gallery");

			get_template_part("gallery");
			else:

				$gallery_event_name=get_field("name");
				$gallery_images=get_field("gallery");
				get_template_part("details");
			endif;	
		        else:
			get_template_part("details");
	
		endif;
?>


