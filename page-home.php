<? get_header(); ?>

    <div class="slideshow">
        <div id="slider4">
            <?
            $currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")));
            query_posts( array(
                'meta_query'=> array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>',
                        'value' => $currentdate,
                        'type' => 'DATE',
                    )),
                'post_type' => 'slideshow',
                'meta_key' => 'event_date',
                'posts_per_page' => 5,
                'order' => 'DESC' ) );
            while (have_posts()) : the_post();
            ?>
            <div class="skw-slide" data-bg="<? the_field('slide_image'); ?>">
                <div class="caption">
                    <h3 class="slide_title">&nbsp;</h3>
                    <?
                    if( have_rows('buttons') ): ?>
                    <div class="button_group">
                        <div class="button_container">
                        <?
                        while ( have_rows('buttons') ) : the_row();
                        ?>
                            <a href="<? the_sub_field('button_url'); ?>" class="caption_button">
                                <? the_sub_field('button_text'); ?>
                                <span class="flaticon-arrow621 right-arrow"></span>
                            </a>
                    <?
                    endwhile;
                    ?>
                        </div>
                    </div>
                    <?
                    else :
                        // no rows found
                    endif;
                    ?>
                </div>
            </div>
            <? endwhile; ?>
        </div>
    </div>
    <div class="container">
        <div class="h2_container">
            <h2><span>Upcoming Events</span></h2>
            <a href="/events" class="button_arrow header_button">
                View All Events
                <span class="flaticon-arrow621 right-arrow"></span>
            </a>
        </div>
        <div class="row" style="overflow-x: hidden;">
            <div class="upcoming-events col-sm-12">
                <?

                //
                // LOOP THROUGH FEATURED EVENTS
                //

                $currentdate = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-1,date("Y")));

                if ( get_query_var('paged') ) {
                    $paged = get_query_var('paged');
                } else if ( get_query_var('page') ) {
                    $paged = get_query_var('page');
                } else {
                    $paged = 1;
                }
                query_posts( array(
                    'meta_query'=> array(
                        array(
                            'key' => 'event_date',
                            'compare' => '>',
                            'value' => $currentdate,
                            'type' => 'DATE',
                        )),
                    'post_type' => 'featured_events',
                    'meta_key' => 'event_date',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 12,
                    'order' => 'ASC',
                    'paged' => $paged ) );
                while (have_posts()) : the_post();
                ?>
                <div class="event col-lg-3 col-sm-6">
                    <div class="date">
                        <?
                        $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
                        ?>
                        <span class="month"><? echo $date->format('M'); ?></span><br />
                        <span class="day"><? echo $date->format('d'); ?></span>
                    </div>
                    <div class="caption">
                        <span class="artists"><? the_title(); ?></span><br />
                        <span class="venue"><? the_field('venue'); ?></span>
                        <a class="buy_tickets button" href="<? the_field('buy_tickets_url'); ?>">
                            Buy Tickets
                            <span class="flaticon-arrow621 right-arrow"></span>
                        </a>
                    </div>
                    <a href="<? the_field('buy_tickets_url'); ?>" class="background"  style="background-image: url(<? the_field('flyer_image'); ?>);">
                        &nbsp;
                    </a>
                </div>
                <? endwhile; ?>
            </div>
        </div>
    </div>
    <div class="gray_box">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="/festivals/spring-awakening-music-festival" class="festival_box">
                        <h5><img src="<? bloginfo('template_url'); ?>/img/samf_logo.png" width="120" height="" alt="" /></h5>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="/festivals/north-coast-music-festival" class="festival_box">
                        <h5><img src="<? bloginfo('template_url'); ?>/img/ncmf_logo_lg.png" width="100" height="" alt="" /></h5>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="/festivals/summer-set-music-festival" class="festival_box">
                        <h5><img src="<? bloginfo('template_url'); ?>/img/ssmf_logo.png" width="150" height="" alt="" /></h5>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <a href="/festivals/freaky-deaky" class="festival_box">
                        <h5><img src="<? bloginfo('template_url'); ?>/img/freaky_deaky_logo.png" width="170" height="" alt="" /></h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="h2_container">
                    <h2><span>Latest News</span></h2>
                    <a href="/news" class="button_arrow header_button">
                        View All News
                        <span class="flaticon-arrow621 right-arrow"></span>
                    </a>
                </div>
                <?php
                $inc = 1;
                $the_query = new WP_Query();
                $the_query->query("posts_per_page=4");
                if ($the_query->have_posts()) :
                    while($the_query->have_posts()) : $the_query->the_post();
                        if($inc == 1){
                            ?>
                            <div class="row">
                                <div class="news_item col-lg-12 col-md-12 col-sm-12">
                                    <div class="thumb full">
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
                                            <h3 class="title large"><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h3>
                                            <div class="clear"></div>
                                        </div>
                                        <? the_excerpt(); ?>
                                    </div>
                                    <a class="read_more" href="<? the_permalink(); ?>">
                                        Read More
                                        <span class="flaticon-arrow621 right-arrow"></span>
                                    </a>
                                </div>
                            </div>
                        <?
                        }

                        $inc++; //counter
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
                <div class="row">
                    <div id="news_grid">
                <?php
                $incx = 1;
                $the_restquery = new WP_Query();
                $the_restquery->query("posts_per_page=5");
                if ($the_restquery->have_posts()) :
                    while($the_restquery->have_posts()) : $the_restquery->the_post();
                        if( $incx !== 1){
                            ?>
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
                        <?
                        }

                        $incx++; //counter
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

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