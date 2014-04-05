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
      <div class="col-lg-12">
        <?php the_content(); ?>
      </div>
    </div>

  <?php endwhile; endif; ?>

  <?php
  //for each category, show 5 posts
  $categories = get_categories(array(
    'orderby' => 'name',
    'order' => 'ASC',
    'taxonomy' => 'drink_category',
    'type' => 'post'
  ));

  foreach($categories as $category) {
    $args = array(
      'post_type' => 'drinks',
      'tax_query' => array(
        array(
          'taxonomy' => 'drink_category',
          'field' => 'slug',
          'terms' => $category->slug
        )
      )
    );

    $posts = get_posts($args);
    ?>

    <h2><?php echo $category->name ?></h2>

    <div class="row items">
      <?php
      if ($posts) {
        foreach($posts as $post) {

          setup_postdata($post); ?>

          <div class="col-lg-6">
            <h3><?php the_title();?></h3>
            <div class="price"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></div>
            <div class="description"><?php the_content(); ?></div>
          </div>

          <?php
        } // foreach($posts
      } // if ($posts
    ?>
    </div>
  <?php
  } // foreach($categories
  ?>

</div>
<!-- BODY -->


<!-- FOOTER -->
<?php get_footer(); ?>
<!-- FOOTER -->
