<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordsmith
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">
                <?php
                    // You can start editing here -- including this comment!
                    if ( have_comments() ) :
                ?>
                 <h3 class="h2">
                 <?php
                    $wordsmith_comment_count = get_comments_number();
                    if ( '1' === $wordsmith_comment_count ) {
                        echo '1 Comment';
                    } else {
                        printf( 
                            /* translators: 1: comment count number, 2: title. */
                            esc_html( _nx( '%1$s Comment', '%1$s Comments', $wordsmith_comment_count, 'comments title', 'wordsmith' ) ),
                            number_format_i18n( $wordsmith_comment_count )
                        );
                    }
                ?>
                 </h3>

                <?php the_comments_navigation(); ?>

                    <!-- START commentlist -->
                    <ol class="commentlist">

                    <?php
                        wp_list_comments(
                            array(
                                'style'      => 'ol',
                                'short_ping' => true,
                            )
                        );
                    ?>

                    </ol>
                    <!-- END commentlist -->    
                    <?php
                        the_comments_navigation();

                        // If comments are closed and there are comments, let's leave a little note, shall we?
                        if ( ! comments_open() ) :
                            ?>
                            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'abstract' ); ?></p>
                            <?php
                        endif;

                    endif; // Check for have_comments().     
                    ?>  

                </div> <!-- end col-full -->
            </div> <!-- end comments -->

            <div class="row comment-respond">

                    <?php
                    comment_form();
                    ?>

            </div> <!-- end comment-respond -->

        </div> <!-- end comments-wrap -->
