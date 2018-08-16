<?php
the_post(); 
get_header(); 
?>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky"><?php the_title(); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->
                <div class="content-side blog-content col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <div class="blog-post">
                        <!-- News Block -->
                        <div class="news-block-two">
                            <div class="inner-box">
                                <div class="image-box">
                                    <div class="image">
                                    	<?php the_post_thumbnail( "large" ); ?>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <div class="text">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php get_template_part("layouts/blog-sidebar"); ?>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <?php get_template_part( "template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>