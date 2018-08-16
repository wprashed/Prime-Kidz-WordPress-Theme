<?php get_header(); ?>
	<!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/background/6.jpg);">
        <div class="auto-container">
            <div class="anim-icons">
                <span class="icon-1 icon-flower"></span>
                <span class="icon-2 icon-pencil"></span>
            </div>
            <h1 class="text-sky"><?php echo get_the_author_meta( "display_name" ); ?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="<?php echo site_url(); ?>">Home </a></li>
                <li><?php echo get_the_author_meta( "display_name" ); ?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <!--Author Box-->
                    <div class="author-box">
                        <div class="inner clearfix">
                            <div class="author-info">
                                <?php echo get_avatar( get_the_author_meta( "ID" ) ); ?>
                                <h3 class="name"><?php the_author(); ?></h3>
                                <ul class="social-icon-three clearfix">
                                <?php
                                $primekidz_author_facebook  = get_field( "facebook", "user_" . get_the_author_meta( "ID" ) );
                                $primekidz_author_twitter   = get_field( "twitter", "user_" . get_the_author_meta( "ID" ) );
                                $primekidz_author_instagram = get_field( "instagram", "user_" . get_the_author_meta( "ID" ) );
                                ?>
                                <?php if ( $primekidz_author_facebook ): ?>
                                    <li><a href="<?php echo esc_url( $primekidz_author_facebook ); ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php endif; ?>
                                <?php if ( $primekidz_author_twitter ): ?>
                                    <li><a href="<?php echo esc_url( $primekidz_author_twitter ); ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php endif; ?>
                                <?php if ( $primekidz_author_instagram ): ?>
                                    <li><a href="<?php echo esc_url( $primekidz_author_instagram ); ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php endif; ?>
                                </ul>
                            </div>
                            <div class="text"><?php the_author_meta( "description" ); ?></div>
                        </div>
                    </div>
                    <!--End Author Box-->
                    <div class="blog-list">
                        <?php
                        if ( ! have_posts() ):
                            ?>
                            <h5 class="text-center"><?php _e("There is no post in this author","primekidz"); ?></h5>
                        <?php
                        endif;
                        ?>
                    	<?php
			                while ( have_posts() ) :
			                the_post();
			            ?>
                        <?php get_template_part("template-parts/common/blog"); ?>
                        <?php
			                endwhile;
			             ?>
                        <!-- Styled Pagination -->
                        <div class="styled-pagination text-center">
                            <?php
				              the_posts_pagination(array(
				                  "screen_reader_text"=>' ',
				                  "prev_text" => "<i class='fa fa-long-arrow-left'></i>",
				                  "next_text" => "<i class='fa fa-long-arrow-right'></i>"
				              ));
				            ?>
                        </div>
                    </div><!-- Blog List -->
                </div>

                <!--Sidebar Side-->
                <?php get_template_part("/layouts/blog-sidebar"); ?>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->
<?php get_footer(); ?>
