<!--Comments Area-->
<?php

if ( post_password_required() ) {
    return;
}
?>
<div class="comments-area">
    <div class="group-title"><h2>Comments</h2></div>
    <?php
        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>
            <h3 class="h2 comments-title">
                <?php
                $comments_number = get_comments_number();
                if ( '1' === $comments_number ) {
                    /* translators: %s: post title */
                    printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'philosophy' ), get_the_title() );
                } else {
                    printf(
                        /* translators: 1: number of comments, 2: post title */
                        _nx(
                            '%1$s Reply to &ldquo;%2$s&rdquo;',
                            '%1$s Replies to &ldquo;%2$s&rdquo;',
                            $comments_number,
                            'comments title',
                            'philosophy'
                        ),
                        number_format_i18n( $comments_number ),
                        get_the_title()
                    );
                }
                ?>
            </h3>
    <?php
        wp_list_comments( array(
            'avatar_size' => 100,
            'style'       => 'ol',
            'short_ping'  => true,
            'reply_text'  => '<i class="fa fa-mail-reply"></i> ' . __( 'Reply', 'philosophy' ),
        ) );
    ?>
</div>
    
<!-- Comment Form -->
<div class="comment-form">
    <div class="group-title"><h2>Leave a Comment</h2></div>

    <?php
    endif;

    comment_form();
    ?>
</div>
<!--End Comment Form -->