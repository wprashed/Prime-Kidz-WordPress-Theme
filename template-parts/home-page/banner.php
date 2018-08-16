<!--Banner-->
<?php
  $banner = ot_get_option('banner');
?>
<section class="banner" style="background-image: url(<?php echo $banner; ?>);">
    <div class="header-text-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 text-center">
              <div class="header-text">
                <h2>
                  <?php
                    $banner_title_one = ot_get_option('banner_title_one');
                  ?>
                  <?php echo $banner_title_one; ?>
                  <br>
                  <?php
                    $banner_title_two = ot_get_option('banner_title_two');
                  ?>
                  <?php echo $banner_title_two; ?>
                </h2>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!--End Banner-->