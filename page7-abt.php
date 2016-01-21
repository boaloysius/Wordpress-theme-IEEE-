	<?php 
		global $directory;
	?>	
<div class="page7" id="page7">
<div class="page7-container">
	<div class="heading-div"><img src="<?php echo $directory ?>images/IEEE.png" class="ieee-img"/></div>


    <?php
				$ieee= new WP_Query('cat=2');
				if($ieee -> have_posts()):
					while($ieee -> have_posts()): $ieee -> the_post();

						echo "<div class=\"subheading\">";
						echo 	"<h1>".get_field('heading')."</h1>";
						echo "</div>";
						echo "<div class=\"para-container\">";
						echo "<p>";
							echo the_content();
						echo "</p>";
					
						echo "<p class=\"mobile-display-none\">".get_field('mobile-display-none');
						echo "</p>";
						
						$image=the_post_thumbnail();
						
						if(!empty($mage)):
						echo "<img src=\".$image.\" />";
						endif;

					endwhile;
				endif;
?>


<div class="para-container-footer subheading">
<h5>ESTABLISHED IN 2004</h5>
<div><h5 style="margin-top:3px;">Tags</h5><a href="http://www.nitc.ac.in/">college site</a><a href="http://www.ieeekerala.org/">IEEE</a></div>
</div>
</div>
</div>
</div><!--page7 aboutus-->
