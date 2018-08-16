<?php 
/* Template Name: Course Template */
the_post();
get_header();
?>
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower-1"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Our Courses</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li>Our Courses</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Courses Section -->
    <section class="courses-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h2>Get your to enroll in our courses</h2>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
            </div>
            
            <div class="row clearfix">
            	<?php query_posts( array(
	                'post_type' => 'Course',
	                'post_per_page'	=> -1,
	              )); 
	            ?>
	            <?php while (have_posts()) : the_post(); ?>
                <!-- Course Block -->
                <div class="course-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box ctimg"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                        <div class="lower-content">
                            <div class="title">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <a href="course-detail.html" class="start">
		                            Starts 
		                            <?php
			                            if ( get_field( "start_date" ) ) {
			                                echo do_shortcode( get_field( "start_date" ) );
			                            }
			                        ?> 
		                            &nbsp; / &nbsp;
		                            <span> 
		                            <?php
						                if ( get_field( "seats" ) ) {
						                    echo do_shortcode( get_field( "seats" ) );
						                }
					                ?> 
		                            Seats
		                            </span>
                                </a>
                            </div>
                            <div class="text">
                                <p><?php the_excerpt(); ?></p>
                            </div>
                            <div class="clearfix">
                                <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-one apply-btn">Learn More</a>
                                <div class="rating">
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                    <span class="icon icon-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            	<?php wp_reset_query(); ?>
            </div>

             <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                <?php
                  the_posts_pagination(array(
                      "screen_reader_text"=>' ',
                      "prev_text" => "<i class='fa fa-long-arrow-left'></i>",
                      "next_text" => "<i class='fa fa-long-arrow-right'></i>"
                  ));
                ?>
            </div>
        </div>
    </section>
    <!-- End Courses Section -->
	<?php get_template_part( "template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>