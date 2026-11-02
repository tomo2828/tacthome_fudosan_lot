<?php
/*
Template Name:sales_北日本
*/
?>
<?php
$error_message = "";


if (isset($_COOKIE['wp-postpass_' . COOKIEHASH]) && wp_get_raw_referer() == get_permalink()) {
    $error_message = '<p class="password-error-message">パスワードが違います</p>';
}

// パスワードが一致しない場合の処理
if (!empty($_POST['post_password']) && !post_password_verify($_POST['post_password'], get_the_ID())) {
    $error_message = '<p class="password-message">パスワードが違います</p>';
}

// 何らかの原因でリダイレクトされた場合のエラーメッセージ
if (!empty($_POST['post_password']) && post_password_required(get_the_ID()) && empty($error_message)) {
    $error_message = '<p class="password-message">エラーが発生しました</p>';
}

// 現在の固定ページのIDを取得
$post_id = get_the_ID();

while (have_posts()) : the_post();
    if (post_password_required($post_id)) :
        get_header("login_form"); ?>
        <div class="wrapper">
            <div class="form_area">
                <p class="lead">パスワードを入力し<br>ログインしてください。</p>
                <p class="blue">ログインパスワード：</p>
                <form class="post_password" action="<?php echo home_url( '/wp-login.php?action=postpass' ) ?>" method="post">
                    <div><input name="post_password" type="password" size="24"></div>
                    <?php echo $error_message; ?>
                    <input type="submit" name="Submit" value="ログイン">
                </form>
            </div>
            <p class="back"><a href="/lot">サイト一覧に戻る</a></p>
            <p class="white note">ログインができない、パスワードを紛失されたなどの場合は、弊社タクトホーム担当者までご連絡ください。</p>
        </div>
    <?php else :
        get_header();
    ?>

        <body id="property_page">

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T59RR54"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7V53XT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

            <div id="mv">
                <div class="inner">
                    <div class="flex">
                        <div class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo_01.png" alt="GRAFARE">
                            <p>ハウスメーカー・<br class="sp">工務店・販売会社様限定<br>会員専用サイト</p>
                        </div>
                        <div class="logo_tacthome">
                            <a href="https://www.tacthome.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/logo_02.png" alt="タクトホーム株式会社"></a>
                        </div>
                    </div>
                    <h1 class="ff_smin">北 日 本 エ リ ア<br><span>未 公 開 物 件</span><br>完成宅地販売<br>（建築条件無し）</h1>
                </div>
            </div>
            <main>
                <section id="property">
                    <div class="inner">
                        <h2 class="ff_smin blue">施工会社様のメリットを最大化させる<br>完成宅地でお渡しします</h2>
                        <p class="property_note">タクトホームの条件無し売地では、<br class="sp">完成宅地でお引き渡しする事で<br>施工会社様の負担を無くし、即着工する事が可能です。</p>

                        <div class="property_area">
                            <h3 class="ff_smin">未公開 建築条件無し売地をエリアから選ぶ</h3>
                            <div class="flex nomap">
                                <?php
                                $group_field = get_field('kitanihon_mikoukai');
                                ?>

                                <div class="box">
                                    <div class="link">

                                        <p class="pref">北海道</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['hokkaidou']['link']) : ?><a href="<?php echo $group_field['hokkaidou']['url']; ?>" target="_blank" class="blank <?= isset($group_field['hokkaidou']['class1']) ? $group_field['hokkaidou']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・北海道
                                                    <?php if ($group_field['hokkaidou']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link">
                                        <p class="pref">東北</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['iwate']['link']) : ?><a href="<?php echo $group_field['iwate']['url']; ?>" target="_blank" class="blank <?= isset($group_field['iwate']['class1']) ? $group_field['iwate']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・岩手県
                                                    <?php if ($group_field['iwate']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['miyagi']['link']) : ?><a href="<?php echo $group_field['miyagi']['url']; ?>" target="_blank" class="blank <?= isset($group_field['miyagi']['class1']) ? $group_field['miyagi']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・宮城県
                                                    <?php if ($group_field['miyagi']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['fukushima']['link']) : ?><a href="<?php echo $group_field['fukushima']['url']; ?>" target="_blank" class="blank <?= isset($group_field['fukushima']['class1']) ? $group_field['fukushima']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・福島県
                                                    <?php if ($group_field['fukushima']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['yamagata']['link']) : ?><a href="<?php echo $group_field['yamagata']['url']; ?>" target="_blank" class="blank <?= isset($group_field['yamagata']['class1']) ? $group_field['yamagata']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・山形県
                                                    <?php if ($group_field['yamagata']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link">
                                        <p class="pref">甲信越</p>
                                        <ul>
                                        <li>
                                                <?php if ($group_field['niigata_yamanashi_nagano']['link']) : ?><a href="<?php echo $group_field['niigata_yamanashi_nagano']['url']; ?>" target="_blank" class="blank <?= isset($group_field['niigata_yamanashi_nagano']['class1']) ? $group_field['niigata_yamanashi_nagano']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・新潟県
                                                    <?php if ($group_field['niigata_yamanashi_nagano']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>

                                    </div>

                                </div>


                            </div>
                        </div>

                        <ul class="property_point_list">
                            <li>
                                <div class="box">
                                    <p class="point ff_smin">POINT.1</p>
                                    <p class="ttl ff_smin">即建築着工可能な状態で<br>引き渡します</p>
                                </div>
                                <p class="note">造成上がりとなりますので、水道、<br>造成など完成宅地としてお引き渡しいたします。</p>
                            </li>
                            <li>
                                <div class="box">
                                    <p class="point ff_smin">POINT.2</p>
                                    <p class="ttl ff_smin">資金計画が<br>立てやすい</p>
                                </div>
                                <p class="note">完成宅地となりますので、資金計画が立てやすくなっております。</p>
                            </li>
                            <li>
                                <div class="box">
                                    <p class="point ff_smin">POINT.3</p>
                                    <p class="ttl ff_smin">詳細な情報、販売価格は<br>店舗へお問合せください</p>
                                </div>
                                <p class="note">未公開物件となりますので、詳細は店舗へお問合せください。</p>
                            </li>
                        </ul>
                    </div>
                </section>

                <section id="info">
                    <div class="inner">
                        <p class="lead ff_smin blue pc mt0">タクトホームの分譲土地付住宅は<br>販売会社様にストレスをかけない成約率70％超のサポートシステム！<br>詳しくは下記をご覧ください。</p>
                        <p class="btn">
                            <a href="/lot/kitanihon_myselect/" target="_blank">
                                <picture>
                                    <source media="(min-width:751px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/sales_nagoya_info_bnr.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/sales_nagoya_info_bnr-sp.jpg" alt="販売会社様専用 タクトホームの分譲土地付売地 会員限定サイト">
                                </picture>
                            </a>
                        </p>
                    </div>
                </section>

                <section id="brand">
                    <div class="inner">
                        <h2 class="ff_smin blue">グラファーレブランド</h2>
                        <ul class="brand_list">
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/lineup/grafare/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr01.jpg" alt="新築分譲住宅"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/grafare/" target="_blank" class="blank"><span>新築分譲住宅</span></a></p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/lineup/order/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr02.jpg" alt="注文住宅"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/order/" target="_blank" class="blank"><span>注文住宅</span></a></p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/lineup/MySelect-index/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr03.jpg" alt="マイセレクト（建築条件付売地）"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/MySelect-index/" target="_blank" class="blank"><span>マイセレクト<span class="fs80">（建築条件付売地）</span></span></a></p>
                            </li>
                            <!-- <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/lineup/saisei/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr04.jpg" alt="認定再生住宅"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/saisei/" target="_blank" class="blank"><span>認定再生住宅</span></a></p>
                            </li> -->
                        </ul>
                    </div>
                </section>

                <div id="pagetop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_pagetop.png" alt="ページトップ"></a></div>
            </main>


    <?php
    endif;
endwhile;

get_footer();
    ?>