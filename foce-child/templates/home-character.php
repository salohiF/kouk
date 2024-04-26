<div class="main-character">
    <h3 class="title">Les personnages</h3>
    <div class="swiper characters-slider">
        <div class="swiper-wrapper">
            <?php
                        $args = array(
                            'post_type' => 'characters',
                            'posts_per_page' => -1,
                            'meta_key'  => '_main_char_field',
                            'orderby'   => 'meta_value_num',
            
                        );
                        $characters_query = new WP_Query($args);
            while ($characters_query->have_posts()) {
                //echo 'The loop is working.';
                $characters_query->the_post();
                echo '<figure class="swiper-slide">';
                echo '<img src="'.get_the_post_thumbnail_url(get_the_ID(), 'full').'">';
                echo '<figcaption>';
                the_title();
                echo '</figcaption>';
                echo '</figure>';
            }
            ?>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>
