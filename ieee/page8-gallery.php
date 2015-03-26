  <?php 
    global $directory;
    $event= new WP_Query('cat=4');
        if($event -> have_posts()):

  ?>

<div class="page8" id="page8">
<div>
<h1 class="page-heading" style="color:#E53333; height:80px;">GAlLery</h1>
<div class="page8-container">
<div class="slider">
<ul class="bxslider">
<?php while($event -> have_posts()): $event -> the_post(); ?>
      <li>
        <div class="slider-div">
        	<a href="<?php  echo the_permalink();echo "&gallery=1"; ?>" target="_blank" class=""></a>
          <img src="<?php $image=get_field('gallery-page-image'); echo $image; ?>" />
          <?php if(get_field("gallery_name")): ?>
          <h5><?php echo get_field('event_name');?></h5>
        <?php endif; ?>
          <?php if(get_field("gallery_date")): ?>
          <h6><?php echo get_field('date'); ?></h6>
        <?php endif; ?>
        </div>
      </li>
<?php endwhile; ?>     
</ul>
<h1 class="slider-caption"> glimpses &nbsp; </h1>
</div>
</div>
</div>
</div><!--page8 gallery-->
<?php endif; ?>