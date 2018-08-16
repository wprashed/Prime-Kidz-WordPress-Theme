<!--Gallery Section-->
<section class="gallery-full-width no-pd-bottom">
    <div class="auto-container">
        <div class="sec-title text-center">
            <span class="icon-1 doll-4 wow tada" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
            <span class="icon-2 icon-moon"></span>
            <h2><span class="text-sky">Memorable</span> Clicks</h2>
        </div>
    </div>

    <!--MixitUp Galery-->
    <div class="mixitup-gallery">
        
        <div class="filter-list row clearfix">
            <?php query_posts( array(
                'post_type' => 'gallery',
                'post_per_page' => 8,
              )); 
            ?>
            <?php while (have_posts()) : the_post(); ?>
            <!--Gallery Item Two-->
            <div class="gallery-item mix all campus video col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box gallery">
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
        </div>
    </div>
</section>
<!-- End Gallery Section -->