<!-- School Info Section -->
<section class="info-section no-pd-top">
    <div class="auto-container">
        <div class="row clearfix">

            <?php
                $informations = ot_get_option('info', array() );

                if(! empty($informations)){
                    foreach ($informations as $information) {
                    echo    '
                    <div class="info-block col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <div class="icon-box"><img src="'.$information['info_image'].'" alt=""></div>
                            <h3><a href="'.$information['info_link'].'">'.$information['title'].'</a></h3>
                            <p>'.$information['info_text'].'</p>
                        </div>
                    </div>
                    ';
    
                    }
                }
            ?>

        </div>
    </div>
</section>
<!-- End Info Section -->