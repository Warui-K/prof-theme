<?php
/**
 * The template for displaying archive pages
 */
get_header( );

$description = get_the_archive_description();
?>

<main class="main pt-4">

    <div class="intro">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-4">
                    <a class="intro-block active" href="<?php echo get_theme_mod('ki_intro_l_1'); ?>"
                        style="background-image:url('<?php echo get_theme_mod('ki_intro_1') ?>')">
                        <div class="intro-block-inner">
                            <time><?php echo get_theme_mod('ki_intro_t_1'); ?></time>
                            <h2><?php echo get_theme_mod('ki_intro_h_1'); ?></h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="intro-block active" href="<?php echo get_theme_mod('ki_intro_l_1'); ?>"
                        style="background-image:url('<?php echo get_theme_mod('ki_intro_2') ?>')">
                        <div class="intro-block-inner">
                            <time><?php echo get_theme_mod('ki_intro_t_2'); ?></time>
                            <h2><?php echo get_theme_mod('ki_intro_h_2'); ?></h2>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="intro-block active" href="<?php echo get_theme_mod('ki_intro_l_1'); ?>"
                        style="background-image:url('<?php echo get_theme_mod('ki_intro_3') ?>')">
                        <div class="intro-block-inner">
                            <time><?php echo get_theme_mod('ki_intro_t_3'); ?></time>
                            <h2><?php echo get_theme_mod('ki_intro_h_3'); ?></h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="site-preview-intro">
            <div class="pt-4 pb-4 text-center">
                <h1 class="mb-3"><?php echo get_theme_mod('ki_site_preview_intro_h_1'); ?></h1>
                <p class="mb-4"><?php echo get_theme_mod('ki_site_preview_intro_t_1'); ?></p>
                <a href="<?php echo get_theme_mod('ki_intro_h_3'); ?>"
                    class="btn btn-success btn-lg"><?php _e( 'View Notes', 'kinotiwp' ); ?></a>
            </div>
        </div>
    </div>
    <div class="site-preview-choices">
        <div class="container">
            <div class="row">

                <div class="col-md-11 col-lg-12 mx-auto">
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_1'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_1'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_1'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_1'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_1'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_1'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_2'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_2'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_2'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_2'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_2'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_2'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_3'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_3'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_3'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_3'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_3'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_3'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_4'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_4'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_4'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_4'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_4'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_4'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_5'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_5'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_5'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_5'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_5'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_5'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>

                        <div class="col-md-6 col-xl-4">
                            <article class="card mb-4">
                                <header class="card-header">
                                    <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_6'); ?>">
                                        <h4 class="card-title">
                                            <?php echo get_theme_mod('ki_site_preview_choices_h_6'); ?></h4>
                                    </a>
                                </header>
                                <a href="<?php echo get_theme_mod('ki_site_preview_choices_t_6'); ?>">
                                    <img class="card-img card-img-border"
                                        src="<?php echo get_theme_mod('ki_site_preview_choices_6'); ?>"
                                        alt="<?php echo get_theme_mod('ki_site_preview_choices_h_6'); ?>" />
                                </a>
                                <div class="card-body">
                                    <p class="card-text"><?php echo get_theme_mod('ki_site_preview_choices_t_6'); ?></p>
                                </div>
                            </article>
                            <!-- /.card -->
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

            </div>
            <!-- /.row -->
        </div>
    </div>

</main>
<div class="container-fluid">
    <div class="site-newsletter">
        <div class="text-center">
            <h1 class="mb-3"><?php _e('Online Resources', 'kinotiwp');?></h1>
            <p class="mb-4"><?php _e('Read, Listen and Watch');?></p>
                <div class="row">

                    <div class="col-md-11 col-lg-12 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <h3 class="h2 mb-2"><?php _e('Latest Articles', 'kinotiwp');?></h3>

                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-sticky-note"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_a_l_1');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_a_1'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-sticky-note"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_a_l_2');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_a_2'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-sticky-note"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_a_l_3');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_a_3'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-sticky-note"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_a_l_4');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_a_4'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-sticky-note"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_a_l_5');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_a_5'); ?></a>
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="col-md-6 col-xl-4">
                            <h3 class="h2 mb-2"><?php _e('Latest Videos', 'kinotiwp');?></h3>
                            <div class="card-body">
                                <ul class="list-unstyled">
                                <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-video"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_v_l_1');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_v_1'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-video"></i></span>
                                            <a href=' <?php echo get_theme_mod('ki_site_resources_v_l_2');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_v_2'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-video"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_v_l_3');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_v_3'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-video"></i></span>
                                            <a href=' <?php echo get_theme_mod('ki_site_resources_v_l_4');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_v_4'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-video"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_v_l_5');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_v_5'); ?></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-6 col-xl-4">
                                <h3 class="h2 mb-2"><?php _e('Latest Podcasts', 'kinotiwp');?></h3>

                                <div class="card-body">
                                    <ul class="list-unstyled">
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-podcast"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_p_l_1');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_p_1'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-podcast"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_p_l_2');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_p_2'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-podcast"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_p_l_3');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_p_3'); ?></a>
                                    </li>
                                    <li class="mb-0"><span class="icon-r"><i
                                                class="align-middle mr-2 fas fa-fw fa-podcast"></i></span>
                                        <a href=' <?php echo get_theme_mod('ki_site_resources_p_l_4');?>''
                                                class="link"><?php echo get_theme_mod('ki_site_resources_p_4'); ?></a>
                                        </li>
                                        <li class="mb-0"><span class="icon-r"><i
                                                    class="align-middle mr-2 fas fa-fw fa-podcast"></i></span>
                                            <a href='<?php echo get_theme_mod('ki_site_resources_p_l_5');?>'' class="link"><?php echo get_theme_mod('ki_site_resources_p_5'); ?></a>
                                    </li>
                                </ul>
                            </div>

                        </div>


                    </div>
                    <!-- /.row -->
                    <a href="<?php echo get_theme_mod('ki_site_resources_all_resources'); ?>" class="btn btn-success btn-lg"><?php _e('View ALL', 'kinotiwp');?></a>
                </div>


        </div>
    </div>
</div>
</div>

<div class="site-instagram">
<div class="action">
    <a class="btn btn-light" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
        <?php _e('Visit Our Blog Page', 'kinotiwp');?>
    </a>
</div>
<div class="row no-gutters">
    <div class="col-sm-6">
        <div class="row no-gutters">
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_1');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_1'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_2');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_2'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_3');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_3'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_4');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_4'); ?>" alt="" />
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="row no-gutters">
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_5');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_5'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_6');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_6'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_7');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_7'); ?>" alt="" />
                </a>
            </div>
            <div class="col-3">
                <a class="photo" href="<?php echo get_theme_mod('ki_site_blog_gallery_l_8');?>">
                    <img class="img-fluid" src="<?php echo get_theme_mod('ki_site_blog_gallery_8'); ?>" alt="" />
                </a>
            </div>
        </div>
    </div>
</div>
</div>
<?php get_footer( );?>