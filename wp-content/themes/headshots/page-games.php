<!-- HEADER -->
<?php get_header(); ?>
<!-- HEADER -->

<!-- BODY -->
<div class="page container games">
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
    'taxonomy' => 'game_category',
    'type' => 'post'
  ));

  foreach($categories as $category) {
    $args = array(
      'posts_per_page' => -1,
      'post_type' => 'games',
      'tax_query' => array(
        array(
          'taxonomy' => 'game_category',
          'field' => 'slug',
          'terms' => $category->slug
        )
      )
    );

    $posts = get_posts($args);
    ?>

    <h2><?php echo $category->name ?></h2>

    <ul class="row items <?php echo $category->slug; ?>">
      <?php
      if ($posts) {
        foreach($posts as $post) {

          setup_postdata($post); ?>

          <li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 ">
            <?php if (has_post_thumbnail()) { ?>
              <p>
                <?php the_post_thumbnail(array(165, 191), array(
                  'class' => 'img-responsive'
                )); ?>
              </p>
            <? } else { ?>
              <p class="game-no-image">
                <img src="<?php bloginfo('template_directory'); ?>/images/<?php echo $category->slug; ?>-case.png" class="img-responsive">
                <span><?php the_title(); ?></span>
              </p>
            <? } ?>
          </li>

          <?php
        } // foreach($posts
      } // if ($posts
    ?>
    </ul>
  <?php
  } // foreach($categories
  ?>

</div>
<!-- BODY -->


<!-- FOOTER -->
<?php get_footer(); ?>
<!-- FOOTER -->
