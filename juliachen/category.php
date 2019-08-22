<?php get_header(); ?>
</div>
<section class="field">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 field-inner">
                <h1>
                    <i class="fas fa-keyboard"></i> <?php single_cat_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Project -->
<section id="web" class="row-style">
    <div class="container">
        <!-- run the standard loop -->
        <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

        <div class="row">
            <div class="col-12 col-md-6">
                <?php
                // check if the post has a featured image assigned to it and display the image if it does
                if ( has_post_thumbnail() ) {
                            ?>
                <?php the_post_thumbnail(); ?>
                <?php
                        }
                        ?>

                <!--                <img src="images/imm.png" alt="IMM client project">-->
            </div>
            <div class="col-12 col-md-6">
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <a href="<?php the_permalink(); ?>" target="_blank" class="button">view the site</a>
            </div>
        </div>
        <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
    </div>
</section>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
