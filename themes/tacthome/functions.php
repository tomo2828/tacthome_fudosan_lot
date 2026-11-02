<?php

function setup_theme()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'setup_theme');

/* パスワード保護ページのパスワード保存時間を60分に変更 */
function custom_postpass_time() {
    require_once ABSPATH . 'wp-includes/class-phpass.php';
    $hasher = new PasswordHash( 8, true );
    setcookie( 'wp-postpass_' . COOKIEHASH, $hasher->HashPassword( wp_unslash( $_POST['post_password'] ) ), time() + HOUR_IN_SECONDS, COOKIEPATH );
    wp_safe_redirect( wp_get_referer() );
    exit();
}
add_action( 'login_form_postpass', 'custom_postpass_time' );