<!-- Facilities Section -->
<section class="facilites-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Info Column -->
            <div class="info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="inner-column">
                    <span class="icon doll-3"></span>
                    <div class="sec-title">
                        <?php
                            $facilites_title = ot_get_option('facilites_title');
                        ?>
                        <h2><span class="text-parrot"><?php echo $facilites_title; ?></span></h2>
                    </div>
                    <?php
                        $facilites_tagline = ot_get_option('facilites_tagline');
                    ?>
                    <h3><?php echo $facilites_tagline; ?></h3>
                    <?php
                        $facilites_description = ot_get_option('facilites_description');
                    ?>
                    <p><?php echo $facilites_description; ?></p>
                    <div class="facilities">
                        <div class="row clearfix">
                            <?php
                                $facilitiesitems = ot_get_option('facilites', array() );

                                if(! empty($facilitiesitems)){
                                    foreach ($facilitiesitems as $facilitiesitem) {
                                    echo    '
                                    <div class="facility-block col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                        <div class="inner-box">
                                            <div class="image-box"><img src="'.$facilitiesitem['facilites_image'].'" alt=""></div>
                                            <h4><a href="'.$facilitiesitem['facilites_link'].'">'.$facilitiesitem['title'].'</a></h4>
                                        </div>
                                    </div>
                                    ';
                    
                                    }
                                }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Column -->
    <div class="image-column">
        <div class="inner-column">
            <?php
                $facilites_banner = ot_get_option('facilites_banner');
            ?>
            <div class="layer-image" style="background-image: url(<?php echo $facilites_banner; ?>);"></div>
            <div class="image-box">
                
            </div>
        </div>
    </div>
</section>
<!-- End Facilities Section -->