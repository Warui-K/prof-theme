<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php wp_title(''); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <header>
        <nav class="navbar navbar-expand-md navbar-light absolute-top">
            <div class="container-fluid">

                <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse order-3 order-md-2',
                'container_id'    => 'navbar-left',
                'menu_class'      => 'navbar-nav mr-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );?>

                <?php
                                if (has_custom_logo()) {
                                    the_custom_logo();
                                } else {
                                ?>
                <a class="navbar-brand mx-auto order-1 order-md-3" href="<?php echo esc_url(home_url('/')); ?>"
                    class="d-inline-block align-top">
                    <?php bloginfo('name'); ?></a>
                <?php
                                }
                                ?>



                <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link" href="#">

                                <i class="align-middle mr-2 fas fa-fw fa-user-circle"></i> <span
                                    class="align-middle"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="align-middle mr-2 fas fa-fw fa-cart-arrow-down"></i> <span
                                    class="align-middle"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="align-middle mr-2 fab fa-fw fa-facebook"></i> <span
                                    class="align-middle"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="align-middle mr-2 fab fa-fw fa-twitter"></i> <span
                                    class="align-middle"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="align-middle mr-2 fab fa-fw fa-linkedin-in"></i> <span
                                    class="align-middle"></span>
                            </a>
                        </li>
                    </ul>
                    <?php get_search_form(); ?>
                </div>
            </div>
        </nav>
    </header>