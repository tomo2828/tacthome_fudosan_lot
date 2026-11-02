<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>GRAFARE 販売会社様限定 会員専用サイト</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta property="og:type" content="website">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/common/js/util.js"></script>
    <?php if (is_page_template('page-sales_kanto.php')) { ?>
        <script src="<?php echo get_template_directory_uri(); ?>/common/js/top.js"></script>
    <?php } ?>

    <script>
        document.createElement("picture");
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/common/js/picturefill.js"></script>
    <?php wp_head(); ?>
</head>

<body id="login_form">
    <div class="login_form_mv">
        <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo_01.png" alt="" class="logo">
        <p class="ttl">グラファーレ</p>
        <h2><span>会員専用</span>物件情報サイト</h2>
    </div>

