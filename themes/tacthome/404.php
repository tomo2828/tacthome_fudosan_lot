<?php
get_header();
?>

<body>
    <section class="cat-index-top animation-box">
        <div class="container" style="text-align: center;">
            <p class="cat-index-top__catch">
            <h2>404 Not Found（ページが見つかりませんでした）</h2>
            <p class="mb30">アクセスしたページは存在しないか、または移動した可能性があります。</p>
            <a href="<?php echo site_url(); ?>">タクトホーム書庫TOPへ戻る</a>
            </p>
        </div>
    </section>

    <div id="pagetop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_pagetop.png" alt="ページトップ"></a></div>
    </main>

    <?php
    get_footer();
    ?>