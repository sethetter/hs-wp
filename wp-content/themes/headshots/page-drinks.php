<!-- HEADER -->
<?php get_header(); ?>
<!-- HEADER -->

<!-- BODY -->
<div class="page container drinks">
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
    'orderby' => 'id',
    'order' => 'ASC',
    'taxonomy' => 'drink_category',
    'type' => 'post'
  ));

  foreach($categories as $category) {
    $args = array(
      'posts_per_page' => -1,
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

    <div class="row items <?php echo $category->slug; ?>">
      <?php
      if ($posts) {
        foreach($posts as $post) {

          setup_postdata($post);
          
          $list_categories = array(
            'bottled-beer',
            '16oz-draft-beer',
            '60oz-pitchers',
            'other-drinks'
          );

          ?>

          <?php if (in_array($category->slug, $list_categories)) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 item">
          <?php } else { ?>
            <div class="col-lg-6 col-md-6 col-sm-6 item">
          <?php } ?>
            <h3>
              <?php the_title();?>
              <span class="price"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
            </h3>
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
