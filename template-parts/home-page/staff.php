<!-- Staff Section -->
<section class="staff-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/3.jpg);">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon doll-6"></span>
            <span class="icon icon-star"></span>
            <span class="icon icon-pencil"></span>
        </div>
        <div class="sec-title text-center light">
            <h2>Teachers , Staff</h2>
        </div>
        <div class="row clearfix">

            <?php
                $staffs = ot_get_option('staff', array() );

                if(! empty($staffs)){
                    foreach ($staffs as $staff) {
                    echo    '
                    <!-- Staff Block -->
                    <div class="staff-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="image-box wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="0ms"><a href="#"><img src="'.$staff['staff_image'].'" alt=""></a></div>
                            <div class="info-box">
                                <h3>'.$staff['staff_name'].'</h3>
                                <p>'.$staff['title'].'</p>
                            </div>
                        </div>
                    </div>
                    ';
    
                    }
                }
            ?>

        </div>
    </div>
</section>
<!-- End Staff Section -->