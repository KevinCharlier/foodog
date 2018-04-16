<section class="topbar">
    <?php get_search_form(); ?>
    <ul>
        <li>
            <a href="https://www.google.com/" target=blank>
                <img src="http://localhost/wordpress/wp-content/uploads/2018/04/facebook.png" alt="facebook" />
            </a>
        </li>
        <li>
            <a href="https://www.google.com/" target=blank>
                <img src="http://localhost/wordpress/wp-content/uploads/2018/04/twitter.png" alt="twitter" />
            </a>
        </li>
        <li>
            <a href="https://www.google.com/" target=blank>
                <img src="http://localhost/wordpress/wp-content/uploads/2018/04/instagram.png" alt="instagram" />
            </a>
        </li>
        <li>
            <form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
                <input name="s" id="s" type="search" placeholder="">
                </div>
            </form>
        </li>
    </ul>
</section>
<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
    <title>
        <?php bloginfo('name'); ?> &raquo;
        <?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
    </title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="my-logo">
        <h1>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="http://localhost/wordpress/wp-content/uploads/2018/03/logo.png" alt="Foodog">
            </a>
        </h1>
        <?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>
        <hr>
    </header>