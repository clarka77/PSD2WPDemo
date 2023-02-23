<?php
/**
 * 404
 *
 * The custom template for displaying 404 pages (not found)
 * based on Page 404 Big Boom by Andry Zirka
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage PSD2WP_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-hierarchy/#404-not-found
 * @since      1.0.0
 */
?>

<?php get_header(); ?>

    <body>
        <main class="bl_page404">
            <h1>Error 404. The page does not exist</h1>
            <p>Sorry! The page you are looking for can not be found. Perhaps the page you requested was moved or deleted. It is also possible that you made a small typo when entering the address. Go to the main page.
            </p>
            <div class="bl_page404__wrapper">
                <img src="https://github.com/BlackStar1991/Pictures-for-sharing-/blob/master/404/bigBoom/cloud_warmcasino.png?raw=true" alt="cloud_warmcasino.png">
                <div class="bl_page404__el1"></div>
                <div class="bl_page404__el2"></div>
                <div class="bl_page404__el3"></div>
                <a class="bl_page404__link" href="<?php echo site_url(); ?>">go home</a>
            </div>
        </main>
    </body>
</html>
