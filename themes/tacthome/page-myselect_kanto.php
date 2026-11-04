<?php
/*
Template Name:myselect_関東
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

        <body>

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
                                <p>販売会社様限定<br>会員専用サイト<br></p>
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
                        <span class="lot_catch">わたしらしさを、この住まいに</span>
                        <span class="lot_title_main">
                            <strong>建築条件付売地</strong>
                            <span class="lot_select_name">MY SELECT</span>
                        </span>
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
            <main class="top">
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
                        <p class="property_lead ff_smin blue">販売会社様により早くより良い土地情報を</p>
                        <p class="property_note">タクトホームでは、販売会社様にいち早く最新の物件をご紹介いただけるよう、<br>決済前の未公開物件も積極的にご案内しております。</p>

                        <div class="property_area">
                            <h3 class="ff_smin">未公開 建築条件付売地をエリアから選ぶ</h3>
                            <div class="flex">
                                <?php
                                $group_field = get_field('kanto_mikoukai');
                                ?>

                                <div class="map">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 476.43 386.44">
                                        <defs>
                                            <pattern id="_map_bg05" data-name="map_bg05" x="0" y="0" width="9.52" height="9.52" patternTransform="translate(-5717.98 -5727.75) scale(.28)" patternUnits="userSpaceOnUse" viewBox="0 0 9.52 9.52">
                                                <g>
                                                    <rect class="map_bg05_2" width="9.52" height="9.52" />
                                                    <rect class="map_bg05_4" width="9.52" height="9.52" />
                                                    <circle class="map_bg05_3" cx="4.76" cy="4.76" r="2.5" />
                                                </g>
                                            </pattern>
                                            <pattern id="_map_bg06" data-name="map_bg06" x="0" y="0" width="9.52" height="9.52" patternTransform="translate(-5717.98 -5727.75) scale(.28)" patternUnits="userSpaceOnUse" viewBox="0 0 9.52 9.52">
                                                <g>
                                                    <rect class="map_bg06_2" width="9.52" height="9.52" />
                                                    <rect class="map_bg06_4" width="9.52" height="9.52" />
                                                    <circle class="map_bg06_3" cx="4.76" cy="4.76" r="2.5" />
                                                </g>
                                            </pattern>
                                        </defs>
                                        <g>
                                            <g>
                                                <g>
                                                    <a <?php if ($group_field['gunma']['link']) : ?> href="<?php echo $group_field['gunma']['url']; ?>" class="<?= isset($group_field['gunma']['class2']) ? $group_field['gunma']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="gunma">
                                                            <polygon class="map_bg05" points="0 107.72 0 0 145.16 0 145.16 107.72 0 107.72" />
                                                            <text class="map_txt2" transform="translate(56.93 60.17)">群馬</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tochigi']['link']) : ?> href="<?php echo $group_field['tochigi']['url']; ?>" class="<?= isset($group_field['tochigi']['class2']) ? $group_field['tochigi']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tochigi">
                                                            <polygon class="map_bg05" points="156.55 107.72 156.55 0 289.32 0 289.32 107.72 156.55 107.72" />
                                                            <text class="map_txt2" transform="translate(207.01 60.17)">栃木</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['saitama_seibu']['link']) : ?> href="<?php echo $group_field['saitama_seibu']['url']; ?>" class="<?= isset($group_field['saitama_seibu']['class2']) ? $group_field['saitama_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_seibu">
                                                            <polygon class="map_bg05" points="0 117.98 0 195.99 231.85 195.99 231.85 168.25 124.59 168.97 123.85 118.12 0 117.98" />
                                                            <text class="map_txt2" transform="translate(54.4 162.12)">西部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['chuou_hokubu']['link']) : ?> href="<?php echo $group_field['chuou_hokubu']['url']; ?>" class="<?= isset($group_field['chuou_hokubu']['class2']) ? $group_field['chuou_hokubu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_chuou">
                                                            <polyline class="map_bg05" points="244.54 117.66 123.85 118.12 123.85 168.71 231.85 168.25 231.85 195.67 267.25 195.67 267.25 156.67 244.54 156.98" />
                                                            <text class="map_txt2" transform="translate(151.51 147.42)">中央・北部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tobu']['link']) : ?> href="<?php echo $group_field['tobu']['url']; ?>" class="<?= isset($group_field['tobu']['class2']) ? $group_field['tobu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_tobu">
                                                            <polygon class="map_bg05" points="244.54 117.98 244.54 156.98 267.25 156.98 267.25 195.67 289.32 195.99 289.32 117.98 244.54 117.98" />
                                                            <text class="map_txt2" transform="translate(252.55 141.34)">東部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tama_nansei']['link']) : ?> href="<?php echo $group_field['tama_nansei']['url']; ?>" class="<?= isset($group_field['tama_nansei']['class2']) ? $group_field['tama_nansei']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_nansei">
                                                            <polygon class="map_bg05" points="156.55 206.3 170.93 241.3 187.69 241.24 197.97 281.14 86.32 281.14 54.3 205.96 156.55 206.3" />
                                                            <text class="map_txt2" transform="translate(92.3 253.58)">多摩南西</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['kanagawa_seibu']['link']) : ?> href="<?php echo $group_field['kanagawa_seibu']['url']; ?>" class="<?= isset($group_field['kanagawa_seibu']['class2']) ? $group_field['kanagawa_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="kanagawa_seibu">
                                                            <path class="map_bg05" d="m86.3,291.12l-.24,81.92h45.82v-16.41s.24-3.04,3.27-4.69l3.03-1.65,81.54-.22s4.19,1.07,5.38,3.43l1.19,2.36.4,17.17h62.64v-34.95l-77.53-12.72-22.78-34.26h-102.72Z" />
                                                            <text class="map_txt2" transform="translate(134.36 326.32)">西部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['23ku']['link']) : ?> href="<?php echo $group_field['23ku']['url']; ?>" class="<?= isset($group_field['23ku']['class2']) ? $group_field['23ku']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_23ku">
                                                            <rect class="map_bg05" x="215.85" y="206.3" width="73.47" height="74.85" />
                                                            <text class="map_txt2" transform="translate(240.56 249.45)">23区</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tama_touhoku']['link']) : ?> href="<?php echo $group_field['tama_touhoku']['url']; ?>" class="<?= isset($group_field['tama_touhoku']['class2']) ? $group_field['tama_touhoku']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_tohoku">
                                                            <polygon class="map_bg05" points="156.55 206.3 171.81 241.24 187.69 241.24 197.97 281.14 215.85 281.14 215.85 206.3 156.55 206.3" />
                                                            <polyline class="map_line" points="156.55 205.96 171.81 241.24 187.69 241.24 197.97 281.14" />
                                                            <line class="map_line" x1="215.85" y1="205.96" x2="215.85" y2="281.88" />
                                                            <text class="map_txt2" transform="translate(157.67 228.35)">多摩東北</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['yokohama_kawasaki']['link']) : ?> href="<?php echo $group_field['yokohama_kawasaki']['url']; ?>" class="<?= isset($group_field['yokohama_kawasaki']['class2']) ? $group_field['yokohama_kawasaki']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="kanagawa_yokohama">
                                                            <polygon class="map_bg05" points="189.83 291.33 212.4 325.63 289.32 338.09 289.32 291.12 189.83 291.33" />
                                                            <text class="map_txt2" transform="translate(213.08 314.5)">横浜・川崎</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['ibaraki']['link']) : ?> href="<?php echo $group_field['ibaraki']['url']; ?>" class="<?= isset($group_field['ibaraki']['class2']) ? $group_field['ibaraki']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="ibaraki">
                                                            <path class="map_bg05" d="m297.88,149.05V0h149.79v93.77c0,1.74.52,3.36,1.42,4.72l26.32,50.56h-177.54Z" />
                                                            <text class="map_txt2" transform="translate(364.14 81.4)">茨城</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['toukatsu']['link']) : ?> href="<?php echo $group_field['toukatsu']['url']; ?>" class="<?= isset($group_field['toukatsu']['class2']) ? $group_field['toukatsu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="chiba_matsudo">
                                                            <polygon class="map_bg05" points="297.88 159.3 297.88 221.02 351.92 221.02 351.92 262.3 377 262.3 377 159.3 297.88 159.3" />
                                                            <text class="map_txt2" transform="translate(306.77 196.14)">東葛</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['keiyou_seibu']['link']) : ?> href="<?php echo $group_field['keiyou_seibu']['url']; ?>" class="<?= isset($group_field['keiyou_seibu']['class2']) ? $group_field['keiyou_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="chiba_ichikawa">
                                                            <polygon class="map_bg05" points="351.92 222.02 351.92 259.45 320.49 281.88 297.88 282.11 297.88 222.27 351.92 222.02" />
                                                            <text class="map_txt2" transform="translate(302.21 244.5)">京葉<tspan x="-.37" y="20">西部</tspan></text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['keiyou_toubu']['link']) : ?> href="<?php echo $group_field['keiyou_toubu']['url']; ?>" class="<?= isset($group_field['keiyou_toubu']['class2']) ? $group_field['keiyou_toubu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="chiba_chuou">
                                                            <path class="map_bg05" d="m377,159.3v102.39l-25.08.61v-10.23l-30.66,30.4,11.24.56s1.14-1.14,3.21,1.93,2.52,4.69,2.52,4.69l.14,96.8h114.42l.06-94.22,13.84-110.6,9.75-22.31h-99.43Z" />
                                                            <text class="map_txt2" transform="translate(342.51 305.67)">京葉東部･房総</text>
                                                        </g>
                                                    </a>
                                                </g>
                                                <polyline class="map_line" points="244.54 117.98 244.54 156.98 267.25 156.98 267.25 195.99" />
                                                <polyline class="map_line" points="123.85 119.44 123.85 169.03 231.85 167.57 231.85 195.99" />
                                                <polyline class="map_line" points="297.88 221.02 351.92 221.02 351.92 261.69 377 261.69 377 159.3" />
                                                <line class="map_line" x1="351.92" y1="249.45" x2="319.49" y2="281.88" />
                                                <polyline class="map_line" points="189.02 291.12 211.8 325.37 289.32 338.09" />
                                            </g>
                                        </g>
                                    </svg>
                                </div>

                                <div class="box">
                                    <div class="link">
                                        <p class="pref">群馬
                                            <span class="new_link">
                                                <?php if ($group_field['gunma_new']['link']) : ?><a href="<?php echo $group_field['gunma_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['gunma_new']['class1']) ? $group_field['gunma_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['gunma_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['gunma']['link']) : ?><a href="<?php echo $group_field['gunma']['url']; ?>" target="_blank" class="blank <?= isset($group_field['gunma']['class1']) ? $group_field['gunma']['class1'] : ''; ?>"><?php endif; ?>
                                                    ･群馬エリア
                                                    <?php if ($group_field['gunma']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">埼玉
                                            <span class="new_link">
                                                <?php if ($group_field['saitama_new']['link']) : ?><a href="<?php echo $group_field['saitama_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['saitama_new']['class1']) ? $group_field['saitama_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['saitama_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['saitama_seibu']['link']) : ?><a href="<?php echo $group_field['saitama_seibu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['saitama_seibu']['class1']) ? $group_field['saitama_seibu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・西部エリア
                                                    <?php if ($group_field['saitama_seibu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['chuou_hokubu']['link']) : ?><a href="<?php echo $group_field['chuou_hokubu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['chuou_hokubu']['class1']) ? $group_field['chuou_hokubu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・中央・北部エリア
                                                    <?php if ($group_field['chuou_hokubu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tobu']['link']) : ?><a href="<?php echo $group_field['tobu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tobu']['class1']) ? $group_field['tobu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・東部エリア
                                                    <?php if ($group_field['tobu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">東京
                                            <span class="new_link">
                                                <?php if ($group_field['tokyo_new']['link']) : ?><a href="<?php echo $group_field['tokyo_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tokyo_new']['class1']) ? $group_field['tokyo_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['tokyo_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['23ku']['link']) : ?><a href="<?php echo $group_field['23ku']['url']; ?>" target="_blank" class="blank <?= isset($group_field['23ku']['class1']) ? $group_field['23ku']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・23区エリア
                                                    <?php if ($group_field['23ku']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tama_touhoku']['link']) : ?><a href="<?php echo $group_field['tama_touhoku']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tama_touhoku']['class1']) ? $group_field['tama_touhoku']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・多摩東北エリア
                                                    <?php if ($group_field['tama_touhoku']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tama_nansei']['link']) : ?><a href="<?php echo $group_field['tama_nansei']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tama_nansei']['class1']) ? $group_field['tama_nansei']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・多摩南西エリア
                                                    <?php if ($group_field['tama_nansei']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link">
                                        <p class="pref">栃木
                                            <span class="new_link">
                                                <?php if ($group_field['tochigi_new']['link']) : ?><a href="<?php echo $group_field['tochigi_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tochigi_new']['class1']) ? $group_field['tochigi_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['tochigi_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['tochigi']['link']) : ?><a href="<?php echo $group_field['tochigi']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tochigi']['class1']) ? $group_field['tochigi']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・栃木エリア
                                                    <?php if ($group_field['tochigi']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">茨城
                                            <span class="new_link">
                                                <?php if ($group_field['ibaraki_new']['link']) : ?><a href="<?php echo $group_field['ibaraki_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ibaraki_new']['class1']) ? $group_field['ibaraki_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['ibaraki_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['ibaraki']['link']) : ?><a href="<?php echo $group_field['ibaraki']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ibaraki']['class1']) ? $group_field['ibaraki']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・茨城エリア
                                                    <?php if ($group_field['ibaraki']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">千葉
                                            <span class="new_link">
                                                <?php if ($group_field['chiba_new']['link']) : ?><a href="<?php echo $group_field['chiba_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['chiba_new']['class1']) ? $group_field['chiba_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['chiba_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['keiyou_toubu']['link']) : ?><a href="<?php echo $group_field['keiyou_toubu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['keiyou_toubu']['class1']) ? $group_field['keiyou_toubu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・京葉東部・房総エリア
                                                    <?php if ($group_field['keiyou_toubu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['toukatsu']['link']) : ?><a href="<?php echo $group_field['toukatsu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['toukatsu']['class1']) ? $group_field['toukatsu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・東葛エリア
                                                    <?php if ($group_field['toukatsu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['keiyou_seibu']['link']) : ?><a href="<?php echo $group_field['keiyou_seibu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['keiyou_seibu']['class1']) ? $group_field['keiyou_seibu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・京葉西部エリア
                                                    <?php if ($group_field['keiyou_seibu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">神奈川
                                            <span class="new_link">
                                                <?php if ($group_field['kanagawa_new']['link']) : ?><a href="<?php echo $group_field['kanagawa_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['kanagawa_new']['class1']) ? $group_field['kanagawa_new']['class1'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['kanagawa_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['yokohama_kawasaki']['link']) : ?><a href="<?php echo $group_field['yokohama_kawasaki']['url']; ?>" target="_blank" class="blank <?= isset($group_field['yokohama_kawasaki']['class1']) ? $group_field['yokohama_kawasaki']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・横浜・川崎エリア
                                                    <?php if ($group_field['yokohama_kawasaki']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['kanagawa_seibu']['link']) : ?><a href="<?php echo $group_field['kanagawa_seibu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['kanagawa_seibu']['class1']) ? $group_field['kanagawa_seibu']['class1'] : ''; ?>"><?php endif; ?>
                                                    ・西部エリア
                                                    <?php if ($group_field['kanagawa_seibu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
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

                <?php get_template_part('parts-lot-showrooms'); ?>
<!-- <h2 id="modelhouse_showroom" class="ff_smin blue">お近くのショールームへお越しください</h2>
                        <ul class="showroom_list">
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop01.jpg" alt="本社ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">本社ショールーム</p>
                                        <p class="note">TEL:042-464-8788</p>
                                    </div>
                                    <p class="btn"><a href="https://my.matterport.com/show/?m=HRKuwLd8z96" target="_blank" class="arw">VR見学</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop02.jpg" alt="多摩ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">多摩ショールーム</p>
                                        <p class="note">TEL:042-349-2788</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop12.jpg" alt="高円寺ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">高円寺ショールーム</p>
                                        <p class="note">TEL:03-5327-8844</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop08.jpg" alt="立川ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">立川ショールーム</p>
                                        <p class="note">TEL:042-529-8788</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop03.jpg" alt="志木ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">志木ショールーム</p>
                                        <p class="note">TEL:048-486-8788</p>
                                    </div>
                                    <p class="btn"><a href="https://my.matterport.com/show/?m=a68ovimvDrn&lang=jp" target="_blank" class="arw">VR見学</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop04.jpg" alt="大宮ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">大宮ショールーム</p>
                                        <p class="note">TEL:048-669-8788</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop06.jpg" alt="千葉営業所"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">千葉営業所</p>
                                        <p class="note">TEL:043-382-8588</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop07.jpg" alt="つきみ野ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">つきみ野ショールーム</p>
                                        <p class="note">TEL:042-706-8988</p>
                                    </div>
                                    <p class="btn"><a href="https://my.matterport.com/show/?m=C4z9LAtF9PJ&lang=jp" target="_blank" class="arw">VR見学</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop09.jpg" alt="藤沢ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">藤沢ショールーム</p>
                                        <p class="note">TEL:0466-55-6588</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop05.jpg" alt="柏ショールーム"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">柏ショールーム</p>
                                        <p class="note">TEL:04-7197-5288</p>
                                    </div>
                                    <p class="btn"><a href="https://my.matterport.com/show/?m=yE8jWeFdmHm" target="_blank" class="arw">VR見学</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop11.jpg" alt="太田店"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">太田店</p>
                                        <p class="note">TEL:0276-57-8939</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_shop10.jpg" alt="高崎店"></div>
                                <div class="flex">
                                    <div class="box">
                                        <p class="name ff_smin blue">高崎店</p>
                                        <p class="note">TEL:027-386-9525</p>
                                    </div>
                                    <p class="btn"></p>
                                </div>
                            </li>

                        </ul> -->

                <?php get_template_part('parts-lot-catalog'); ?>

                <section id="quality">
                    <div class="inner">
                        <h2 class="ff_smin blue">グラファーレ品質のご紹介</h2>
                        <ul class="quality_list">
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/grafare/construction01/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr01.jpg" alt="地震に強い家"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/grafare/construction01/" target="_blank" class="blank">地震に強い家</a></p>
                                <p class="note">分譲住宅で全棟採用「地震に強い家」<br>IDS工法×住宅性能評価/最高等級6項目</p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/grafare/construction02/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr02.jpg" alt="グラファーレのデザインと性能"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/grafare/construction02/" target="_blank" class="blank">グラファーレのデザインと性能</a></p>
                                <p class="note">「洗練されたデザイン」でありながら、<br>「地震に強く頑丈で高性能な住宅」をご提供</p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr03.jpg" alt="タクトホームの店舗紹介"></a></div>
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