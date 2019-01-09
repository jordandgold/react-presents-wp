<?php
/*
Template Name: Festival Page
*/
?>
<? include('header.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="slideshow" style="display: none">
        <div class="container-fluid">
            <!--<div class="slider">
                <div><img src="img/slide_reactionnye.jpg" width="1000" height="350" alt="" /></div>
                <div><img src="img/slide_reactionnye.jpg" width="1000" height="350" alt="" /></div>
            </div>-->
            <div id="slider4">
                <div class="skw-slide" data-bg="img/slide_reactionnye.jpg"></div>
                <div class="skw-slide" data-bg="img/slide_reactionnye.jpg"></div>
                <div class="skw-slide" data-bg="img/slide_reactionnye.jpg"></div>
            </div>
        </div>
    </div>

    <div class="interior_header" style="background-image: url(<? echo the_field('page_header_background'); ?>);" data-0="background-position:0px 0px;" data-50000="background-position:0px -10000px;">
        <div class="festival_logo_centered" data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">
            <img src="<? echo the_field('festival_logo'); ?>" alt="Spring Awakening Music Festival">
        </div>
    </div>

    <div class="container">
        <h2><span><? the_title(); ?></span></h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="page_excerpt">
                    <? the_content(); ?>
                </div>
                <div class="gray_box social_block">
                    <ul class="list-inline festival_socials float_left">
                        <li><a href="<? the_field('facebook_url'); ?>"><i class="flaticon-facebook31 festival"></i></a></li>
                        <li><a href="<? the_field('twitter_url'); ?>"><i class="flaticon-social19 festival"></i></a></li>
                        <li><a href="<? the_field('instagram_url'); ?>"><i class="flaticon-instagram12 festival"></i></a></li>
                        <li><a href="<? the_field('youtube_url'); ?>"><i class="flaticon-youtube3 festival"></i></a></li>
                    </ul>
                    <a href="<? the_field('website_url'); ?>" class="button float_right">Visit Offical Festival Website</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2><span>2014 Video</span></h2>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/v/<? echo the_field('youtube_video_id'); ?>"></iframe>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2><span>Gallery</span></h2>
            </div>
        </div>
        <div class="row">
            <?
            if( have_rows('gallery') ):
            while ( have_rows('gallery') ) : the_row();
            ?>
            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
                <div class="gallery_img_wrap">
                    <div class="gallery_thumb">
                        <a href="<? the_sub_field('gallery_image'); ?>" rel="shadowbox[gallery]" class="gallery_img" style="background-image: url(<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_sub_field('gallery_image'); ?>&h=350&w=500&quality=1);">
                            <span class="flaticon-zoom75 zoom"></span>
                        </a>
                    </div>
                </div>
            </div>
            <?
            endwhile;
            else :
            ?>
            <div class="col-sm-12">
                No Gallery Images to Display
            </div>
            <?
            endif;
            ?>
        </div>
    </div>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<? include('footer.php'); ?>