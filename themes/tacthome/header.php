<?php 
function is_custom_template_page($temp) {
    $template = get_page_template_slug();

    // Check if the template file name starts with "page-myselect_".
    if (strpos($template, $temp) === 0) {
        return true;
    }

    return false;
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>
        <?php
        if (is_front_page()) {
            echo "GRAFARE 販売会社様限定 会員専用サイト";
        } elseif (is_page()) {
            $page_title = get_the_title();
            $page_title = str_replace('保護中: ', '', $page_title);
            echo $page_title;
        } else {
            bloginfo('name');
        }
        ?>
    </title>
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
    <?php if (preg_match('/^page-(myselect|sales)_(kanto|nagoya|nishinihon|kitanihon)\.php$/', get_page_template_slug())) : ?>
      <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/common/css/lot-updates.css?ver=' . filemtime(get_template_directory() . '/common/css/lot-updates.css')); ?>">
    <?php endif; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/common/js/util.js"></script>
        <script src="<?php echo esc_url(get_template_directory_uri() . '/common/js/top.js?ver=' . filemtime(get_template_directory() . '/common/js/top.js')); ?>"></script>

    <script>
        document.createElement("picture");
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/common/js/picturefill.js"></script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T59RR54');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7V53XT');</script>
<!-- End Google Tag Manager -->

    <?php wp_head(); ?>
</head>
