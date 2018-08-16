<!-- News Section -->
<section class="news-section">
    <div class="auto-container" <?php post_class(); ?>>
        <div class="sec-title text-center">
            <span class="icon-1 icon-star-2"></span>
            <span class="icon-2 doll-3"></span>
            <h2><span class="text-parrot">News &amp;</span> Events</h2>
            <p>Amet  onsectetur adipisicing elit sed eiusmod tempor incididunt labore dolore magna aliquat enim</p>
        </div>

        <?php
            while(have_posts()){
                the_post();
                get_template_part("template-parts/content/post",get_post_format());
            }
        ?>

    </div>
</section>
<!-- End News Section -->