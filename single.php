<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordsmith
 */

get_header();
?>

<section class="s-content s-content--top-padding s-content--narrow">

    <?php
    while(have_posts(  )):
        
        the_post(  );

        get_template_part( 'template-parts/content', 'single' );

    endwhile;

    ?>

	<div class="s-content__entry-nav">
            <div class="row s-content__nav">
                <?php
                    the_post_navigation( array(
                        'prev_text' => '<span>'. __('Previous Post', 'wordsmith').'</span>%title',
                        'next_text' => '<span>'. __('Next Post', 'wordsmith').'</span>%title'
                    ) )
                ?>
            </div>
        </div> <!-- end s-content__pagenav -->

        <?php
        if(comments_open(  ) || get_comments_number(  )){
            comments_template(  );
        }
        ?>

</section> <!-- end s-content -->

<?php
get_footer();
