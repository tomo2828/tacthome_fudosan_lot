<?php
/*
Template Name:myselect_西日本
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

        <body class="lot_2026 myselect_nishinihon">

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
                        <div class="ad01">
                            <div class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/logo_01.png" alt="GRAFARE">
                                <p>販売会社様限定<br>会員専用サイト</p>
                            </div>
                            <div class="ad-con01">
                                <p class="ff_smin">未公開情報!!</p>
                            </div>
                        </div>
                        <div class="logo_tacthome">
                            <a href="https://www.tacthome.co.jp/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/logo_02.png" alt="タクトホーム株式会社"></a>
                        </div>
                    </div>
                    <h1 class="ff_smin lot_title">
                        <small class="lot_region">西 日 本 エ リ ア</small>
                        <span class="lot_catch">わたしらしさを、この住まいに</span>
                        <strong>建築条件付売地</strong>
                        <span class="lot_select_name">MY SELECT</span>
                    </h1>
                </div>
                <div class="ad-con02">
                    <p class="ff_smin">※一部公開済みの物件があります。</p>
                </div>
            </div>

            <nav>
                <div class="inner">
                    <ul class="ff_smin">
                        <li><a href="#reason">タクトホームが<br>支持される理由</a></li>
                        <li><a href="#property">未公開物件情報</a></li>
                        <li><a href="#select">間取り選び<br>カラーセレクト</a></li>
                        <li><a href="#design">デザイン・仕様</a></li>
                        <!-- <li><a href="#modelhouse">モデルハウス<br>ショールーム</a></li> -->
                    </ul>
                </div>
            </nav>

            <div id="fix_nav">
                <div class="inner">
                    <ul class="ff_smin">
                        <li><a href="#reason">タクトホームが<br>支持される理由</a></li>
                        <li><a href="#property">未公開物件情報</a></li>
                        <li><a href="#select">間取り選び<br>カラーセレクト</a></li>
                        <li><a href="#design">デザイン・仕様</a></li>

                    </ul>
                </div>
            </div>
            <main class="top myselect_nagoya">
                <section id="reason">
                    <div class="inner">
                        <h2 class="ff_smin blue">タクトホームの「建築条件付売地 MY SELECT」が<br>多忙な販売会社様から支持される理由</h2>

                        <div class="reason_sec1">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img01.jpg" alt=""></div>
                            <div class="box">
                                <h3 class="ff_smin blue">販売会社様にストレスをかけない<br>成約率70%超のサポートシステム</h3>
                                <p class="note">タクトホームの建築条件付売地 MY SELECTでは、年間6,000棟以上提案される豊富な参考プランの中からベストなプランを選定。専任のアドバイザーがショールームで丁寧にご案内するため、プレゼンテーション以降のご成約率は70％を超えます。もちろん、決済後もしっかりとサポートするので、販売会社様のお手を煩わせることなく、お客様にご満足いただけます。</p>
                            </div>
                        </div>
                    </div>

                    <div class="reason_step">
                        <div class="inner">
                            <h3 class="ff_smin blue">専任スタッフだからできる、<br>成約までの簡単<span>3</span>ステップ</h3>
                            <ul>
                                <li>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img02.jpg" alt="STEP1"></div>
                                    <p class="ttl ff_smin blue">お客様への物件のご紹介<br>プレゼンテーション依頼</p>
                                    <p class="note">お気軽にショールームにお連れください。喜んでプレゼンテーションさせていただきます。<br>※ご依頼はお近くのショールームまで</p>
                                </li>
                                <li>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img03.jpg" alt="STEP2"></div>
                                    <p class="ttl ff_smin blue">専任スタッフによる<br>成約率70％超のプレゼンテーション</p>
                                    <p class="note">お客様へのプレゼンは当社スタッフにお任せください。ご同席なくても問題ございません。</p>
                                </li>
                                <li>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img04.jpg" alt="STEP3"></div>
                                    <p class="ttl ff_smin blue">お引渡しまで安心<br>丁寧なサポート体制</p>
                                    <p class="note">販売会社様の手間をかけないよう、ご契約からお引渡しまで、専任スタッフが責任対応いたします。</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="property">
                    <div class="inner">
                        <h2 class="ff_smin blue">未公開物件情報</h2>
                        <div class="flex">
                            <div class="txtarea">

                                <p class="property_lead ff_smin blue">販売会社様に<br>より早くより良い土地情報を</p>
                                <p class="property_note">タクトホームでは、販売会社様にいち早く最新の物件をご紹介いただけるよう、<br>決済前の未公開物件も積極的にご案内しております。</p>

                            </div>

                            <div class="property_area">
                                <h3 class="ff_smin">未公開 建築条件付売地をエリアから選ぶ</h3>
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
                        </div>

                    </div>
                </section>

                <section id="myselect">
                    <div class="inner">
                        <h2 class="ff_smin blue">タクトホームの<br>「建築条件付売地 MY SELECT」の強み</h2>
                        <ul class="myselect_list">
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img01.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">専任スタッフによる丁寧な対応</p>
                                <p class="note">住宅建築に精通したスタッフが丁寧に対応、<br class="pc">安心してお任せいただけます。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img02.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">洗練されたデザイン性</p>
                                <p class="note">外観や内装、外構に至るまで意匠を凝らした<br class="pc">上質なデザイン住宅を実現します。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img03.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">紹介料6％</p>
                                <p class="note">建物代金の6％を紹介料としてお支払いいたします。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img04.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">高品質な住宅性能</p>
                                <p class="note">住宅性能主要6項目について最高等級を取得。<br>確かな住宅性能で暮らしを守ります。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img05.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">その場でプラン・パース提案</p>
                                <p class="note">お客様をお待たせせず、プランやパースを<br class="pc">ご提案いたします。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_img06.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">安心のオンライン対応</p>
                                <p class="note">遠方にお住まいのお客様でも<br class="pc">オンラインで対応致します。</p>
                            </li>
                        </ul>
                    </div>
                </section>

                <?php get_template_part('parts-lot-select'); ?>

                <section id="design">
                    <div class="inner">
                        <h2 class="ff_smin blue">グラファーレのデザイン</h2>
                    </div>
                    <div class="design_sec1">
                        <div class="inner flex">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/design_bg.jpg" alt=""></div>
                            <div class="box">
                                <h3 class="ff_smin blue">GRAFARE<br>DESIGN QUALITY</h3>
                                <p class="note">グラファーレが選ばれる理由の一つに、建物のデザイン性が挙げられます。累計70,000棟に及ぶ住宅建築実績から、常に機能性や意匠性に優れたデザイン性の高い住宅デザインを追求してきました。上質な部材と熟練の技術で磨き上げられたグラファーレのデザインにご期待ください。</p>
                                <p class="btn"><a href="https://www.tacthome.co.jp/grafare/gallery/" target="_blank" class="blank"><span>施工例ギャラリーを見る</span></a></p>
                            </div>
                        </div>
                    </div>
                </section>


                <?php get_template_part('parts-lot-catalog'); ?>

                <section id="quality">
                    <div class="inner">
                        <h2 class="ff_smin blue">グラファーレ品質のご紹介</h2>
                        <ul class="quality_list">
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/contents/construction01/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr01.jpg" alt="地震に強い家"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/contents/construction01/" target="_blank" class="blank">地震に強い家</a></p>
                                <p class="note">分譲住宅で全棟採用「地震に強い家」<br>IDS工法×住宅性能評価/最高等級6項目</p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/contents/construction02/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr02.jpg" alt="グラファーレのデザインと性能"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/contents/construction02/" target="_blank" class="blank">グラファーレのデザインと性能</a></p>
                                <p class="note">「洗練されたデザイン」でありながら、<br>「地震に強く頑丈で高性能な住宅」をご提供</p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr03_2.jpg" alt="タクトホームの店舗紹介"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank" class="blank">タクトホームの店舗紹介</a></p>
                                <p class="note">物件情報や建物仕様の詳細は各店舗にてご案内中<br>お客様の案内もご安心ください</p>
                            </li>
                        </ul>
                    </div>
                </section>

                <?php get_template_part('parts-lot-order-catalog'); ?>

                <?php get_template_part('parts-lot-brand'); ?>

                <div id="pagetop"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/common/images/btn_pagetop.png" alt="ページトップ"></a></div>
            </main>
    <?php
    endif;
endwhile;

get_footer();
    ?>