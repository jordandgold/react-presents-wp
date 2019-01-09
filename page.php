<? include('header.php'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<div class="container">
        <h2><span><? the_title(); ?></span></h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="page_excerpt">
                    <? the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; else : ?>
<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<? include('footer.php'); ?>