<?php get_header(); ?>
</div>

<!-- Design -->
<section class="field">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 field-inner">
                <?php if (is_category('design')): ?>
                <h1>
                    <i class="fas fa-palette"></i> <?php single_cat_title(); ?>
                </h1>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<section id="design">
    <div class="container">
        <div class="row project-list">

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

            <div class="col-12 col-lg-4 col-md-6 inner">
                <div class="inner-content">

                    <?php
                        if ( has_post_thumbnail() ) {
                            ?>
                    <?php the_post_thumbnail(); ?>
                    <?php
                        }
                        ?>
                    <div class="bg-color d-none"></div>
                    <div class="back d-none">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="project-link"></a>
                </div>
            </div>
            <?php endwhile; else: ?>
            <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>

        </div>
    </div>
</section>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
