<?php
/*
Template Name: Contact Page
*/
?>
<? get_header(); ?>

    <div class="interior_header" style="background-image: url(<? bloginfo('template_url'); ?>/img/slide_3.jpg);" data-0="background-position:0px 0px;" data-50000="background-position:0px -15000px;">
        <h1 data-0="top: 0px; opacity: 1.0;" data-300="top: -60px; opacity: 0.0;">contact us</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><span>artist submissions</span></h2>
                <div class="page_excerpt">
                    <p>React Presents has a long history of supporting local artists by giving them a stage to perform on.  We pride ourselves on fostering the local scene and are always on the lookout for budding talent. If you’re a regional artist and would like to open up one of our shows, <a href="https://docs.google.com/forms/d/1OYda6dBZ3n4embQHEYFJH-r22CpMVHYLeKX_nY-gXXs/viewform" target="_blank">please fill out this form</a>.</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 20px;">
            <div class="col-sm-12">
                <h2><span>general inquiries</span></h2>
                <div class="page_excerpt">
                    <p>If you’re interested in getting in touch with React Presents, please email the proper contact below. If you’re not sure where to direct your inquiry, please email info[at]reactpresents[dot]com. Please be as specific as possible when contacting React Presents.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-8">
                <!--<form role="form">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>-->
                <? echo do_shortcode('[contact-form-7 id="59" title="General Contact Form"]'); ?>
            </div>
            <div class="hidden-sm col-lg-offset-2"></div>
        </div>
    </div>

<? get_footer(); ?>