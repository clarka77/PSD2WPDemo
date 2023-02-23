
<?php
/**
 * Footer
 *
 * Main footer file for the theme.
 * php version 8.1.12
 *
 * @category   Components
 * @package    WordPress
 * @subpackage PSD2WP_Demo
 * @author     Clark Alford <clark@clarka.me>
 * @license    https://www.gnu.org/licenses/gpl-3.0.txt GNU/GPLv3
 * @link       https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since      1.0.0
 */
?>
        <!-- Footer Section -->
        <section class="hero is-small clarka-black">
            <div class="hero-body">
                <div class="columns">
                    <div class="column"></div>
                    <div class="column">
                        <span class="clarka-footer">
                            &copy; <script>document.write(new Date().getFullYear())</script> - YellowMoon All Rights Reserved
                        </span>
                    </div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column">
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-brands fa-dribbble"></i>
                            </span>
                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </span>
                        </span>&nbsp;&nbsp;&nbsp;&nbsp;
                        <span class="icon-text has-text-white">
                            <span class="icon">
                                <i class="fa-brands fa-youtube"></i>
                            </span>
                        </span>
                    </div>
                    <div class="column"></div>
                </div>
            </div>
        </section>
        <!-- JS at bottom for fast loading -->
        <?php wp_footer(); ?>
        <!-- Non Javascript Warning -->
        <noscript>
            <div class="nojs">
                <style type="text/css">
                    .content {
                        display: none;
                    }
                </style>
                <div id="noscript-warning">This website works best with JavaScript enabled
                    <br>
                    <a href="http://www.enable-javascript.com/" target="_blank">Click here for instructions</a> on how to enable JavaScript in your web browser.
                </div>
            </div>
        </noscript>
    </body>
</html>
