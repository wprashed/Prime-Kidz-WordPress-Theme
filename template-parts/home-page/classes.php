<!-- Classes Section -->
<section class="classes-section">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="icon-1 icon-star-2"></span>
            <span class="icon-2 doll-4"></span>
            <h2><span class="text-orange">Our</span> Courses</h2>
        </div>

        <div class="row clearfix">
            <?php query_posts( array(
                'post_type' => 'Course',
                'post_per_page' => 4,
              )); 
            ?>
            <?php while (have_posts()) : the_post(); ?>
            <!-- Class Block -->
            <div class="class-block col-md-3 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="image-box crs"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="lower-content">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p>Starts 
                            <?php
                                if ( get_field( "start_date" ) ) {
                                    echo do_shortcode( get_field( "start_date" ) );
                                }
                            ?>
                        </p>
                        <div class="rating">
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                            <span class="icon icon-star"></span>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-one">Learn More</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- End Classes Section -->