<?php get_header(); ?>

<div class="row">

    <div class="col-lg-12">


        <div class="subpage-banner"><img src="<?php bloginfo('template_url'); ?>/images/sub-banner.jpg" width="1004"
                                         height="214" alt=""/></div>


        <div class="hm-properties">


            <div class="naksh-aboutus">

                <h2>Search results</h2>
                <?php
                global $query_string;

                $query_args = explode("&", $query_string);
                $search_query = array();

                foreach ($query_args as $key => $string) {
                    $query_split = explode("=", $string);
                    $search_query[$query_split[0]] = urldecode($query_split[1]);
                }

                $search = new WP_Query($search_query);
                $myposts = $search->posts;
                //print_r($myposts);

                ?>
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

            </div>


        </div>


        <?php get_footer(); ?>
