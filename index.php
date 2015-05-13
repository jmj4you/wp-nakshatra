<?php get_header(); ?>
<div class="row">
    <div class="col-lg-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"><img src="<?php bloginfo('template_url'); ?>/images/slide_01.jpg" alt="...">
                </div>
                <div class="item"><img src="<?php bloginfo('template_url'); ?>/images/slide_01.jpg" alt="..."></div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <span
                    class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control"
                                                                             href="#carousel-example-generic"
                                                                             role="button" data-slide="next"> <span
                    class="glyphicon glyphicon-chevron-right"></span> </a></div>
        <div class="naks-search">
            <h1>Find your Property</h1>

            <?php get_search_form(); ?>


        </div>
        <div class="hm-welcome">
            <h2>Welcome to nakshathra</h2>
            <!--<p>nakshathra Pvt. Ltd., is country's leading portal in the online real estate space. Launched in 2006, nakshathra.com offers one-stop property marketing solutions serving builders, real estate agents and home owners to sell or rent their properties, while offering a feature rich interface for property buyers to search and identify properties that match their requirement. India Property has pioneered several innovations such as Assisted Property -India's first online assisted property search
              service, Gruhapravesh - India's first series of virtual and offline property shows and India's first augmented reality
              based Real Estate Mobile Application amongst others.</p>
              -->
            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>


            <button type="button" class="btn btn-success">READ MORE</button>
        </div>
        <div class="hm-properties">
            <?php hotProperties(); ?>
        </div>
        <?php get_footer(); ?>
