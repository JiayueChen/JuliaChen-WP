<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('widgetized-area')) : else : ?>

<!-- Working field -->
<section id="field">
    <div class="container">
        <div class="row">
            <!--
                <div class="col-md-4  col-sm-12 field-inner">
                    <h2>
                        <i class="fas fa-camera-retro"></i>
                    </h2>
                    <h3>photography</h3>
                    <p>I like to take photographs when it is the moment, then let the moment to be forever </p>
                    <a class="button" href="photography.html">
                        Explore <i class="fas fa-angle-right"></i>
                    </a>
                </div>
-->

            <?php
                $args = array (
                    'post_type'=> 'post',
                    'category_name'	=>	'project',
                    'orderby'          => 'meta_value',
                    'order'            => 'ASC',
                    'meta_key'         => '',

                );

                // run the custom query with the supplied arguments from above
                $myquery = new WP_Query( $args );

                // if there is information that match that criteria, run a loop
                if ( $myquery->have_posts() ) {
                    while ( $myquery->have_posts() ) {
                        $myquery->the_post();
                        ?>


            <div class="col-sm-4  col-xs-12 field-inner">
                <h2>
                    <?php if('Photography' == get_the_title()): ?>
                    <i class="fas fa-camera-retro"></i>
                    <?php elseif ('Design' == get_the_title()): ?>
                    <i class="fas fa-palette"></i>
                    <?php elseif ('Code' == get_the_title()): ?>
                    <i class="fas fa-keyboard"></i>
                    <?php elseif ('Motion Graphic' == get_the_title()): ?>
                    <i class="fas fa-hippo"></i>
                    <?php endif; ?>
                </h2>
                <h3><?php the_title(); ?></h3>
                <?php the_content(); ?>
                <?php 
                if('Photography' == get_the_title()) {
                    $cate = 'photography';
                } elseif ('Design' == get_the_title()) {
                    $cate = 'design';
                } elseif ('Code' == get_the_title()) {
                    $cate = 'code';
                } elseif ('Motion Graphic' == get_the_title()) {
                    $cate = 'motion';
                }
                $category_id = get_cat_ID($cate);
                $category_link = get_category_link($category_id); 
                ?>
                <a class="button" href="<?php echo esc_url( $category_link );
                        ?>">Explore <i class="fas fa-angle-right"></i></a>
            </div>

            <?php
                    }
                } else {
                    echo "<p>Error: Content not found.</p>";
                }
                wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
<?php endif; ?>
