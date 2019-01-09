<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/video_page_header.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">videos</h1>
    </div>

    <div class="container interior">
    	<!--<div class="row">
    		<div class="col-sm-12">
    			</? echo do_shortcode('[srizonytalbum id=1]'); ?>
    		</div>
    	</div>-->
        <div class="row">
            <?
                query_posts( array(
                    'post_type' => 'videos',
                    'posts_per_page' => 999) );
                while (have_posts()) : the_post();
                    ?>
            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
                <div class="video_thumb_wrap">
                    <div class="video_thumb">
                        <a href="http://www.youtube.com/v/<? the_field('youtube_video_id'); ?>&amp;autoplay=1;" class="video_thumb" style="background-image: url(<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_field('video_thumb'); ?>&h=450&w=600&quality=1);" rel="shadowbox;width=853;height=480;" title="">
                            <span class="flaticon-play43 play"></span>
                        </a>
                    </div>
                    <div class="video_title">
                        <span><? the_title(); ?></span>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>

<? get_footer(); ?>