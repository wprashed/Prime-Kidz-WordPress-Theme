<!--Sidebar Side-->
<div class="sidebar-side col-lg-3 col-md-4 col-sm-12 col-xs-12">
    <aside class="sidebar default-sidebar">
        <?php
            if ( is_active_sidebar( "blog-sidebar" ) ) {
                dynamic_sidebar( "blog-sidebar" );
            }
        ?>
        <!-- Social widget -->
        <div class="sidebar-widget social-widget">
            <div class="sidebar-title"><h3>Get Connected</h3></div>
            <div class="social-icons">
                <ul class="social-icon-two clearfix">
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
                            
    </aside>
</div>