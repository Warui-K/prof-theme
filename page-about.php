<?php
/**Template Name:  About Us Page*/
?>
<?php get_header();?>

<main class="main pt-4">

<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">

      <article class="card mb-4">
        <header class="card-header text-center">
          <h1 class="card-title"><?php _e('Who are we?', 'kinotiwp');?></h1>
        </header>
        <div class="card-body">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <?php the_content();?>
        <?php endwhile; endif;?>
         
     
    
        </div>
      </article><!-- /.card -->

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

<?php get_footer();?>