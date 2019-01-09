<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
            <h2><span>Videos</span></h2>
            <ul class="video_widget">
                <?
                query_posts( array(
                    'post_type' => 'videos',
                    'posts_per_page' => 3,
                    'order' => 'DESC' ) );
                while (have_posts()) : the_post();
                ?>
                <li>
                    <div class="row no-gutters">
                        <div class="col-sm-3 col-xs-3">
                            <a href="http://www.youtube.com/v/<? the_field('youtube_video_id'); ?>&amp;autoplay=1;" rel="shadowbox;width=853;height=480;" class="thumbnail video">
                                <img src="<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_field('video_thumb'); ?>&h=200&w=200" width="200" height="200" alt="<? the_title(); ?>">
                            </a>
                        </div>
                        <div class="col-sm-9 col-xs-9">
                            <a href="http://www.youtube.com/v/<? the_field('youtube_video_id'); ?>&amp;autoplay=1;" rel="shadowbox;width=853;height=480;"><h4 class="video_title"><? the_title(); ?></h4></a>
                            <div class="video_meta"><? the_content(); ?></div>
                        </div>
                    </div>
                </li>
                <? endwhile; ?>
            </ul>
            <?// echo do_shortcode('[youtube video=http://youtu.be/5GsrHbqd59Q]'); ?>
            <a class="view_all" href="/videos">
                View All Videos
                <span class="flaticon-arrow621 right-arrow"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12" style="display: none;">
            <h2><span>Gallery</span></h2>
            <div class="row gallery_widget">
                <?
                query_posts( array(
                    'post_type' => 'gallery',
                    'posts_per_page' => 1,
                    'p' => 99 ) );
                while (have_posts()) : the_post();
                ?>
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('gallery_images') ):

                        // loop through the rows of data
                        while ( have_rows('gallery_images') ) : the_row();

                            ?>

                            <div class="col-xs-4 col-md-4">
                                <a href="<? the_sub_field('gallery_image'); ?>" class="thumbnail" rel="shadowbox[gallery]">
                                    <img src="<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_sub_field('gallery_image'); ?>&h=200&w=200&quality=1" width="200" height="200" alt="Hello">
                                </a>
                            </div>

                        <?

                        endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                <? endwhile; ?>
            </div>
            <a class="view_all" href="/gallery">
                View All Galleries
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
            <h2><span>Gallery</span></h2>
            <div class="gallery_widget">
                <!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/beaed910726714be999dec31276320acef26f46b.html" id="instansive_beaed91072" name="instansive_beaed91072"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>
            <a class="view_all" href="/gallery">
                View All Galleries
                <span class="flaticon-arrow621 right-arrow"></span>
            </a>
        </div>
    </div>
</div>