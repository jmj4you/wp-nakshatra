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
function hotProperties()
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

            <div class="hm-property-thump"><img src="<?= joImageUrl($mypost->ID) ?>" width="153"
                                                height="101" alt=""/>

                <div
                    class="txt"><?= joGet_excerpt($mypost->post_title . ' ' . $mypost->post_content, $mypost->guid) ?></div>
            </div>
        <?php
        }
        ?>
    </div>
    <button type="button" class="btn btn-success">VIEW MORE PROPERTIES</button>

<?php
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
    $excerpt = $excerpt . '... <a href="' . $permalink . '">more</a>';
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