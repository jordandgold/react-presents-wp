<?php
/*
Template Name: About Page
*/
?>
<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/about_page_header.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">about us</h1>
    </div>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><span>About React Presents</span></h2>
                <div class="page_excerpt">
                    <? the_content(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <h2><span>facebook</span></h2>
                <div class="fb-like-box" data-href="https://www.facebook.com/reactpresents" data-width="330px" data-height="450px" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <h2><span>twitter</span></h2>
                <a class="twitter-timeline" href="https://twitter.com/reactpresents" data-widget-id="550050064526495746">Tweets by @reactpresents</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
                <h2><span>instagram</span></h2>
                <!-- INSTANSIVE WIDGET --><script src="//instansive.com/widget/js/instansive.js"></script><iframe src="//instansive.com/widgets/324cb3a8227a684c26318edf3a9634f45ee88013.html" id="instansive_324cb3a822" name="instansive_324cb3a822"  scrolling="no" allowtransparency="true" class="instansive-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<? get_footer(); ?>