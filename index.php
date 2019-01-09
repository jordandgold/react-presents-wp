<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/news_page_header.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">News</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2><span>Latest News</span></h2>
                <div class="row">
                    <div id="news_grid">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="news_item col-lg-6 col-md-6 col-sm-6">
                            <div class="thumb">
                                <div class="news_share">
                                    <a class="fb" href="https://www.facebook.com/sharer/sharer.php?u=<? the_permalink(); ?>"><span class="flaticon-facebook31 news-social"></span></a>
                                    <a class="twitter" href="https://twitter.com/home?status=<? the_title(); ?>%20-%20<? the_permalink(); ?>"><span class="flaticon-social19 news-social"></span></a>
                                </div>
                                <a href="<? the_permalink(); ?>" class="background" style="background-image: url(<? the_field('news_image'); ?>);">
                                    &nbsp;
                                </a>
                            </div>
                            <div class="excerpt">
                                <div class="meta">
                                    <div class="date">
                                        <span class="month"><?php the_time('M'); ?></span><br />
                                        <span class="day"><?php the_time('d'); ?></span>
                                    </div>
                                    <h3 class="title"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h3>
                                    <div class="clear"></div>
                                </div>
                                <? the_excerpt(); ?>
                            </div>
                            <a href="<? the_permalink(); ?>" class="read_more">
                                Read More
                                <span class="flaticon-arrow621 right-arrow"></span>
                            </a>
                        </div>
                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 columns">
                        <?php if (function_exists("pagination")) {
                            pagination();
                        } ?>
                    </div>
                </div>
            </div>
            <? get_sidebar(); ?>
        </div>
    </div>

<? get_footer(); ?>