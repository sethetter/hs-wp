<!-- HEADER -->
<?php get_header(); ?>
<!-- HEADER -->

<!-- BODY -->
<div class="page container">
  <?php if (have_posts()) : while (have_posts()) : the_post();?>

    <div class="row title">
      <div class="col-lg-12">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>

    <div class="row content">
    </div>

  <?php endwhile; endif; ?>
</div>
<!-- BODY -->


<!-- FOOTER -->
<?php get_footer(); ?>
<!-- FOOTER -->
