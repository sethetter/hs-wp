<?php get_header(); ?>
<?php 
  if ( have_posts() ) {
    while ( have_posts() ) {
      the_post(); 
?>

<!-- Page content -->
<h1><?php the_title(); ?></h1>

<div class="page-content">
  <?php the_content(); ?>
</div>

<?php 
    } // end while
  } // end if
?>
<?php get_footer(); ?>
