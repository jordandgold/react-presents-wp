<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>//img/events_page_header.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">Upcoming Events</h1>
    </div>

    <div class="container" style="margin-bottom: -20px;">
        <h2><span>Featured Events</span></h2>
        <div class="row">
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
    <div class="container">
        <h2><span>Upcoming Events</span></h2>
        <div class="row event_table_head">
            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">Date</div>
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-4">Event</div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-2">Venue</div>
            <div class="hidden-xs hidden-sm col-md-2 col-lg-2">City</div>
            <div class="hidden-xs hidden-sm col-md-1 col-lg-1">State</div>
            <div class="hidden-xs hidden-sm hidden-md col-lg-1">Age</div>
            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-sm-12">
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
                    'post_type' => 'events',
                    'meta_key' => 'event_date',
                    'orderby' => 'meta_value_num',
                    'posts_per_page' => 999,
                    'order' => 'ASC',
                    'paged' => $paged ) );
                while (have_posts()) : the_post();
                ?>
                <div class="event_item">
                    <div class="row">
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                            <div class="date">
                                <?
                                    $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
                                ?>
                                <span class="month"><? echo $date->format('M'); ?></span><br />
                                <span class="day"><? echo $date->format('d'); ?></span>
                            </div>
                        </div>
                        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-4 small_text"><? the_title(); ?></div>
                        <div class="hidden-xs hidden-sm hidden-md col-lg-2 small_text"><? the_field('venue'); ?></div>
                        <div class="hidden-xs hidden-sm col-md-1 col-lg-2 small_text"><? the_field('city'); ?></div>
                        <div class="hidden-xs hidden-sm col-md-1 col-lg-1 small_text"><? the_field('state'); ?></div>
                        <div class="hidden-xs hidden-sm hidden-md col-lg-1 small_text"><? the_field('age'); ?></div>
                        <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1"><a href="<? the_field('buy_tickets_url'); ?>" class="event_buy_tickets"><span class="flaticon-arrow621 event-arrow"></span></a></div>
                    </div>
                </div>
                <? endwhile; ?>
            </div>
        </div>
    </div>
<? get_footer(); ?>