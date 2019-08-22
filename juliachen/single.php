<?php get_header(); ?>
</div>
<div class="container">
    <!-- run the standard loop -->
    <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

    <div class="row">
        <div class="col-12">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p class="pub-data">Posted on <?php the_date(); ?></p>
        </div>
        <div class="col-12">
            <?php the_content(); ?>
        </div>
    </div>
    <?php endwhile; else: ?>
    <?php _e('Sorry, no posts matched your criteria.'); ?>
    <?php endif; ?>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
