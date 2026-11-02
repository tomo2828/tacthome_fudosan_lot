<?php
get_header();
?>
<main class="tact_shoko single">
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
            <div class="single_area">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="thumbnail">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/common/img/tact_shoko_logo.png" alt="">
                            <?php endif; ?>
                        </div>
                        <div class="blog_title">
                            <p class="date"><?php the_time('Y.m.d'); ?></p>
                            <p class="txt"><?php the_title(); ?></p>
                        </div>
                        <div class="blog_contents">
                            <?php the_content(); ?>
                        </div>
                <?php endwhile;
                endif; ?>

                <div class="navigation-links">
                    <div class="previous-post">
                        <?php previous_post_link('%link', '< 前の投稿'); ?>
                    </div>
                    <div class="home-link">
                        <span class="ml10 mr10">|</span><a href="/corporate/activity/csr/lib/blog/">一覧へ戻る</a><span class="ml10 mr10">|</span>
                    </div>
                    <div class="next-post">
                        <?php next_post_link('%link', '次の投稿 >'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>
<?php
get_footer();
?>