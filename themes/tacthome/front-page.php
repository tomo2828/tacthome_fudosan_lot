<?php
get_header("login_form");
?>
<div class="wrapper">

    <div class="field_area">
        <?php
        $args = array(
            'post_type' => 'page',
            'post_status' => 'publish',
            'orderby' => 'menu_order', // 固定ページの順序によって並べ替え
            'order' => 'ASC', // 小さい順に並べ替え（昇順）
            'post__not_in' => array(882, 893) // postIDが882と883のページを除外
        );

        $query = new WP_Query($args);

        // ループを開始
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>

                <a href="<?php the_permalink(); ?>" class="field_box">
                    <p class="area">エリア：<?php the_field('area'); ?></p>
                    <p class="subject"><?php the_field('subject'); ?></p>
                    <h3><?php the_field('type'); ?></h3>
                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/arrow.png" alt="" class="arrow">
                </a>

        <?php endwhile;
            wp_reset_postdata();
        else :
            echo "<p>現在公開中のサイトはありません</p>";
        endif;
        ?>
    </div>
    <p class="white note">ログインができない、パスワードを紛失されたなどの場合は、弊社タクトホーム担当者までご連絡ください。</p>
</div>
<?php
get_footer();
?>