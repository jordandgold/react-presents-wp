<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/gallery_page_header.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">gallery</h1>
    </div>

    <div class="container interior">
        <div class="row">
            <?php query_posts(array('post_type' => 'gallery', 'post__not_in' => array(99)));
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="gallery_album">
                        <div class="gallery_thumb">
                            <div class="gallery_title">
                                <? the_title(); ?>
                            </div>
                            <a href="<? the_permalink(); ?>" class="background" style="background-image: url(<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_field('album_cover'); ?>&h=450&w=600&quality=1);">
                                &nbsp;
                            </a>
                        </div>
                        <a class="view_album" href="<? the_permalink(); ?>">
                            View Album
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </div>
    </div>

<? get_footer(); ?>