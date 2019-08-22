<?php get_header() ?>
<main class="container">
    <div class="row">
        <div class="col-md-8 col-sm-12 m-auto">
            <h1 class="ml11">
                <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">I'm Julia Chen</span>
                </span>
            </h1>
            <p><?php bloginfo('description'); ?></p>
            <?php query_posts('pagename=home');
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- add portfolio description -->
            <?php the_content();?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <!--<p>
    Master in web design, Experienced in web Development, more in front-end develop. Create WordPress theme and modify shopify Fluid template. skilled with Adobe design tools Ps, Ai, Id Pr, Ae, An.
</p>-->
        </div>
        <div class="col-md-4 col-sm-4 julia-img">
            <?php query_posts('pagename=home');
            if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <!-- add portfolio image -->
            <?php if ( has_post_thumbnail() ) { ?>
            <?php the_post_thumbnail(); ?>
            <?php } ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</main>
</div>

<!-- About -->
<section id="about">
    <div id="about-me"></div>
    <div class="container">
        <div class="row">

            <?php query_posts('pagename=about');
                    if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div class="col-md-7 col-sm-12 about-content">

                <h2><?php the_title(); ?></h2>
                <div class="discription">
                    <?php the_content();?>
                </div>
                <a class="button" href="<?php bloginfo( 'template_url' ); ?>/asset/Resume_Julia.pdf" target="_blank">View my resume <i class="fas fa-angle-right"></i></a>



            </div>
            <div class="col-md-5 col-sm-12 about-img">
                <?php if ( has_post_thumbnail() ) { ?>
                <?php the_post_thumbnail(); ?>
                <?php } ?>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>

<?php get_sidebar(); ?>

<section id="contact">
    <div id="contact-me"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Contact</h2>
                <p>if you are interested in my work, contact me.</p>
            </div>
            <div class="col-md-6 col-sm-12 contact-me">
                <div class="contact-list email">
                    <span><i class="fas fa-signature"></i></span>
                    <h3>Email</h3>
                    <p>
                        <a href="mailto:<?php bloginfo('admin_email'); ?>"><?php bloginfo('admin_email'); ?></a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 contact-me">
                <div class="contact-list">
                    <span><i class="fas fa-cocktail"></i></span>
                    <h3>Location</h3>
                    <p>Ottawa, Onatrio, Canada</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
