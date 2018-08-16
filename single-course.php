<?php 
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
            <h1 class="text-sky"><?php the_title(); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li>Course Details</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side col-md-8 col-sm-12 col-xs-12">
                    <div class="course-detail">

                        <div class="course-slider">
                            <ul class="image-carousel owl-theme">
                                <li class="slide-item">
                                    <a href="" class="lightbox-image" title=""><?php the_post_thumbnail( "large" ); ?></a>
                                    
                                    <ul class="course-info">
                                        <li>
                                        	<i class="icon fa fa-calendar"></i> Starts 
                                        	<?php
								                if ( get_field( "start_date" ) ) {
								                    echo do_shortcode( get_field( "start_date" ) );
								                }
							                ?>
                                        </li>
                                        <li>
                                        	<i class="icon fa fa-book"></i>
                                        	 <?php
								                if ( get_field( "seats" ) ) {
								                    echo do_shortcode( get_field( "seats" ) );
								                }
							                ?> Seats
                                        	</li>
                                        <li>
                                        	<i class="icon fa fa-clock-o"></i> Duration 
                                        	<?php
								                if ( get_field( "duration" ) ) {
								                    echo do_shortcode( get_field( "duration" ) );
								                }
							                ?>
                                        	</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="course-price">
                            <div class="row clearfix">
                                <div class="title-column col-md-8 col-sm-12 col-xs-12">
                                    <h2><?php the_title(); ?></h2>
                                    <div class="rating">
                                        <span class="icon icon-star"></span>
                                        <span class="icon icon-star"></span>
                                        <span class="icon icon-star"></span>
                                        <span class="icon icon-star"></span>
                                        <span class="icon icon-star"></span>
                                    </div>
                                </div>

                                <div class="price-column col-md-4 col-sm-12 col-xs-12">
                                    <div class="inner-box">
                                        <div class="price">
                                        	<?php
								                if ( get_field( "course_fee" ) ) {
								                    echo do_shortcode( get_field( "course_fee" ) );
								                }
							                ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="description">
                            <div class="group-title"><h2>Description</h2></div>
                            <p><?php the_content(); ?></p>
                        </div>

                        <div class="requirment">
                            <div class="group-title"><h2>Requirments</h2></div>
                            <P>
                            	<?php
					                if ( get_field( "requirements" ) ) {
					                    echo do_shortcode( get_field( "requirements" ) );
					                }
				                ?>
                            </P>
                        </div>

                    </div><!-- Blog List -->

                </div>
                <?php get_template_part("/layouts/blog-sidebar"); ?>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <?php get_template_part( "template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>