<?php
/**
 * Created by PhpStorm.
 * User: jomon
 * Date: 13/5/15
 * Time: 9:48 PM
 */
//Enabling Support for Post Thumbnails ->Featured image
add_theme_support('post-thumbnails');
// Adding html5 search form
add_theme_support('html5', array('search-form'));

//  Register custom navigation menu
function register_nakshathra_menu()
{
    register_nav_menu('nakshathra-header-menu', __('Nakshathra Header Menu'));
}

add_action('init', 'register_nakshathra_menu');

function hotProperties($more = true)
{
    $args = array('numberposts' => 10,  /* get 4 posts, or set -1 for all */
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => 'property',
    );
    $myposts = get_posts($args);
//    print_r($myposts);


    ?>
    <h2>HOT Properties</h2>
    <div class="hm-property-outer">
        <?php

        foreach ($myposts as $mypost) {
            /* do things here */
            ?>
            <a href="<?= $mypost->guid ?>">
                <div class="hm-property-thump"><img src="<?= joImageUrl($mypost->ID) ?>" width="153"
                                                    height="101" alt=""/>

                    <div
                        class="txt"><?= joGet_excerpt($mypost->post_title . ' ' . $mypost->post_content, $mypost->url) ?></div>
                </div>
            </a>
        <?php
        }
        ?>
    </div>
    <?php
    if ($more) {

        ?>
        <button type="button" class="btn btn-success">VIEW MORE PROPERTIES</button>
    <?php
    }
//    echo '<h1>JMJ</h1>';
}


/*
 * Limit your content
 */
function joGet_excerpt($content, $permalink, $count = 100)
{
    $excerpt = strip_tags($content);
    $excerpt = substr($excerpt, 0, $count);
    $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
    $excerpt = $excerpt . '...';// <a href="' . $permalink . '">more</a>';
    return $excerpt;
}

function joImageUrl($post_id, $size = 'thumbnail_size')
{

    $src = wp_get_attachment_image_src(get_post_thumbnail_id($post_id), $size);
    return $src[0];

}

function jo_search_form($form)
{
    $form = '
            <form role="search" method="get" id="searchform" class="searchform" action="' . home_url('/') . '" >
            <div class="col-lg-6 col-xs-offset-2">
            <input name="s" type="text" value="' . get_search_query() . '" class="form-control" id="exampleInputPassword1" placeholder="Search">
            </div>
            <div class="col-lg-4">
            <button type="submit" class="btn btn-success btn-lg">SEARCH</button>
            </div>

            </form>';
    return $form;
}

add_filter('get_search_form', 'jo_search_form');


function joCustomMenuItems()
{
    // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
    // This code based on wp_nav_menu's code to get Menu ID from menu slug
    /*
                                            $menu_name = 'nakshathra-header-menu';

                                            if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {
                                                $menu = wp_get_nav_menu_object($locations[$menu_name]);
                                                $menu_items = wp_get_nav_menu_items($menu->term_id);

                                                print_r($menu_items);
                                                $menu_list = '<ul id="menu-' . $menu_name . '" class=" nav navbar-nav navbar-right">';
                                                foreach ($menu_items as $menu_item) {
                                                    /*
                                                     [post_title] => Home
                                                        [post_excerpt] =>
                                                        [post_status] => publish
                                                        [comment_status] => open
                                                        [ping_status] => open
                                                        [post_password] =>
                                                        [post_name] => home
                                                        [to_ping] =>
                                                        [pinged] =>
                                                        [post_modified] => 2015-05-14 01:56:33
                                                        [post_modified_gmt] => 2015-05-14 01:56:33
                                                        [post_content_filtered] =>
                                                        [post_parent] => 0
                                                        [guid] => http://127.0.0.1/wp/?p=39
                                                        [url] => http://127.0.0.1/wp/

    //                                                print_r($menu_item);
    //                                                wp_die('');
                                                    if ($menu_item->post_status == 'open') {
                                                        $menu_list .= '<li><a href="' . $menu_item->url . '">' . $menu_item->post_title . '</a></li>';
                                                    }
                                                }
                                                $menu_list .= '</ul>';
                                            } else {
                                                $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
                                            }
                                            */
    // $menu_list now ready to output
    /*
    wp_nav_menu(array(
        'theme_location' => 'nakshathra-header-menu',

        "container" => 'ul',
        'container_class' => 'nav navbar-nav navbar-right'

    ));
    */
}
