<?

function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2)+1;

    global $paged;
    if(empty($paged)) $paged = 1;

    if($pages == '')
    {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }

    if(1 != $pages)
    {
        echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

        for ($i=1; $i <= $pages; $i++)
        {
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
            {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }

        if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
        echo "</div>\n";
    }
}

add_action('init', 'cptui_register_my_cpt_events');
function cptui_register_my_cpt_events() {
    register_post_type('events', array(
        'label' => 'Events',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'events', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Events',
            'singular_name' => 'Event',
            'menu_name' => 'Events',
            'add_new' => 'Add Event',
            'add_new_item' => 'Add New Event',
            'edit' => 'Edit',
            'edit_item' => 'Edit Event',
            'new_item' => 'New Event',
            'view' => 'View Event',
            'view_item' => 'View Event',
            'search_items' => 'Search Events',
            'not_found' => 'No Events Found',
            'not_found_in_trash' => 'No Events Found in Trash',
            'parent' => 'Parent Event',
        )
    ) );

    flush_rewrite_rules();
}

add_action('init', 'cptui_register_my_cpt_featured_events');
function cptui_register_my_cpt_featured_events() {
    register_post_type('featured_events', array(
        'label' => 'Featured Events',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'featured_events', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Featured Events',
            'singular_name' => 'Featured Event',
            'menu_name' => 'Featured Events',
            'add_new' => 'Add Featured Event',
            'add_new_item' => 'Add New Featured Event',
            'edit' => 'Edit',
            'edit_item' => 'Edit Featured Event',
            'new_item' => 'New Featured Event',
            'view' => 'View Featured Event',
            'view_item' => 'View Featured Event',
            'search_items' => 'Search Featured Events',
            'not_found' => 'No Featured Events Found',
            'not_found_in_trash' => 'No Featured Events Found in Trash',
            'parent' => 'Parent Featured Event',
        )
    ) );

    flush_rewrite_rules();
}

add_action('init', 'cptui_register_my_cpt_slideshow');
function cptui_register_my_cpt_slideshow() {
    register_post_type('slideshow', array(
        'label' => 'Slideshow',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'slideshow', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Slideshow',
            'singular_name' => 'Slide',
            'menu_name' => 'Slideshow',
            'add_new' => 'Add Slide',
            'add_new_item' => 'Add New Slide',
            'edit' => 'Edit',
            'edit_item' => 'Edit Slide',
            'new_item' => 'New Slide',
            'view' => 'View Slide',
            'view_item' => 'View Slide',
            'search_items' => 'Search Slideshow',
            'not_found' => 'No Slideshow Found',
            'not_found_in_trash' => 'No Slideshow Found in Trash',
            'parent' => 'Parent Slide',
        )
    ) );

    flush_rewrite_rules();
}

add_action('init', 'cptui_register_my_cpt_gallery');
function cptui_register_my_cpt_gallery() {
    register_post_type('gallery', array(
        'label' => 'Gallery',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'gallery', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Gallery',
            'singular_name' => 'Gallery',
            'menu_name' => 'Gallery',
            'add_new' => 'Add Gallery',
            'add_new_item' => 'Add New Gallery',
            'edit' => 'Edit',
            'edit_item' => 'Edit Gallery',
            'new_item' => 'New Gallery',
            'view' => 'View Gallery',
            'view_item' => 'View Gallery',
            'search_items' => 'Search Gallery',
            'not_found' => 'No Gallery Found',
            'not_found_in_trash' => 'No Gallery Found in Trash',
            'parent' => 'Parent Gallery',
        )
    ) );

    flush_rewrite_rules();
}

add_action('init', 'cptui_register_my_cpt_videos');
function cptui_register_my_cpt_videos() {
    register_post_type('videos', array(
        'label' => 'Videos',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'videos', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Videos',
            'singular_name' => 'Video',
            'menu_name' => 'Videos',
            'add_new' => 'Add Video',
            'add_new_item' => 'Add New Video',
            'edit' => 'Edit',
            'edit_item' => 'Edit Video',
            'new_item' => 'New Video',
            'view' => 'View Video',
            'view_item' => 'View Video',
            'search_items' => 'Search Videos',
            'not_found' => 'No Videos Found',
            'not_found_in_trash' => 'No Videos Found in Trash',
            'parent' => 'Parent Video',
        )
    ) );

    flush_rewrite_rules();
}

add_action('init', 'cptui_register_my_cpt_contests');
function cptui_register_my_cpt_contests() {
    register_post_type('contests', array(
        'label' => 'Contests',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'contests', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','excerpt','trackbacks','custom-fields','comments','revisions','thumbnail','author','page-attributes','post-formats'),
        'labels' => array (
            'name' => 'Contests',
            'singular_name' => 'Contest',
            'menu_name' => 'Contests',
            'add_new' => 'Add Contest',
            'add_new_item' => 'Add New Contest',
            'edit' => 'Edit',
            'edit_item' => 'Edit Contest',
            'new_item' => 'New Contest',
            'view' => 'View Contest',
            'view_item' => 'View Contest',
            'search_items' => 'Search Contests',
            'not_found' => 'No Contests Found',
            'not_found_in_trash' => 'No Contests Found in Trash',
            'parent' => 'Parent Contest',
        )
    ) );

    flush_rewrite_rules();
}