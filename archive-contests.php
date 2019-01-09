<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/slide_3.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">Contests</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <h2><span>Current Contest</span></h2>
                <?php
                $inc = 1;
                $the_query = new WP_Query();
                $the_query->query("posts_per_page=4&post_type=contests");
                if ($the_query->have_posts()) :
                    while($the_query->have_posts()) : $the_query->the_post();
                        if($inc == 1){
                            ?>
                            <div class="row">
                                <div class="news_item col-lg-12 col-md-12 col-sm-12">
                                    <div class="thumb full">
                                        <div class="background" style="background-image: url(<? the_field('contest_image'); ?>);">
                                            &nbsp;
                                        </div>
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
                                        View Contest
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
                    <div class="col-sm-12">
                        <h2><span>Past Contests</span></h2>
                    </div>
                </div>
                <div class="row">
                    <div id="news_grid">
                        <?php
                        $incx = 1;
                        $the_restquery = new WP_Query();
                        $the_restquery->query("posts_per_page=4&post_type=contests");
                        if ($the_restquery->have_posts()) :
                            while($the_restquery->have_posts()) : $the_restquery->the_post();
                                if( $incx !== 1){
                                    ?>
                                    <div class="news_item col-lg-6 col-md-6 col-sm-6">
                                        <div class="thumb">
                                            <div class="background" style="background-image: url(<? the_field('contest_image'); ?>);">
                                                &nbsp;
                                            </div>
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
                    </div>
                </div>
            </div>
            <? get_sidebar(); ?>
        </div>
    </div>

<? get_footer(); ?>