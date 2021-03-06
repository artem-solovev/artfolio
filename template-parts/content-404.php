<?php
/**
 * Template part for displaying 404 page.
 *
 * @package Artfolio
 */
?>
<div class="error404Title">

    <div class="spider"></div>

    <div class="spiderWeb"></div>

    <h1 class="statusCode"><?php _e( 'Oops', 'artfolio' ); ?></h1>

    <p><?php _e( 'You seem to be lost. To find what you are looking for try go home or try a search', 'artfolio' ); ?></p>

    <a href="<?php echo esc_url( home_url() ); ?>">
        <i class="fa fa-home"></i>
    </a>

    <?php get_search_form(); ?>
</div>
