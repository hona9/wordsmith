<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordsmith
 */

get_header();

get_template_part( 'template-parts/slider' );
?>


<!-- s-content
    ================================================== -->
    <section class="s-content">
        <?php
        if(have_posts(  )):
            ?>
        
            <div class="row entries-wrap wide">
                <div class="entries">

                    <?php
                    while(have_posts(  )):

                        the_post(  );

                        get_template_part( 'template-parts/content' );

                    endwhile;
                    ?>

                </div> <!-- end entries -->
            </div> <!-- end entries-wrap -->

        
            <?php get_template_part( 'template-parts/content', 'pagination' ); ?>

            <?php
        else:
                get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>

        

    </section> <!-- end s-content -->
<?php
get_footer();
