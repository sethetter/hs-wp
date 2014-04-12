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
      <div class="carousel-image games"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>Games</h1>
          <p>We always have the latest video titles for you and your friends to enjoy. Swing by grab a speciality drink and destroy a few noobs in some FPS action.</p>
          <p><a class="btn btn-lg btn-danger" href="#" role="button">Game Library</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="carousel-image drinks"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>Drinks</h1>
          <p>In addition to a crazy over stocked bar, Headshots has many custom crafted cocktails. Several theme beverages for the video game enthusiast.</p>
          <p><a class="btn btn-lg btn-danger" href="#" role="button">Drinks Menu</a></p>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="carousel-image food"></div>
      <div class="container">
        <div class="carousel-caption">
          <h1>Food</h1>
          <p>Headshots has a full menu ranging from sizzling appetizers to gourmet hamburgers, the legendary Grandma's Grilled Cheese, and incredibly mouth-watering chicken.</p>
          <p><a class="btn btn-lg btn-danger" href="#" role="button">Food Menu</a></p>
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
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/ryan_about_us.png" alt="Generic placeholder image">
      <h2><span>About Us</span></h2>
      <p>We are a fun place for friends to come and play games, have some food and enjoy a few drinks. Come check us out, you won't be disappointed.</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/location.png" alt="Generic placeholder image">
      <h2><span>Location</span></h2>
      <p>6140 E 21st Street Ste. 170<br>Wichita, Kansas 67208</p>
      <p>At the intersection of 21st Street North and Woodlawn</p>
      <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="<?php bloginfo('template_directory'); ?>/images/clock.png" alt="Generic placeholder image">
      <h2><span>Hours</span></h2>
      <p>Tuesday - Saturday 4 PM - 2 AM</p>
      <p>Sunday 4 PM - 12 AM, Closed Monday</p>
      <p>Kitchen stays open until midnight</p>
      <p>21 to enter after 10 PM</p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->


  <!-- START THE FEATURETTES -->

  <hr class="featurette-divider">

  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading"><span class="text-muted">Upcoming</span> Events</h2>
      <p class="lead">Here is some of our great upcoming events and be sure to look at our calender for future events as well!</p>
    </div>
    <div class="col-md-5">
      <ul class="event-list">
        <li><a href="#">Feb 9 - Super Badass Party</a></li>
        <li><a href="#">Mar 31 - Yet Another Awesome Event</a></li>
        <li><a href="#">Jun 18 - This One Is Going To Be Huge</a></li>
      </ul>
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
