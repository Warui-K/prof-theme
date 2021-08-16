<?php
/**Template Name:  Contact Us Page*/
?>
<?php get_header();?>
<main class="main pt-4">

<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">

      <article class="card mb-4">
        <header class="card-header text-center">
          <h1 class="card-title"><?php _e('Get in touch', 'kinotiwp');?></h1>
        </header>
        <div class="card-body">

          <p><strong>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus.</strong></p>

          <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>

          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="company">Company</label>
              <input type="text" class="form-control" id="company" placeholder="Company">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email address">
            </div>
            <div class="form-group">
              <label for="question">Message</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Message"></textarea>
            </div>

            <button type="button" class="btn btn-success">Send</button>
          </form>

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