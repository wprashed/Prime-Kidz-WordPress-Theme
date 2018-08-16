<!-- Intro Section -->
<section class="intro-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="text-column col-md-7 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <span class="icon-1 doll-1 wow zoomInStable" data-wow-duration="2000ms" data-wow-delay="0ms"></span>
                    <span class="icon-2 doll-2 wow jello" data-wow-duration="1000ms" data-wow-delay="1000ms"></span>
                    <div class="sec-title">
                        <?php
                            $intro_title = ot_get_option('intro_title');
                        ?>
                        <h2><span class="text-sky"><?php echo $intro_title; ?></h2>
                    </div>
                    <?php
                        $intro_description = ot_get_option('intro_description');
                    ?>
                    <p><?php echo $intro_description; ?></p>
                </div>
                <blockquote>
                    <?php
                        $intro_quote = ot_get_option('intro_quote');
                    ?>
                    <h3><?php echo $intro_quote; ?></h3>
                    <?php
                        $intro_quote_author = ot_get_option('intro_quote_author');
                    ?>
                    <cite>~ <?php echo $intro_quote_author; ?></cite>
                </blockquote>
            </div>

            <div class="image-column col-md-5 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <?php
                        $intro_image_one = ot_get_option('intro_image_one');
                    ?>
                    <figure class="image wow fadeIn" data-wow-duration="1500ms" data-wow-delay="0ms"><img src="<?php echo $intro_image_one; ?>" alt="" style="height: 300px;width: 300px;"></figure>
                    <?php
                        $intro_image_two = ot_get_option('intro_image_two');
                    ?>
                    <figure class="image wow zoomInStable" data-wow-duration="1500ms" data-wow-delay="1000ms"><img src="<?php echo $intro_image_two; ?>" alt="" style="height: 400px;width: 400px;"></figure>
                    <?php
                        $intro_image_three = ot_get_option('intro_image_three');
                    ?>
                    <figure class="image wow fadeIn" data-wow-duration="1500ms" data-wow-delay="500ms"><img src="<?php echo $intro_image_three; ?>" alt="" style="height: 190px;width: 190px;"></figure>
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- End Intro Section -->