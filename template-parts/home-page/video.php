<!-- Video Section -->
<section class="video-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/4.jpg);">
    <div class="auto-container">
        <div class="content-box clearfix">
            <div class="title-box">
                <?php
                    $video_title = ot_get_option('video_title');
                ?>
                <h2><?php echo $video_title; ?></h2>
                <?php
                    $video_tagline = ot_get_option('video_tagline');
                ?>
                <p><?php echo $video_tagline; ?></p>
            </div>
            <div class="btn-box">
                <?php
                    $video_link = ot_get_option('video_link');
                ?>
                <a href="<?php echo $video_link; ?>" class="play-btn" data-fancybox="gallery" data-caption=""><span class="play-icon"></span>Play Video </a>
            </div>
        </div>
    </div>
</section>
<!-- End Video Section -->