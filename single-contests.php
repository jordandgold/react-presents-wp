<? get_header(); ?>

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
                        <? the_content(); ?>
                    </div>
                </div>
            <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            <? get_sidebar(); ?>
        </div>
    </div>

<? get_footer(); ?>