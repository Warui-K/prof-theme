<?php
/**
 * The template for displaying archive pages
 */
get_header( );

$description = get_the_archive_description();
?>

<main class="main pt-4">

<div class="container-fluid">

  <div class="row">
  <?php
            $args = array(
                'post_type' => 'post',
                'orderby' => 'rand',
                'posts_per_page' => '10',
                
            );
            $post_query = new WP_Query($args);
            ?>
    <div class="col-md-9">
    <div class="row">

    <?php

            if ($post_query->have_posts()) {
                while ($post_query->have_posts()) {
                    $post_query->the_post(); ?>
        <div class="col-md-4">


          <article class="card mb-4">
            <header class="card-header">
              <div class="card-meta">
                <a href="#"><time class="timeago" datetime="<?php the_date(); ?>"><?php the_date(); ?></time></a> in <a href="page-category.html">Journey</a>
              </div>
              <a href="<?php the_permalink(); ?>">
                <h4 class="card-title"><?php the_title(); ?></h4>
              </a>
            </header>
            <?php
            if(has_post_thumbnail()){
              ?>
            <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium', array('class' => 'card-img'));?>

            </a>
            <?php }?>
            <div class="card-body">
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </article><!-- /.card -->

         
        </div>
   
      <?php
                }
                wp_reset_postdata();
            }
            ?>
    </div>
    </div>

    <div class="col-md-3 ml-auto">

      <aside class="sidebar">
        <div class="card mb-4">
          <div class="card-body">
            <h4 class="card-title">About</h4>
            <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
          </div>
        </div><!-- /.card -->
      </aside>

      <aside class="sidebar sidebar-sticky">
        <div class="card mb-4">
          <div class="card-body">
            <h4 class="card-title">Tags</h4>
            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food & Drinks</a>
          </div>
        </div><!-- /.card -->
        <div class="card mb-4">
          <div class="card-body">
            <h4 class="card-title">Popular stories</h4>

            <a href="post-image.html" class="d-inline-block">
              <h4 class="h6">The blind man</h4>
              <img class="card-img" src="img/articles/2.jpg" alt="" />
            </a>
            <time class="timeago" datetime="2019-10-03 20:00">3 october 2019</time> in Lifestyle

            <a href="post-image.html" class="d-inline-block mt-3">
              <h4 class="h6">Crying on the news</h4>
              <img class="card-img" src="img/articles/3.jpg" alt="" />
            </a>
            <time class="timeago" datetime="2019-07-16 20:00">16 july 2019</time> in Work

          </div>
        </div><!-- /.card -->
      </aside>

    </div>
  </div>
</div>

</main>


<div class="site-newsletter">
    <div class="container">
        <div class="text-center">
            <h3 class="h4 mb-2">Subscribe to our newsletter</h3>
            <p class="text-muted">Join our monthly newsletter and never miss out on new stories and promotions.</p>

            <div class="row">
                <div class="col-xs-12 col-sm-9 col-md-7 col-lg-5 ml-auto mr-auto">
                    <div class="input-group mb-3 mt-3">
                        <input type="text" class="form-control" placeholder="Email address" aria-label="Email address">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Subscribe</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer( );?>