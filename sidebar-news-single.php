<div id="sidebar" class="col-lg-4 col-md-4 col-sm-12">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h2><span>Related Articles</span></h2>
            <ul class="video_widget">
                <?php
                //for use in the loop, list 5 post titles related to first tag on current post
                $tags = wp_get_post_tags($post->ID);
                if ($tags) {
                    $first_tag = $tags[0]->term_id;
                    $args=array(
                        'tag__in' => array($first_tag),
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>5,
                        'caller_get_posts'=>1
                    );
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) : $my_query->the_post(); ?>
                            <li>
                                <div class="row no-gutters">
                                    <div class="col-sm-2 col-xs-2 col-md-3 col-lg-3">
                                        <a href="#" class="thumbnail video">
                                            <img src="<? bloginfo('template_url'); ?>/javascripts/timthumb.php?src=<? the_field('news_image'); ?>&h=200&w=200" width="200" height="200" alt="Hello">
                                        </a>
                                    </div>
                                    <div class="col-sm-9 col-xs-9">
                                        <a href="#"><h4 class="video_title"><? the_title(); ?></h4></a>
                                        <div class="video_meta"><? the_excerpt(); ?></div>
                                    </div>
                                </div>
                            </li>
                        <?php
                        endwhile;
                    }
                    wp_reset_query();
                }
                ?>
            </ul>
        </div>
    </div>
</div>