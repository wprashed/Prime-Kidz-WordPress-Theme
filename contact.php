<?php 
/* Template Name: Contact Template */
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
            <h1 class="text-sky">Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky">Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home </a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="intro-text text-center">
                <h2>Get in touch with us</h2>
                <h4>For any kind of information you need ...</h4>
                <div class="anim-icon"><span class="icon icon-star"></span></div>
            </div>

            <div class="row clearfix">

                <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <h2>Send us Message</h2>
                        <?php the_content(); ?>
                    </div>

                    <div class="contact-form">
                        <?php
                            if ( get_field( "contact_form_short_code" ) ) {
                                echo do_shortcode( get_field( "contact_form_short_code" ) );
                            }
                        ?>
                    </div>
                </div>

                <div class="info-column col-md-4 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <ul class="contact-info-list">
                            <li>
                                <div class="title-box"><i class="flaticon-map-marker-1 text-parrot"></i>Location</div>
                                <div class="info">
                                	<p>
	                                	<?php
			                                if ( get_field( "location" ) ) {
			                                    echo do_shortcode( get_field( "location" ) );
			                                }
			                            ?>
                                	</p>
                            	</div>
                            </li>
                            <li class="active">
                                <div class="title-box"><i class="flaticon-phone-auricular-with-high-volume text-sky"></i>Call Us </div>
                                <div class="info">
                                	<p>
                                		<?php
			                                if ( get_field( "mobile" ) ) {
			                                    echo do_shortcode( get_field( "mobile" ) );
			                                }
			                            ?>
                                	</p>
                                </div>
                            </li>
                            <li>
                                <div class="title-box"><i class="flaticon-black text-orange"></i>Email</div>
                                <div class="info">
                                	<p>
                                		<?php
			                                if ( get_field( "email" ) ) {
			                                    echo do_shortcode( get_field( "email" ) );
			                                }
			                            ?>
                                	</p>
                                </div>
                            </li>
                        </ul>

                        <div class="social-icons">
                            <ul class="social-icon-two">
                                <?php
			                        $socialicons = ot_get_option('social', array() );

			                        if(! empty($socialicons)){
			                            foreach ($socialicons as $socialicon) {
			                            echo    '<li><a href="'.$socialicon['icon_link'].'" data-placement="top" title="'.$socialicon['title'].'"><span class="fa fa-'.$socialicon['icon_name'].'"></span></a></li>';
			            
			                            }
			                        }
			                    ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Contact Page Section -->

    <!--Map Section-->
    <section class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas">
            	<?php
                    if ( get_field( "google_map" ) ) {
                        echo do_shortcode( get_field( "google_map" ) );
                    }
                ?>
            </div>
        </div>
    </section>
    <!--End Map Section-->
	<?php get_template_part( "template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>