<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordsmith
 */

get_header();
?>

<!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding">

        <?php
        if(have_posts(  )):
        ?>

        <div class="row narrow">
            <div class="col-full s-content__header" data-aos="fade-up">
                <h1 class="display-1 display-1--with-line-sep"><?php the_archive_title(  ); ?></h1>
                <?php the_archive_description( '<p class="lead">', '</p>' ) ?>
            </div>
        </div>
        
        <div class="row entries-wrap add-top-padding wide">
            <div class="entries">

            <?php
            while(have_posts(  )):
                the_post(  );
                get_template_part( 'template-parts/content', get_post_type() );

            endwhile;
            ?>

            </div> <!-- end entries -->
        </div> <!-- end entries-wrap -->

        <?php get_template_part( 'template-parts/content', 'pagination' ) ?>
        <?php
        else:
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>


    </section> <!-- end s-content -->

<?php
get_footer();
