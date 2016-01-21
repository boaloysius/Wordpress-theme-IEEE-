<?php 
	global $directory;

?>	
<?php
$latest= new WP_Query('cat=6');
				if($latest -> have_posts()):					
?>
<div class="page6" id="page6">
<div class="page6-container">
	<div class="latest1">
		<div>
		<h1 class="page-heading" style="color:white; position:static; text-align:left;">LAtesT</h1>
		<h1 class="latest-header-text"> </h1>  <!-- add header -->
		</div>
	</div>

<?php 	while($latest -> have_posts()): $latest -> the_post(); ?>

			<div class="latest2">
				<div>
					<h1 class="latest-heading"><?php echo get_field('event-name'); ?></h1>
					<p class="latest-para"><?php echo get_the_content();?></p>
						<div class="latest-span-div"><span class="span-home"><h5><?php echo get_field('venue');?></h5></span><span class="span-date"> <h5><?php echo get_field('date');?></h5></span><span class="span-pho"><h5><?php echo get_field('phone_number');?></h5></span></div>
				</div>
					<?php
					$image=get_field('image');
					if(!empty($image)): 
					?>	
						<img src="<?php echo $image?>" />
					<?php endif; ?>
			</div>
<?php endwhile; ?>	
			</div>
</div><!--page6 latest-->

<?php 
	else:
		echo "sorry";
	endif;
	 ?>