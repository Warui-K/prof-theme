<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <title>Kinoti Notes</title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
  
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
            <div class="container">

                <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="notes.html">Notes</a>

                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown02">
                                <a class="dropdown-item" href="#">Blog</a>
                                <a class="dropdown-item" href="#">About</a>
                                <a class="dropdown-item" href="#">Contact</a>
                            </div>
                        </li>
                    </ul>
                </div>

                <a class="navbar-brand mx-auto order-1 order-md-3" href="index.html">Kinøti</a>

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
                    <form class="form-inline" role="search">
                        <input class="search js-search form-control form-control-rounded mr-sm-2" type="text"
                            title="Enter search query here.." placeholder="Search.." aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </header>