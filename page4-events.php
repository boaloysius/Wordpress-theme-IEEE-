<?php global $directory;?>
<?php
$events= new WP_Query('cat=4&posts_per_page=8');
				if($events -> have_posts()):

?>
<div class="page4" id="page4">
	<div>
		<h1 class="page-heading" style="color:white;">eVeNTs</h1>
    <div class="collash-div">

<?php 	
	$count=1;
	while($events -> have_posts()): $events -> the_post(); ?>
	
	 <div class="collash-div-<?php echo $count?>">
		 <a href="<?php echo the_permalink();echo "#{$count}" ?>" 
		 	<?php
					$image=get_field('event-page-image');
					if(!empty($image)): 
						 echo "style=\"background:url(".$image.");\">";			
					 endif; ?>
		 	
		 </a><span><h2><?php echo get_field('event_name');?></h2><p><?php echo get_field('date');?></p></span>
	 </div>

	<?php 
	$count++;
	endwhile;
	?>
 </div>
 </div><!--collash-div-->
</div><!--page4 events-->
<?php endif; ?>