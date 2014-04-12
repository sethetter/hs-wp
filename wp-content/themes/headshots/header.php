<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <title><?php wp_title(' | '); ?></title>
  <link href="<?php bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <?php wp_head(); ?>
</head>
<body class="<?php echo is_home() ? '' : 'page' ?>">
  <div class="navbar-wrapper">
    <div class="container">

    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a id="logo" class="img-responsive navbar-brand" href="/">Headshots Bar &amp; Grill</a>
          </div>
          <div class="navbar-collapse collapse pull-right">
            <ul class="nav navbar-nav">

              <!-- Fallback title of 'events' to get active class on events page with plugin -->
              <?php $slug = sanitize_title( get_the_title(), 'events' ); ?>

              <li class="<?php echo ($slug === 'food' && !is_home() ? 'active' : ''); ?>"><a href="/food">Food</a></li>
              <li class="<?php echo ($slug === 'drinks' && !is_home() ? 'active' : ''); ?>"><a href="/drinks">Drinks</a></li>
              <li class="<?php echo ($slug === 'games' && !is_home() ? 'active' : ''); ?>"><a href="/games">Games</a></li>
              <li class="<?php echo ($slug === 'events' && !is_home() ? 'active' : ''); ?>"><a href="/events">Events</a></li>
              <li class="<?php echo ($slug === 'contact' && !is_home() ? 'active' : ''); ?>"><a href="/contact">Contact</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- ./container -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->
  </div><!-- /.navbar-wrapper -->


