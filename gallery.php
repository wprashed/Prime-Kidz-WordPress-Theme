<?php 
/* Template Name: Gallery Template */
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
            <h1 class="text-sky">Our Gallery</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li>Our Gallery</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!--Gallery Section-->
    <section class="gallery-grid-section">
        <div class="auto-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                <div class="filter-list row clearfix">
                    <?php query_posts( array(
		                'post_type' => 'gallery',
		              )); 
		            ?>
		            <?php while (have_posts()) : the_post(); ?>
                    <!--Gallery Item Two-->
                    <div class="gallery-item mix all campus video col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php if ( get_field( "image" ) ) { echo do_shortcode( get_field( "image" ) ); } ?>">
                                <!--Overlay Box-->
                                <div class="caption-box clearfix">
                                    <div class="title">
                                        <h3><?php the_title(); ?></h3>
                                    </div>
                                    <div class="icon-box">
		                                <a href="<?php if ( get_field( "image" ) ) { echo do_shortcode( get_field( "image" ) ); } ?>" class="link" data-fancybox="gallery" data-caption=""><span class="icon fa fa-search"></span></a>
		                            </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    <?php endwhile; ?>
            		<?php wp_reset_query(); ?>
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
        </div>
    </section>
    <!-- End Gallery Section -->
	<?php get_template_part( "template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>