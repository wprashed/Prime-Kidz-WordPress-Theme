    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-12 col-xs-12">
                        <div class="footer-widget about-widget">
                            <div class="footer-logo">
                                <?php
                                    if(current_theme_supports("custom-logo")):
                                ?>
                                <figure>
                                    <a href="<?php echo site_url(); ?>"><?php the_custom_logo(); ?></a>
                                </figure> 
                                <?php
                                    endif;
                                ?>
                            </div>
                            <?php
                                if ( is_active_sidebar( "footer-text" ) ) {
                                    dynamic_sidebar( "footer-text" );
                                }
                            ?>
                        </div>
                    </div>
                        
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget posts-widget">
                          <?php
                            if ( is_active_sidebar( "footer-one" ) ) {
                                dynamic_sidebar( "footer-one" );
                            }
                          ?>  
                        </div>
                    </div>
                    
                    <!--Footer Column-->
                    <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget contact-widget">
                            <?php
                                if ( is_active_sidebar( "footer-two" ) ) {
                                    dynamic_sidebar( "footer-two" );
                                }
                            ?>
                            <ul class="social-icon-two">
                                <?php
                                    $socialicons = ot_get_option('social', array() );

                                    if(! empty($socialicons)){
                                        foreach ($socialicons as $socialicon) {
                                        echo    '<li><a href="'.$socialicon['icon_link'].'" data-placement="top" title="'.$socialicon['title'].'"><span class="fa fa-'.$socialicon['icon_name'].'"></span></a></li>';
                        
                                        }
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="clearfix">
                    <div class="copyright-text">
                        <p>Copyright &copy; <?php the_time(Y); ?> <a href="<?php echo site_url(); ?>"><?php bloginfo( "name" ); ?></a> All Rights Reserved.</p>
                    </div>
                    <?php
                        wp_nav_menu(
                          array(
                            'theme_location' => 'footermenu',
                            'menu_id' => 'footermenu',
                            'menu_class' => 'footer-links clearfix'
                          )
                        );
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
<?php wp_footer(); ?>
</body>
</html>