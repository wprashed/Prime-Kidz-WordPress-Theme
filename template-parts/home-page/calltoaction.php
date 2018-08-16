<!-- Call to Action -->
<section class="call-to-action" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/1.jpg);">
    <div class="auto-container">
        <div class="inner-container">
            <?php
                $calltoaction_title = ot_get_option('calltoaction_title');
            ?>
            <h2><?php echo $calltoaction_title; ?></h2>
            <div class="link-box clearfix">
                <?php
                    $calltoaction_left_title = ot_get_option('calltoaction_left_title');
                ?>
                <?php
                    $calltoaction_left_url = ot_get_option('calltoaction_left_url');
                ?>
                <a href="<?php echo $calltoaction_left_url; ?>" class="pull-left"><?php echo $calltoaction_left_title; ?></a>
                <span class="icon icon-star wow zoomInStable"></span>
                <?php
                    $calltoaction_right_title = ot_get_option('calltoaction_right_title');
                ?>
                <?php
                    $calltoaction_right_url = ot_get_option('calltoaction_right_url');
                ?>
                <a href="<?php echo $calltoaction_right_url; ?>" class="pull-right"><?php echo $calltoaction_right_title; ?></a>
            </div>
        </div>
    </div>
</section>
<!-- End Call To Action -->