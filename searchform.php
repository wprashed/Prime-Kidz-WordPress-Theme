<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>
<form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__search-form">
    <div class="form-group">
        <input type="search" id="<?php echo $unique_id; ?>" name="s" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'primekidz' ); ?>" required="">
        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
    </div>
</form>