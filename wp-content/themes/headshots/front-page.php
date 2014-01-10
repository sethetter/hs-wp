<?php get_header(); ?>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
    <img class="img-rounded" src="<?php bloginfo('template_directory'); ?>/images/playin_videogames.jpg" alt="Generic placeholder image"> 
      <div class="container">
        <div class="carousel-caption">
          <h1>Games</h1>
          <p>We always have the latest video titles for you and your friends to enjoy. Swing by grab a speciality drink and destroy a few noobs in some FPS action.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Game Library</a></p>
        </div>
      </div>
    </div>
    <div class="item">
    <img class="img-rounded" src="<?php bloginfo('template_directory'); ?>/images/drinks.jpg" alt="Generic placeholder image"> 
      <div class="container">
        <div class="carousel-caption">
          <span>
            <h1>Drinks</h1>
            <p>In addition to a crazy over stocked bar, Headshots has many custom crafted cocktails. Several theme beverages for the video game enthusiast.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Drinks Menu</a></p>
          </span>
        </div>
      </div>
    </div>
    <div class="item">
      <img class="img-rounded" src="<?php bloginfo('template_directory'); ?>/images/grilled_cheese.jpg" alt="Generic placeholder image"> 
      <div class="container">
        <div class="carousel-caption">
          <h1>Food</h1>
          <p>Headshots has a full menu ranging from sizzling appetizers to gourmet hamburgers, the legendary Grandma's Grilled Cheese, and incredibly mouth-watering chicken.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Food Menu</a></p>
        </div>
      </div>
    </div>
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

  <!-- Three columns of text below the carousel -->
  <div class="row info">
    <div class="col-lg-4">
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/location.png" alt="Generic placeholder image">
      <h2><span>Location</span></h2>
      <p>We are located at 21st and Woodlawn</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/clock.png" alt="Generic placeholder image">
      <h2><span>Hours</span></h2>
      <p>Tuesday - Saturday 4pm - 2am</p>
      <p>Sunday 4pm - 12am</p>
      <p>Monday CLOSED</p>
      <p>Kitchen open until midnight</p>
      <p>21 to enter after 10pm</p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/aboutus.png" alt="Generic placeholder image">
      <h2><span>About Us</span></h2>
      <p>Learn about us</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"><span class="text-muted">Upcoming</span> Events</h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <ul>
        <li>Event example one</li>
        <li>Event example two</li>
        <li>Event example three</li>
      </ul>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-5">
      <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
  </div>

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class="col-md-5">
      <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
    </div>
  </div>

  <hr class="featurette-divider">

  <!-- /END THE FEATURETTES -->


  <!-- FOOTER -->
  <footer>
    <p class="pull-right"><a href="#">Back to top</a></p>
    <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
<?php get_footer(); ?>
