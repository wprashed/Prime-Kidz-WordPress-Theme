<!-- News Block -->
<div class="news-block">
    <div class="row clearfix">
        <div class="content-column col-md-7 col-sm-12 col-xs-12">
            <div class="row clearfix">
                <div class="image-column col-md-7 col-sm-7 col-xs-12">
                    <div class="image">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("primekidz-home-square"); ?></a>
                    </div>
                </div>

                <div class="info-column col-md-5 col-sm-5 col-xs-12">
                    <div class="inner-column">
                        <h3 class="date"><?php echo get_the_date(); ?></h3>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <ul class="post-info">
                            <li>
                                <span class="fa fa-user"></span>
                                By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ); ?>">
                                <?php the_author(); ?></a>
                            </li>
                            <li>
                                <span class="fa fa-tag"></span>
                                Tags <?php the_tags( " ", " ", " " ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-column col-md-5 col-sm-12 col-xs-12">
            <div class="inner-column">
                <?php the_excerpt(); ?>
                <div class="btn-box">
                    <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-twp read-more">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- News Block -->