<?php get_header(); ?>

<div class="row">

    <div class="col-lg-12">


        <div class="subpage-banner"><img src="<?php bloginfo('template_url'); ?>/images/sub-banner.jpg" width="1004"
                                         height="214" alt=""/></div>


        <div class="hm-properties">


            <div class="naksh-aboutus">

                <h2><?= the_title(); ?></h2>

                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>


            </div>


        </div>


        <?php get_footer(); ?>

