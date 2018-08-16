<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from t.commonsupport.com/prime-kidz/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Jul 2018 05:48:43 GMT -->
<head>
<meta charset="utf-8">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<div class="page-wrapper">
 	
    <!-- Main Header-->
    <header class="main-header">
        <!--Top-bar -->
        <div class="header-top">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="top-left">
                        <ul class="clearfix">
                            <?php
                                $telephone = ot_get_option('telephone');
                            ?>
                            <li><i class="flaticon-phone-auricular-with-high-volume"></i>Tel: <?php echo $telephone; ?></li>
                            <?php
                                $email = ot_get_option('email');
                            ?>
                            <li><i class="flaticon-black"></i><?php echo $email; ?></li>
                            <?php
                                $address = ot_get_option('address');
                            ?>
                            <li><i class="flaticon-map-marker-1"></i><?php echo $address; ?></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <ul class="social-icon-one clearfix">
                            <?php
                                $socialicons = ot_get_option('social', array() );

                                if(! empty($socialicons)){
                                    foreach ($socialicons as $socialicon) {
                                    echo    '<li><a href="'.$socialicon['icon_link'].'" data-placement="top" title="'.$socialicon['title'].'"><span class="fa fa-'.$socialicon['icon_name'].'"></span></a></li>';
                    
                                    }
                                }
                            ?>
                        </ul>

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <!--Search Box-->
                            <div class="dropdown dropdown-outer">
                                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                    <li class="panel-outer">
                                        <div class="form-container">
                                            <?php get_template_part( "/searchform" ); ?>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--End earch Box-->
                    </div>
                </div>
            </div> 
        </div>

        <!-- Main Box -->
        <div class="header-lower">
            <div class="auto-container">
        	   <div class="main-box clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo">
                            <?php
                                if(current_theme_supports("custom-logo")):
                            ?>
                            <a href="<?php echo site_url(); ?>"><?php the_custom_logo(); ?></a>
                            <?php
                                endif;
                            ?>
                        </div>
                    </div>
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        
                        <?php get_template_part( "template-parts/common/nav" ); ?>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <?php
                        if(current_theme_supports("custom-logo")):
                    ?>
                    <a href="<?php echo site_url(); ?>"><?php the_custom_logo(); ?></a>
                    <?php
                        endif;
                    ?>
                </div>
                <!--Right Col-->
                <div class="pull-right">
                   <?php get_template_part( "template-parts/common/nav" ); ?> 
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->