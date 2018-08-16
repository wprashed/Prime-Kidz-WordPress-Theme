<!-- Feature Section -->
<section class="feature-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="feature-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <span class="icon-1 doll-1 wow tada" data-wow-duration="1500ms" data-wow-delay="0ms"></span>
                    <span class="icon-2 doll-7 wow tada" data-wow-duration="1500ms" data-wow-delay="500ms"></span>
                    <?php
                        $feature_title = ot_get_option('feature_title');
                    ?>
                    <h2><span class="text-pink"><?php echo $feature_title; ?></span><span class="inline-icon icon-flower-2"></span></h2>
                    <?php
                        $feature_tagline = ot_get_option('feature_tagline');
                    ?>
                    <p><?php echo $feature_tagline; ?></p>
                    <ul class="list-style-one">
                        <?php
                            $feature = ot_get_option('feature', array() );

                            if(! empty($feature)){
                                foreach ($feature as $facilitiesitem) {
                                echo    '<li>'.$facilitiesitem['feature_item'].'</li>';
                
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <?php
                        $feature_image = ot_get_option('feature_image');
                    ?>
                    <figure class="image"><img src="<?php echo $feature_image; ?>" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Feature Section -->