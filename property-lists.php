<?php
/*
Template Name: Property-list
*/
?>
<?php get_header(); ?>



<div class="row">

    <div class="col-lg-12">


        <div class="subpage-banner"><img src="<?php bloginfo('template_url'); ?>/images/sub-banner.jpg" width="1004"
                                         height="214" alt=""/></div>


        <div class="hm-properties">
            <div class="naks-search">
                <h1>Find your Property</h1>

                <?php get_search_form(); ?>


            </div>

            <div class="naksh-aboutus">

                <?php hotProperties(); ?>

            </div>


        </div>


        <?php get_footer(); ?>

