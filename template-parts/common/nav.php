<!-- Main Menu -->
<nav class="main-menu">
    <div class="navbar-header">
        <!-- Toggle Button -->    	
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    
    <div class="navbar-collapse collapse clearfix">
        <?php
        $primekidz_menu = wp_nav_menu( array(
            'theme_location' => 'topmenu',
            'menu_id'        => 'topmenu',
            'menu_class'     => 'navigation clearfix',
            'fallback_cb'    => 'primekidz_fallback_menu',
            'echo'           => false
        ) );

        $primekidz_menu = str_replace("menu-item-has-children","menu-item-has-children dropdown",$primekidz_menu);
        echo $primekidz_menu;
        ?>
    </div>
</nav>
<!-- Main Menu End-->