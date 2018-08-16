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
            <h1 class="text-sky"><?php _e( 'Oops! That page can&rsquo;t be found.', 'primekidz' ); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li>404</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
<?php get_footer(); ?>