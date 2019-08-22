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
            <div class="col-12 col-md-6 video-container">
                <?php
                
                // get only video
                $content = get_the_content();
                $content_video = apply_filters( 'the_content', $content );
                $video_media = get_media_embedded_in_content( $content_video );
                echo $video_media[0];
                
                
                // use block to seprate content
                $blocks = parse_blocks($content);
                // echo '<pre>';
                // print_r($blocks);
                // echo '</pre>';
                
                
                // get the content with out video
                $content_markup = '';
                foreach ( $blocks as $block ) {
                    if ( 'core/paragraph' === $block['blockName'] ) {
                        $content_markup .= do_shortcode( $block['innerHTML'] );
                        
                    }
                }
      
                ?>
            </div>
            <div class="col-12 col-md-6">
                <h3><?php the_title();?></h3>

                <?php echo apply_filters( 'the_content', $content_markup );
            ?>


            </div>
        </div>
        <?php endwhile; else: ?>
        <?php _e('Sorry, no posts matched your criteria.'); ?>
        <?php endif; ?>
    </div>
</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
