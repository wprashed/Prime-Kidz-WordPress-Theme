<!-- News Block -->
<div class="news-block-two">
    <div class="inner-box">
        <div class="image-box">
            <div class="image">
                <a href="<?php the_permalink(); ?>">
                	<?php the_post_thumbnail("primekidz-home-square"); ?>
                </a>
            </div>
        </div>
        <div class="lower-content">
            <div class="title">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
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
                        <a href=""><?php comments_number( 'no Comments', 'one Comment', '% Comments' ); ?></a>
                    </li>
                </ul>
            </div>
            <p><?php the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
        </div>
    </div>
</div>