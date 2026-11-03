<?php
/*
Template Name:sales_西日本
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
                    <h1 class="ff_smin">西 日 本 エ リ ア<br><span>未 公 開 物 件</span><br>完成宅地販売<br>（建築条件無し）</h1>
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
                                $group_field = get_field('nishinihon_mikoukai');
                                ?>

                                <div class="box">
                                    <div class="link">

                                        <p class="pref">北陸</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['ishikawa_fukui']['link']) : ?><a href="<?php echo $group_field['ishikawa_fukui']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ishikawa_fukui']['class1']) ? $group_field['ishikawa_fukui']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・石川県･福井県
                                                    <?php if ($group_field['ishikawa_fukui']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">東海</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['gifu_aichi_mie']['link']) : ?><a href="<?php echo $group_field['gifu_aichi_mie']['url']; ?>" target="_blank" class="blank <?= isset($group_field['gifu_aichi_mie']['class1']) ? $group_field['gifu_aichi_mie']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・岐阜県･愛知県･三重県
                                                    <?php if ($group_field['gifu_aichi_mie']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['shizuoka']['link']) : ?><a href="<?php echo $group_field['shizuoka']['url']; ?>" target="_blank" class="blank <?= isset($group_field['shizuoka']['class1']) ? $group_field['shizuoka']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・静岡県
                                                    <?php if ($group_field['shizuoka']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">中国</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['okayama']['link']) : ?><a href="<?php echo $group_field['okayama']['url']; ?>" target="_blank" class="blank <?= isset($group_field['okayama']['class1']) ? $group_field['okayama']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・岡山県
                                                    <?php if ($group_field['okayama']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['hiroshima_yamaguchi']['link']) : ?><a href="<?php echo $group_field['hiroshima_yamaguchi']['url']; ?>" target="_blank" class="blank <?= isset($group_field['hiroshima_yamaguchi']['class1']) ? $group_field['hiroshima_yamaguchi']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・広島県･山口県
                                                    <?php if ($group_field['hiroshima_yamaguchi']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link">
                                        <p class="pref">関西</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['shiga_kyoto_osaka_nara']['link']) : ?><a href="<?php echo $group_field['shiga_kyoto_osaka_nara']['url']; ?>" target="_blank" class="blank <?= isset($group_field['shiga_kyoto_osaka_nara']['class1']) ? $group_field['shiga_kyoto_osaka_nara']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・滋賀県･京都府･大阪府･奈良県
                                                    <?php if ($group_field['shiga_kyoto_osaka_nara']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['hyogo']['link']) : ?><a href="<?php echo $group_field['hyogo']['url']; ?>" target="_blank" class="blank <?= isset($group_field['hyogo']['class1']) ? $group_field['hyogo']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・兵庫県
                                                    <?php if ($group_field['hyogo']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">四国</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['kochi']['link']) : ?><a href="<?php echo $group_field['kochi']['url']; ?>" target="_blank" class="blank <?= isset($group_field['kochi']['class1']) ? $group_field['kochi']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・高知県
                                                    <?php if ($group_field['kochi']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">北部九州</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['fukuoka_saga']['link']) : ?><a href="<?php echo $group_field['fukuoka_saga']['url']; ?>" target="_blank" class="blank <?= isset($group_field['fukuoka_saga']['class1']) ? $group_field['fukuoka_saga']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・福岡県･佐賀県
                                                    <?php if ($group_field['fukuoka_saga']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="link">
                                        <p class="pref">沖縄</p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['okinawa']['link']) : ?><a href="<?php echo $group_field['okinawa']['url']; ?>" target="_blank" class="blank <?= isset($group_field['okinawa']['class1']) ? $group_field['okinawa']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・沖縄県
                                                    <?php if ($group_field['okinawa']['link']) : ?></a><?php endif; ?>
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
                                <p class="note">造成上がりとなりますので、水道、<br class="pc">造成など完成宅地としてお引き渡しいたします。</p>
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
                        <p class="lead ff_smin blue sp">タクトホームの建築条件付売地は<br>販売会社様にストレスをかけない<br>成約率70％超のサポートシステム！<br>詳しくは下記をご覧ください。</p>
                        <ul class="info_list">
                            <li>
                                <h2 class="ff_smin blue">建築条件付売地販売も対応します！<br>ぜひご紹介ください</h2>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/property/info_img01.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">大好評のデザイン住宅を<br>お好みの間取りでお届けします！</p>
                            </li>
                        </ul>
                        <p class="lead ff_smin blue pc">タクトホームの建築条件付売地は<br>販売会社様にストレスをかけない成約率70％超のサポートシステム！<br>詳しくは下記をご覧ください。</p>
                        <p class="btn">
                            <a href="/lot/nishinihon_myselect/" target="_blank">
                                <picture>
                                    <source media="(min-width:751px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/property/info_bnr.jpg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/property/info_bnr-sp.jpg" alt="販売会社様専用 タクトホームの分譲土地付売地 会員限定サイト">
                                </picture>
                            </a>
                        </p>
                    </div>
                </section>

                <!-- <section id="showroom" class="nagoya">
                    <div class="inner">
                        <h2 class="ff_smin blue">名古屋エリア最大級のショールームへお越しください</h2>
                    </div>

                    <div class="flex">
                        <div class="inner">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/sales_nagoya_info_img03.jpg" alt=""></div>
                            <div class="box">
                                <h3 class="ff_smin blue">建物や土地探しからサンプルのご確認まで住まいの疑問をまるごと解決！</h3>
                                <p class="note">タクトホーム名古屋ショールームは、エリア最大級の規模で、住宅設備や部材の展示から、プラン相談、土地探しや資金相談まで、住まいづくりのあらゆる疑問を楽しく、スムーズに解決いただけます。<br>広々駐車場、キッズルームや授乳室も完備、小さなお子様連れでもどうぞお気軽にお越しください！</p><br>
                                <h3 class="ff_smin blue">タクトホーム　名古屋ショールーム</h3>
                                <p class="note address">〒465-0024　愛知県名古屋市名東区本郷1丁目1番<br>TEL:052-737-8717</p>
                                <div class="flex">
                                    <p class="btn"><a href="https://www.tacthome.co.jp/order/nagoya-showroom/" target="_blank" class="blank"><span>名古屋ショールームページ</span></a></p>

                                    <p class="btn"><a href="https://my.matterport.com/show/?m=rL6pQVgQDej&lang=jp&_fsi=YKkVHO2l" target="_blank" class="blank"><span>VRでショールーム見学</span></a></p>

                                </div>
                            </div>
                        </div>
                    </div>


                </section> -->

                <?php get_template_part('parts-lot-brand'); ?>

                <div id="pagetop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_pagetop.png" alt="ページトップ"></a></div>
            </main>


    <?php
    endif;
endwhile;

get_footer();
    ?>