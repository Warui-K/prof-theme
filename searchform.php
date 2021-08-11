<?php $unique_id = esc_attr( uniqid('search-form-') );?>
<form class="form-inline" role="search" action="<?php echo esc_url(home_url('/'));?>" method="post">
    <input class="search js-search form-control form-control-rounded mr-sm-2" id="<?php echo $unique_id; ?>" name="s" value="<?php the_search_query(  );?>"
     type="text"
        title="Enter search query here.." placeholder="<?php _e( 'Search for notes', 'kinotiwp');?>" aria-label="Search">
</form>