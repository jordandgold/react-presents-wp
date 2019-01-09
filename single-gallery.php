<? get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="interior_header" style="background-image: url(<? the_field('album_cover'); ?>);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <div class="gallery_info">
            <div class="gallery_header" data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;"><? the_title(); ?></div>
            <div class="gallery_meta" data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;"><? the_field('gallery_tagline'); ?></div>
        </div>
    </div>

    <div class="container interior">
        <div class="row">
            <div class="col-sm-12">
                <a href="/gallery" class="back_link">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="link_text">Back to Albums</span>
                </a>
            </div>
        </div>
        <div class="row">
            <?php
            if( have_rows('gallery_images') ):
            while ( have_rows('gallery_images') ) : the_row();
            ?>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="gallery_img_wrap">
                    <div class="gallery_thumb">
                        <a href="<? the_sub_field('gallery_image'); ?>" class="gallery_img" rel="shadowbox[gallery]" style="background-image: url(<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_sub_field('gallery_image'); ?>&h=350&w=500&quality=1);">
                            <span class="flaticon-zoom75 zoom"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?
            endwhile;
            else :
                // no rows found
            endif;
            ?>
        </div>
    </div>
    <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

<? get_footer(); ?>