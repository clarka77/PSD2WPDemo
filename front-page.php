<?php
/**
 * Front Page
 *
 * Front Page file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage PSD2WP_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/
 * @since      1.0.0
 */
?>

<?php get_header(); ?>

    <body>
        <!-- Landing Page Section -->
        <section id="home" class="hero is-fullheight clarka-lightgray">
            <div class="hero-head">
                <img class="homeimage" alt="YellowMoon" src="<?php echo get_theme_file_uri(); ?>/assets/images/YellowMoon-2.gif">
                <h1 class="home-1">
                    Welcome to the Yellow Side of the Moon
                </h1>
                <h1 class="home-2">
                    We Do Some Creative Stuff!!!
                </h1>
                <h1 class="home-3">
                    <a href="#aboutus" class="homebox">Explore</a>
                </h1>
                <span class="icon-text clarka-center clarka-icon-white">
                    <span class="icon">
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl"></i>
                    </span>
                </span>
            </div>
            <div class="hero-body"></div>
            <div class="hero-foot"></div>
        </section>
        <!-- About Us Section -->
        <p>&nbsp;</p>
        <nav class="navbar">
            <div class="container">
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item">
                            <img alt="YellowMoon" src="<?php echo get_theme_file_uri(); ?>/assets/images/YellowMoon-1.gif">
                        </a>
                    </div>
                    <div class="navbar-end">
                        <div class="navbar-item">
                            <a href="#home" class="clarka-nav-span">Home</a>
                        </div>
                        <div class="navbar-item">
                            <a href="#aboutus" class="clarka-nav-span">About Us</a>
                        </div>
                        <div class="navbar-item">
                            <a href="#portfolio" class="clarka-nav-span">Portfolio</a>
                        </div>
                        <div class="navbar-item">
                            <a href="#clients" class="clarka-nav-span">Clients</a>
                        </div>
                        <div class="navbar-item">
                            <a href="#contact" class="clarka-nav-span">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <hr>
        <section id="aboutus" class="hero is-halfheight">
            <div class="hero-head">
                <h2 class="aboutus-1">
                    About Us
                </h2>
                <h2 class="aboutus-2">
                    Yellow Side of the Moon is not secret anymore
                </h2>
                <div class="columns">
                    <div class="column is-one-fifths"></div>
                    <div class="column is-one-fifths">
                        <h2 class="aboutus-3">
                            <span class="numberyellow">01&nbsp;&nbsp;|</span>&nbsp;&nbsp;We Make Some Art
                        </h2>
                        <br><br>
                        <h2 class="aboutus-4">
                            Its just some empty spaces with some<br>
                            text, images, and more empty spaces
                        </h2>
                    </div>
                    <div class="column is-one-fifths">
                        <h2 class="aboutus-3">
                            <span class="numberyellow">02&nbsp;&nbsp;|</span>&nbsp;&nbsp;We Develop Some Apps
                        </h2>
                        <br><br>
                        <h2 class="aboutus-4">
                            You click and magic happens,<br>
                            well someone must make magic
                        </h2>
                    </div>
                    <div class="column is-one-fifths">
                        <h2 class="aboutus-3">
                            <span class="numberyellow">03&nbsp;&nbsp;|</span>&nbsp;&nbsp;We Take Some Photographs
                        </h2>
                        <br><br>
                        <h2 class="aboutus-4">
                            This is the easy part of the job,<br>
                            just point camera and shoot.
                        </h2>
                    </div>
                    <div class="column is-one-fifths"></div>
                </div>
            </div>
            <div class="hero-body"></div>
            <div class="hero-foot"></div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </section>
        <!-- Random Text Section -->
        <section class="hero is-halfheight clarka-yellow">
            <div class="hero-head">
                <h3 class="clarka-h3">
                    <?php echo get_post_meta(get_the_ID(), 'title', true); ?>
                </h3>
                <h3>
                    <span class="clarka-h3-span">
                        <?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?>
                    </span>
                </h3>
            </div>
            <div class="hero-body"></div>
            <div class="hero-foot"></div>
        </section>
        <!-- Portfolio Section -->
        <section id="portfolio" class="hero is-large">
            <div class="hero-head">
                <h4 class="clarka-h4">
                    Portfolio
                </h4>
                <h4>
                    <span class="clarka-h4-span">
                        When we are bored we make some of these
                    </span>
                </h4>
                <div class="columns">
                    <div class="column is-2"></div>
                    <div class="column is-8">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture1'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture2'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture3'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture4'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture5'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture6'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture7'), 'medium')[0]; ?>">
                        <img class="clarka-portfolio" alt="" src="<?php echo wp_get_attachment_image_src(get_field('picture8'), 'medium')[0]; ?>">
                    </div>
                    <div class="column is-2"></div>
                </div>
                <h4>
                    <span class="clarka-h4-span2">
                        Oh...We have more of these
                    </span>
                </h4>
                <span class="icon-text clarka-center">
                    <span class="icon">
                        <i class="fa-sharp fa-solid fa-angle-down fa-2xl"></i>
                    </span>
                </span>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </section>
        <!-- Clients Section -->
        <section id="clients" class="hero is-medium clarka-darkgray">
            <div class="hero-head">
                <h5 class="clarka-h5">
                    Clients
                </h5>
                <h5>
                    <span class="clarka-h5-span">
                        Somebody actually pay us for these stuff
                    </span>
                </h5>
                <div class="columns">
                    <div class="column is-three-fifths is-offset-one-fifth">
                        <img class="clarka-clients" alt="Chippys" src="<?php echo get_theme_file_uri(); ?>/assets/images/1a.jpg">
                        <img class="clarka-clients" alt="Sweety" src="<?php echo get_theme_file_uri(); ?>/assets/images/2a.jpg">
                        <img class="clarka-clients" alt="BullsEye" src="<?php echo get_theme_file_uri(); ?>/assets/images/3a.jpg">
                        <img class="clarka-clients" alt="Wall Paint Shop" src="<?php echo get_theme_file_uri(); ?>/assets/images/4a.jpg">
                        <img class="clarka-clients" alt="Golde" src="<?php echo get_theme_file_uri(); ?>/assets/images/5a.jpg">
                        <img class="clarka-clients" alt="Lillys Flowers" src="<?php echo get_theme_file_uri(); ?>/assets/images/6a.jpg">
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </section>
        <!-- Contact Section -->
        <section id="contact" class="hero is-large">
            <div class="hero-head">
                <h6 class="clarka-h6">
                    Contact us
                </h6>
                <h6>
                    <span class="clarka-h6-span">
                        Sure...we can take some time for chat
                    </span>
                </h6>
                <div class="columns">
                    <div class="column is-three-fifths is-offset-one-fifth">
                        <?php echo do_shortcode('[wpforms id="42" title="false"]'); ?>
                    </div>
                </div>
            </div>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </section>

<?php get_footer(); ?>
