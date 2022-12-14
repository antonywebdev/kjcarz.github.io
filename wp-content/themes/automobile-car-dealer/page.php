<?php
/**
 * The template for displaying all pages.
 * @package Automobile Car Dealer
 */

get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<main id="skip_content" class="content_box py-4 px-0" role="main">
    <?php do_action( 'automobile_car_dealer_page_top' ); ?>
    <style type="text/css">
    .background-img-skin {
        background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;
        height: 212px;
        background-size: contain;
    }
    </style>
    <div class="container-fullwidth">
        <div class="main-wrapper">
            <?php while ( have_posts() ) : the_post(); ?>
            <?php if(has_post_thumbnail()) { ?>
                <div class="feature-box  background-img-skin">   
                      <h4 class="banner-title"><?php the_title(); ?></h4>
                    
                </div>
            <?php } ?>
            <div class="new-text"><?php the_content(); ?></div>
            <?php
                wp_link_pages( array(
                    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'automobile-car-dealer' ) . '</span>',
                    'after'       => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'automobile-car-dealer' ) . ' </span>%',
                    'separator'   => '<span class="screen-reader-text">, </span>',
                ) );
            ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || '0' != get_comments_number() ) {
                comments_template();
            }
            ?>
            <?php endwhile; // end of the loop. ?>     
            <div class="clear"></div>    
        </div>
    </div>
    <?php do_action( 'automobile_car_dealer_page_bottom' ); ?>
</main>

<?php get_footer(); ?>