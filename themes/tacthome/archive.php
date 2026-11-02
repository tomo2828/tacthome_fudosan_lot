<?php
get_header();
?>
<main class="tact_shoko archive">
    <section class="sub-eyecatch2">
        <p><span class="bold">タクトホーム書庫</span><br>TACT HOME CMYK☆OFFICE</p>
    </section>
    <section class="beadcrumb-navigation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <nav aria-label="パンくずリスト">
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="https://www.tacthome.co.jp/">TOP</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="https://www.tacthome.co.jp/corporate/">企業情報</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="https://www.tacthome.co.jp/corporate/activity/">タクトホームの取り組み</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="<?php echo site_url(); ?>">タクトホーム書庫</a></li>
                            <li class="breadcrumb-item active" aria-current="page">TACT HOME SHOKO BLOG</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>



    <section class="animation-box">
        <div class="container">
            <p class="cat-index-top__catch line_title">
                TACT HOME SHOKO BLOG
            </p>
            <div class="blog_list">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => 10, // 表示件数
                    'orderby'     => 'date',
                    'order' => 'DESC'
                ));



                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <a href="<?php the_permalink(); ?>" class="blogbox">
                            <div class="img_area">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/img/tact_shoko_logo.png" alt="">
                                <?php endif; ?>
                            </div>
                            <div class="txt_area">
                                <p class="date"><?php the_time('Y.m.d'); ?></p>
                                <p class="txt"><?php the_title(); ?></p>
                            </div>
                        </a>
                <?php
                    endwhile;
                    if ($the_query->max_num_pages > 1) {
                        echo "<div class='pagenation'>";
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            // 'format' => '%#%/',
                            'prev_text' => '<', 
                            'next_text' => '>', 
                            'current' => max(1, $paged),
                            'mid_size' => 2, // 仕切り線を含むリンクの数
                            'total' => $the_query->max_num_pages,
                            'before_page_number' => '', // ページ番号の前に表示されるコンテンツ
                            'after_page_number' => ' | ', // ページ番号の後に表示されるコンテンツ（仕切り線）
                        ));
                        echo "</div>";
                    }

                    wp_reset_postdata();

                endif;
                ?>
            </div>

        </div>
    </section>



</main>
<?php
get_footer();
?>