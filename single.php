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
                <li>Blog Details</li>
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
                                    <div class="title">
                                        <h3><?php the_title(); ?></h3>
                                        <ul class="post-info">
                                            <li>
                                                <span class="fa fa-user"></span>
                                                By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>"><?php the_author(); ?></a>
                                            </li>
                                            <li>
                                                <span class="fa fa-tags"></span>
                                                Tags <?php the_tags( " ", " ", " " ); ?>
                                            </li>
                                            <li>
                                                <span class="fa fa-comment"></span>
                                                <?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="text">
                                        <?php the_content(); ?>
                                    </div>

                                    <div class="other-options clearfix">
                                        <ul class="default-tags clearfix pull-left">
                                            <li><?php the_category( " " ); ?></li>
                                        </ul>

                                        <ul class="social-icon-two pull-right clearfix">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Blog List -->

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

                    <!-- Post Pagination -->
                    <div class="post-pagination clearfix">
                        <div class="pull-left text-left">
                        	<?php
                            $primekidz_prev_post = get_previous_post();
                            if ( $primekidz_prev_post ):
                                ?>
                            <span class="by">By <strong><?php echo the_author( $primekidz_prev_post ); ?></strong></span>
                            <h3><a href="<?php echo get_the_permalink( $primekidz_prev_post ); ?>"><?php echo get_the_title( $primekidz_prev_post ); ?></a></h3>
                            <a href="<?php echo get_the_permalink( $primekidz_next_post ); ?>" class="prev-post"><span class="fa fa-angle-left"></span><?php _e( "Previous Post", "primekidz" ); ?></a>
                            <?php
                            endif;
                            ?>
                        </div>

                        <div class="pull-right text-right">
                        	<?php
                            $primekidz_next_post = get_next_post();
                            if ( $primekidz_next_post ):
                                ?>
                            <span class="by">By <strong><?php echo the_author( $primekidz_next_post ); ?></strong></span>
                            <h3><a href="<?php echo get_the_permalink( $primekidz_next_post ); ?>"><?php echo get_the_title( $primekidz_next_post ); ?></a></h3>
                            <a href="<?php echo get_the_permalink( $primekidz_next_post ); ?>" class="next-post"><?php _e( "Next Post", "primekidz" ); ?><span class="fa fa-angle-right"></span></a>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                    <!-- Comments -->
                    	<?php
						    if(!post_password_required()){
						        comments_template();
						    }
					    ?>
                    <!-- Comments /-->
                </div>
                <?php get_template_part("/layouts/blog-sidebar"); ?>
            </div>
        </div>
    </div>
    <!-- End Sidebar Container -->

    <?php get_template_part( "/template-parts/home-page/subscribe" ); ?>
<?php get_footer(); ?>