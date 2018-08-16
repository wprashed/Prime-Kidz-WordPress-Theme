<!--Fun Facts Section-->
<section class="fact-counter-section" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/2.jpg);">
    <div class="auto-container">
        <div class="anim-icons">
            <span class="icon icon-pencil"></span>
            <span class="icon icon-star-2"></span>
            <span class="icon icon-moon"></span>
            <span class="icon icon-star"></span>
            <span class="icon icon-flower-2"></span>
        </div>
        <!-- Fact Counter -->
        <div class="fact-counter">
            <div class="row clearfix">
                <?php
                    $factcounters = ot_get_option('counter', array() );

                    if(! empty($factcounters)){
                        foreach ($factcounters as $factcounter) {
                        echo    '
                        <!--Column-->
                        <div class="column col-md-3 col-sm-6 col-xs-12">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1000" data-stop="'.$factcounter['counter_number'].'">0</span>
                                <h4 class="counter-title">'.$factcounter['title'].'</h4>
                            </div>
                        </div>
                        ';
        
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Fun Facts -->