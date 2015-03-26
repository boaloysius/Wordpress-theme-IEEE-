		
		<?php 
			global $directory;
			wp_footer();
		?>
		</div><!-- /Pcontainer -->
        <script	src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
			</script>
			
			<!-- jQuery library (served from Google) -->
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
			<!-- bxSlider Javascript file -->
			<script src="<?php echo $directory ?>js/jquery.bxslider.js"></script>
			
			<script>
			$(function(){
				$('.bxslider').bxSlider({
				  minSlides: 2,
				  maxSlides: 4,
				  slideWidth: 250,
				  slideMargin: 10
				});
			});
			</script>
			<script>
			$(function(){
			$('g').click(function( e ){  
				e.preventDefault();
				var targetId = $(this).attr("href");
				var top = $(targetId).offset().top;
				$('html, body').stop().animate({scrollTop: top }, 1000);
			});});
						$(function(){
			$('.icon-list .self').click(function( e ){  
				e.preventDefault();
				var targetId = $(this).attr("href");
				var top = $(targetId).offset().top;
				$('html, body').stop().animate({scrollTop: top }, 1000);
			});});
					$(function(){
			$('.collash-div a').hover(function( e ){  
				e.preventDefault();
				$(".collash-div").css("background","#4D5C53");
			});});			
			</script>
		<script src="<?php echo $directory ?>js/classie.js"></script>
		<script src="<?php echo $directory ?>js/main.js"></script>
        <script src="<?php echo $directory ?>js/gm.js"></script>
        
	</body>
</html>