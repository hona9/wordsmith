<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordsmith
 */

?>
<?php get_template_part( 'template-parts/extra'); ?>
<!-- s-footer
    ================================================== -->
    <footer class="s-footer">
        <?php
        if(is_active_sidebar( 'sidebar-2' )){
        ?>
        <div class="s-footer__main">
            <div class="row">
                
            <?php dynamic_sidebar( 'sidebar-2' ); ?>

            </div>
        </div> <!-- end s-footer__main -->
        <?php
        }
        ?>

        <div class="s-footer__bottom">
            <div class="row">

                <div class="col-six">
                    <ul class="footer-social">
                        <li>
                            <a href="<?php echo get_theme_mod( 'facebook_link', '' ); ?>">
                            <i class="fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'twitter_link', '' ); ?>">
                            <i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'instagram_link', '' ); ?>">
                            <i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'youtube_link', '' ); ?>">
                            <i class="fab fa-youtube"></i></a>
                        </li>
                        <li>
                            <a href="<?php echo get_theme_mod( 'pinterest_link', '' ); ?>">
                            <i class="fab fa-pinterest"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="col-six">
                <?php
                    if( get_theme_mod( 'copyright_text', '' )){
                ?>
                    <div class="s-footer__copyright">
                        <span>
                            <?php echo get_theme_mod( 'copyright_text', '' ) ?>
                        </span>
                    </div>
                <?php
                    }
                ?>
                </div>
                
            </div>
        </div> <!-- end s-footer__bottom -->

        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>

    </footer> <!-- end s-footer -->

<?php wp_footer(); ?>

</body>
</html>
