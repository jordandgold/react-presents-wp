<? get_header(); ?>

    <!--<div class="interior_header" style="background-image: url(<? the_field('news_image'); ?>);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
    </div>-->

    <div class="container">
        <div class="row">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2 class="news_title"><? the_title(); ?></h2>
                <div class="news_meta">
                    <div class="date">
                        <span class="month"><?php the_time('M'); ?></span><br />
                        <span class="day"><?php the_time('d'); ?></span>
                    </div>
                    <div class="news_meta_content">
                        <span><?php the_time('F j, Y'); ?> &middot; by Zach</span><br />
                        <? echo get_the_tag_list('<p>',', ','</p>'); ?>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="news_content">
                    <div class="thumb">
                        <div class="news_share_single">
                            <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<? the_permalink(); ?>"><span class="flaticon-facebook31 news-social"></span></a>
                            <a class="twitter" href="https://twitter.com/home?status=<? the_title(); ?>%20-%20<? the_permalink(); ?>"><span class="flaticon-social19 news-social"></span></a>
                        </div>
                        <img src="<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_field('news_image'); ?>&w=750&quality=1" width="" height="" alt="<? the_title(); ?>" /></p>
                    </div>
                    <? the_content(); ?>
                </div>
            </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <? get_sidebar('news-single'); ?>
        </div>
    </div>

<? get_footer(); ?>