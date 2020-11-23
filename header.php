<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordsmith
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php get_template_part( 'template-parts/preloader' ) ?>

<!-- header
    ================================================== -->
    <header class="s-header header">

        <div class="header__logo">
            <?php
            if(has_custom_logo(  )){
                if(is_home(  )){
                    ?>
                    <h1 class="site-logo"><?php the_custom_logo(  ); ?></h1>
                    <?php
                }else{
                    the_custom_logo(  );
                }
                
            }else{

                    if(is_home(  )){
                        ?>
                        <h1 class = "site-title"><?php bloginfo( 'name' ); ?></h1>
                        <?php
                    }else{
                        ?>
                        <p class = site-title><?php bloginfo( 'name' ); ?></p>
                        <?php
                    }

                    $wordsmith_description = get_bloginfo( 'description' );
                    if($wordsmith_description){
                        ?>
                        <p class = "site-description"><?php echo esc_html($wordsmith_description); ?></p>
                        <?php
                    }

            }
            ?>
        </div> <!-- end header__logo -->

        <a class="header__search-trigger" href="#0"></a>
        <div class="header__search">

            <?php get_search_form(  ); ?>

            <a href="#0" title="Close Search" class="header__overlay-close"><?php echo __('Close', 'wordsmith'); ?></a>

        </div>  <!-- end header__search -->

        <a class="header__toggle-menu" href="#0" title="Menu"><span><?php echo __('Menu', 'wordsmith'); ?></span></a>
        <nav class="header__nav-wrap">

            <h2 class="header__nav-heading h6"><?php echo __('Navigate to', 'wordsmith'); ?></h2>

            <?php
            //if(has_nav_menu( 'menu-1' )){
                wp_nav_menu( array(

                    'location' => 'menu-1',
                    'menu_class' => 'header__nav',
                    'menu_id' => '',
                    'container' => '',
                    'fallback_cb' => 'wordsmith_fallback_nav_menu',

                ) );
            //}
            ?>

            <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php echo __('Close', 'wordsmith'); ?></a>

        </nav> <!-- end header__nav-wrap -->

    </header> <!-- s-header -->
