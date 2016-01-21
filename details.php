<?php  global $directory;
      global $permalink; 
?>
<!-- Before body -->
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>
	    <title>IEEE Events</title>

	    <!-- Bootstrap core CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	    <link href="<?php  echo $directory; ?>style/events/style.css" rel="stylesheet"/>    
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     </head>
<!-- body -->
	   <body>
	
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="<?php  echo $directory; ?>images/IEEE.png" class="navbar-brand">
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <a href="<?php  echo bloginfo("url"); ?>"><h5 class="navbar-text">NITC Student Branch</h5></a>
          <ul class="nav navbar-nav navbar-right page-navigation">
            <li><a>Events</a></li>
            <?php  
            $events= new WP_Query('cat=4');
              if($events -> have_posts()):
                $count=1;
                $count_2014=0;
                $count_2015=0;
                $list_2014=" <li class=\"dropdown\">";
                $list_2014.="<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"\">2014<span class=\"caret\"></span></a>";
                $list_2014.="<ul class=\"dropdown-menu\" role=\"menu\">";
                
                $list_2015=" <li class=\"dropdown\">";
                $list_2015.="<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\" href=\"\">2015<span class=\"caret\"></span></a>";
                $list_2015.="<ul class=\"dropdown-menu\" role=\"menu\">";
                $list_end="</li></ul>";
                while($events -> have_posts()): $events -> the_post();
                if(get_field("year")==2014):
                  $list_2014.= "<li><a href=\"#{$count}\">";
                  $list_2014.= get_field('event_name');
                  $list_2014.= "</a></li>";
                  $count_2014++;
                  elseif(get_field("year")==2015):
                  $list_2015.= "<li><a href=\"#{$count}\">";
                  $list_2015.=  get_field('event_name');
                  $list_2015.= "</a></li>";
                  $count_2015++;
                endif;
                  $count++;
                endwhile;
                if($count_2014 != 0):
                  echo $list_2014.$list_end;
                endif;

                if($count_2015 != 0):
                  echo $list_2015.$list_end;
                endif;
              endif;
	
            ?> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</nav><!-- Fixed navbar -->	
          <?php 
                if($events -> have_posts()):
                $count=1;
                while($events -> have_posts()): $events -> the_post(); 
                  
          
          ?> 

<div class="page" id="<?php  echo $count; ?>">
     <div class="container">
      <div class="jumbotron">
	      <div class="row">
	        <div class="col-lg-5">
          <h1><?php  echo get_field("event_name"); ?></h1>
	        <h4><?php  echo get_field("date"); ?></h4> 
           <h4>Participants:<?php  echo get_field("participants"); ?></h4>
          <h4>Venue:<?php  echo get_field("venue"); ?></h4>

	        <p><?php  echo get_field("short"); ?></p>
	        <p>
	          <a class="btn btn-lg btn-primary" href="<?php  echo the_permalink(); echo "&gallery=1"; ?>" role="button">View Gallery »</a>
	        </p>
	        </div>
	        <div class="col-lg-6">
	          <img src="<?php  echo get_field("event-page-image"); ?>">
	        </div>
	       </div>
   	 </div>


     <?php  if(!get_the_content()):?>
               <div class="content">
                <?php  the_content(); ?>
               </div> 
     <?php  endif; ?>     
     </div> <!-- /container -->
 </div>
            <?php $count++; endwhile; endif; ?>
<!-- After body -->
</html>
