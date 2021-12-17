<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lanesta
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="container">
            <div class="header__social">
                <div class="header__facebook">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/facebook.svg'; ?>" alt="facebook">
                    </a>
                </div>
                <div class="header__facebook">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri().'/assets/img/instagram.svg'; ?>" alt="instagram">
                    </a>
                </div>
            </div>
            <div class="header__logo">
                <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri().'/assets/img/logo.png'; ?>" alt="logo" class="logo"></a>
            </div>
            <div class="header__right">
                <div class="header__lang">
                    <div class="active__lang">
                        <p>eng</p>
                        <ul>
                            <li>
                                <a href="#eng">eng</a>
                            </li>
                            <li>
                                <a href="#ukr">ukr</a>
                            </li>
                            <li>
                                <a href="#ru">ru</a>
                            </li>
                            <li>
                                <a href="#pol">pol</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header__burger">
                    <div class="burger">
                        <span></span><span></span><span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <nav>
                <?php
                wp_nav_menu([
                        'menu'=>'header_menu',
                    'container'=>false,

                ])
                ?>

                <!--<ul>
                    <li><a href="./about-us.html">About Us</a></li>
                    <li><a href="./collectios.html">Collections</a></li>
                    <li><a href="./video.html">Video</a></li>
                    <li><a href="./blog.html">Blog</a></li>
                    <li><a href="./store.html">Where i can buy</a></li>
                    <li><a href="./partnership.html"><strong>Partnership</strong></a></li>
                </ul>-->
            </nav>
        </div>
    </header>