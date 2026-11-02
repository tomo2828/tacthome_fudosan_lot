<?php
/*
Template Name:myselect_関東_test
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
                    <h1 class="ff_smin"><span>分譲土地付住宅</span><br>～建築条件付売地・新築注文住宅～</h1>
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
                        <li><a href="#modelhouse">モデルハウス<br>ショールーム</a></li>
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
                        <li><a href="#modelhouse">モデルハウス<br>ショールーム</a></li>
                    </ul>
                </div>
            </div>
            <main class="top">
                <section id="reason">
                    <div class="inner">
                        <h2 class="ff_smin blue">「分譲土地付住宅」と言えばタクトホーム<br>多忙な販売会社様から支持される理由</h2>

                        <div class="reason_sec1">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img01.jpg" alt=""></div>
                            <div class="box">
                                <h3 class="ff_smin blue">販売会社様にストレスをかけない<br>成約率70%超のサポートシステム</h3>
                                <p class="note">タクトホームの分譲土地付住宅では、年間5,000棟以上提案される豊富な参考プランの中からベストなプランを選定。専任のアドバイザーがショールームで丁寧にご案内するため、プレゼンテーション以降のご成約率は70％を超えます。もちろん、決済後もしっかりとサポートするので、販売会社様のお手を煩わせることなく、お客様にご満足いただいております。</p>
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
                                    <p class="note">お気軽にショールームにお連れください。喜んでプレゼンテーションさせていただきます。<br>※ご依頼は<a href="#modelhouse_showroom">お近くのショールーム</a>まで</p>
                                </li>
                                <li>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/reason_img03.jpg" alt="STEP2"></div>
                                    <p class="ttl ff_smin blue">専任スタッフによる<br>成約率70％超のプレゼンテーション</p>
                                    <p class="note">お客様へのプレゼンは当社スタッフにお任せください。ご同席いただかなくても問題ございません。</p>
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
                            <h3 class="ff_smin">未公開 分譲土地付住宅をエリアから選ぶ</h3>
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
                                                    <a <?php if ($group_field['gunma']['link']) : ?> href="<?php echo $group_field['gunma']['url']; ?>" class="<?= isset($group_field['gunma']['class1']) ? $group_field['gunma']['class1'] : ''; ?> <?= isset($group_field['gunma']['class2']) ? $group_field['gunma']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="gunma">
                                                            <polygon class="map_bg05" points="0 107.72 0 0 145.16 0 145.16 107.72 0 107.72" />
                                                            <text class="map_txt2" transform="translate(56.93 60.17)">群馬</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tochigi']['link']) : ?> href="<?php echo $group_field['tochigi']['url']; ?>" class="<?= isset($group_field['tochigi']['class1']) ? $group_field['tochigi']['class1'] : ''; ?> <?= isset($group_field['tochigi']['class2']) ? $group_field['tochigi']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tochigi">
                                                            <polygon class="map_bg05" points="156.55 107.72 156.55 0 289.32 0 289.32 107.72 156.55 107.72" />
                                                            <text class="map_txt2" transform="translate(207.01 60.17)">栃木</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['saitama_seibu']['link']) : ?> href="<?php echo $group_field['saitama_seibu']['url']; ?>" class="<?= isset($group_field['saitama_seibu']['class1']) ? $group_field['saitama_seibu']['class1'] : ''; ?> <?= isset($group_field['saitama_seibu']['class2']) ? $group_field['saitama_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_seibu">
                                                            <polygon class="map_bg05" points="0 117.98 0 195.99 231.85 195.99 231.85 168.25 124.59 168.97 123.85 118.12 0 117.98" />
                                                            <text class="map_txt2" transform="translate(54.4 162.12)">西部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['chuou_hokubu']['link']) : ?> href="<?php echo $group_field['chuou_hokubu']['url']; ?>" class="<?= isset($group_field['chuou_hokubu']['class1']) ? $group_field['chuou_hokubu']['class1'] : ''; ?> <?= isset($group_field['chuou_hokubu']['class2']) ? $group_field['chuou_hokubu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_chuou">
                                                            <polyline class="map_bg05" points="244.54 117.66 123.85 118.12 123.85 168.71 231.85 168.25 231.85 195.67 267.25 195.67 267.25 156.67 244.54 156.98" />
                                                            <text class="map_txt2" transform="translate(151.51 147.42)">中央・北部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tobu']['link']) : ?> href="<?php echo $group_field['tobu']['url']; ?>" class="<?= isset($group_field['tobu']['class1']) ? $group_field['tobu']['class1'] : ''; ?> <?= isset($group_field['tobu']['class2']) ? $group_field['tobu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="saitama_tobu">
                                                            <polygon class="map_bg05" points="244.54 117.98 244.54 156.98 267.25 156.98 267.25 195.67 289.32 195.99 289.32 117.98 244.54 117.98" />
                                                            <text class="map_txt2" transform="translate(252.55 141.34)">東部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tama_nansei']['link']) : ?> href="<?php echo $group_field['tama_nansei']['url']; ?>" class="<?= isset($group_field['tama_nansei']['class1']) ? $group_field['tama_nansei']['class1'] : ''; ?> <?= isset($group_field['tama_nansei']['class2']) ? $group_field['tama_nansei']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_nansei">
                                                            <polygon class="map_bg05" points="156.55 206.3 170.93 241.3 187.69 241.24 197.97 281.14 86.32 281.14 54.3 205.96 156.55 206.3" />
                                                            <text class="map_txt2" transform="translate(92.3 253.58)">多摩南西</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['kanagawa_seibu']['link']) : ?> href="<?php echo $group_field['kanagawa_seibu']['url']; ?>" class="<?= isset($group_field['kanagawa_seibu']['class1']) ? $group_field['kanagawa_seibu']['class1'] : ''; ?> <?= isset($group_field['kanagawa_seibu']['class2']) ? $group_field['kanagawa_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="kanagawa_seibu">
                                                            <path class="map_bg05" d="m86.3,291.12l-.24,81.92h45.82v-16.41s.24-3.04,3.27-4.69l3.03-1.65,81.54-.22s4.19,1.07,5.38,3.43l1.19,2.36.4,17.17h62.64v-34.95l-77.53-12.72-22.78-34.26h-102.72Z" />
                                                            <text class="map_txt2" transform="translate(134.36 326.32)">西部</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['23ku']['link']) : ?> href="<?php echo $group_field['23ku']['url']; ?>" class="<?= isset($group_field['23ku']['class1']) ? $group_field['23ku']['class1'] : ''; ?> <?= isset($group_field['23ku']['class2']) ? $group_field['23ku']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_23ku">
                                                            <rect class="map_bg05" x="215.85" y="206.3" width="73.47" height="74.85" />
                                                            <text class="map_txt2" transform="translate(240.56 249.45)">23区</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['tama_touhoku']['link']) : ?> href="<?php echo $group_field['tama_touhoku']['url']; ?>" class="<?= isset($group_field['tama_touhoku']['class1']) ? $group_field['tama_touhoku']['class1'] : ''; ?> <?= isset($group_field['tama_touhoku']['class2']) ? $group_field['tama_touhoku']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="tokyo_tohoku">
                                                            <polygon class="map_bg05" points="156.55 206.3 171.81 241.24 187.69 241.24 197.97 281.14 215.85 281.14 215.85 206.3 156.55 206.3" />
                                                            <polyline class="map_line" points="156.55 205.96 171.81 241.24 187.69 241.24 197.97 281.14" />
                                                            <line class="map_line" x1="215.85" y1="205.96" x2="215.85" y2="281.88" />
                                                            <text class="map_txt2" transform="translate(157.67 228.35)">多摩東北</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['yokohama_kawasaki']['link']) : ?> href="<?php echo $group_field['yokohama_kawasaki']['url']; ?>" class="<?= isset($group_field['yokohama_kawasaki']['class1']) ? $group_field['yokohama_kawasaki']['class1'] : ''; ?> <?= isset($group_field['yokohama_kawasaki']['class2']) ? $group_field['yokohama_kawasaki']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="kanagawa_yokohama">
                                                            <polygon class="map_bg05" points="189.83 291.33 212.4 325.63 289.32 338.09 289.32 291.12 189.83 291.33" />
                                                            <text class="map_txt2" transform="translate(213.08 314.5)">横浜・川崎</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['ibaraki']['link']) : ?> href="<?php echo $group_field['ibaraki']['url']; ?>" class="<?= isset($group_field['ibaraki']['class1']) ? $group_field['ibaraki']['class1'] : ''; ?> <?= isset($group_field['ibaraki']['class2']) ? $group_field['ibaraki']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="ibaraki">
                                                            <path class="map_bg05" d="m297.88,149.05V0h149.79v93.77c0,1.74.52,3.36,1.42,4.72l26.32,50.56h-177.54Z" />
                                                            <text class="map_txt2" transform="translate(364.14 81.4)">茨城</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['toukatsu']['link']) : ?> href="<?php echo $group_field['toukatsu']['url']; ?>" class="<?= isset($group_field['toukatsu']['class1']) ? $group_field['toukatsu']['class1'] : ''; ?> <?= isset($group_field['toukatsu']['class2']) ? $group_field['toukatsu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="chiba_matsudo">
                                                            <polygon class="map_bg05" points="297.88 159.3 297.88 221.02 351.92 221.02 351.92 262.3 377 262.3 377 159.3 297.88 159.3" />
                                                            <text class="map_txt2" transform="translate(306.77 196.14)">東葛</text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['keiyou_seibu']['link']) : ?> href="<?php echo $group_field['keiyou_seibu']['url']; ?>" class="<?= isset($group_field['keiyou_seibu']['class1']) ? $group_field['keiyou_seibu']['class1'] : ''; ?> <?= isset($group_field['keiyou_seibu']['class2']) ? $group_field['keiyou_seibu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                                        <g class="chiba_ichikawa">
                                                            <polygon class="map_bg05" points="351.92 222.02 351.92 259.45 320.49 281.88 297.88 282.11 297.88 222.27 351.92 222.02" />
                                                            <text class="map_txt2" transform="translate(302.21 244.5)">京葉<tspan x="-.37" y="20">西部</tspan></text>
                                                        </g>
                                                    </a>
                                                    <a <?php if ($group_field['keiyou_toubu']['link']) : ?> href="<?php echo $group_field['keiyou_toubu']['url']; ?>" class="<?= isset($group_field['keiyou_toubu']['class1']) ? $group_field['keiyou_toubu']['class1'] : ''; ?> <?= isset($group_field['keiyou_toubu']['class2']) ? $group_field['keiyou_toubu']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
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
                                                <?php if ($group_field['gunma_new']['link']) : ?><a href="<?php echo $group_field['gunma_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['gunma_new']['class1']) ? $group_field['gunma_new']['class1'] : ''; ?> <?= isset($group_field['gunma_new']['class2']) ? $group_field['gunma_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['gunma_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['gunma']['link']) : ?><a href="<?php echo $group_field['gunma']['url']; ?>" target="_blank" class="blank <?= isset($group_field['gunma']['class1']) ? $group_field['gunma']['class1'] : ''; ?> <?= isset($group_field['gunma']['class2']) ? $group_field['gunma']['class2'] : ''; ?>"><?php endif; ?>
                                                    ･群馬エリア
                                                    <?php if ($group_field['gunma']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">埼玉
                                            <span class="new_link">
                                                <?php if ($group_field['saitama_new']['link']) : ?><a href="<?php echo $group_field['saitama_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['saitama_new']['class1']) ? $group_field['saitama_new']['class1'] : ''; ?> <?= isset($group_field['saitama_new']['class2']) ? $group_field['saitama_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['saitama_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['saitama_seibu']['link']) : ?><a href="<?php echo $group_field['saitama_seibu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['saitama_seibu']['class1']) ? $group_field['saitama_seibu']['class1'] : ''; ?> <?= isset($group_field['saitama_seibu']['class2']) ? $group_field['saitama_seibu']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・西部エリア
                                                    <?php if ($group_field['saitama_seibu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['chuou_hokubu']['link']) : ?><a href="<?php echo $group_field['chuou_hokubu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['chuou_hokubu']['class1']) ? $group_field['chuou_hokubu']['class1'] : ''; ?> <?= isset($group_field['chuou_hokubu']['class2']) ? $group_field['chuou_hokubu']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・中央・北部エリア
                                                    <?php if ($group_field['chuou_hokubu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tobu']['link']) : ?><a href="<?php echo $group_field['tobu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tobu']['class1']) ? $group_field['tobu']['class1'] : ''; ?> <?= isset($group_field['tobu']['class2']) ? $group_field['tobu']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・東部エリア
                                                    <?php if ($group_field['tobu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">東京
                                            <span class="new_link">
                                                <?php if ($group_field['tokyo_new']['link']) : ?><a href="<?php echo $group_field['tokyo_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tokyo_new']['class1']) ? $group_field['tokyo_new']['class1'] : ''; ?> <?= isset($group_field['tokyo_new']['class2']) ? $group_field['tokyo_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['tokyo_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['23ku']['link']) : ?><a href="<?php echo $group_field['23ku']['url']; ?>" target="_blank" class="blank <?= isset($group_field['23ku']['class1']) ? $group_field['23ku']['class1'] : ''; ?> <?= isset($group_field['23ku']['class2']) ? $group_field['23ku']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・23区エリア
                                                    <?php if ($group_field['23ku']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tama_touhoku']['link']) : ?><a href="<?php echo $group_field['tama_touhoku']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tama_touhoku']['class1']) ? $group_field['tama_touhoku']['class1'] : ''; ?> <?= isset($group_field['tama_touhoku']['class2']) ? $group_field['tama_touhoku']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・多摩東北エリア
                                                    <?php if ($group_field['tama_touhoku']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['tama_nansei']['link']) : ?><a href="<?php echo $group_field['tama_nansei']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tama_nansei']['class1']) ? $group_field['tama_nansei']['class1'] : ''; ?> <?= isset($group_field['tama_nansei']['class2']) ? $group_field['tama_nansei']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・多摩南西エリア
                                                    <?php if ($group_field['tama_nansei']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="link">
                                    <p class="pref">栃木
                                            <span class="new_link">
                                                <?php if ($group_field['tochigi_new']['link']) : ?><a href="<?php echo $group_field['tochigi_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tochigi_new']['class1']) ? $group_field['tochigi_new']['class1'] : ''; ?> <?= isset($group_field['tochigi_new']['class2']) ? $group_field['tochigi_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['tochigi_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['tochigi']['link']) : ?><a href="<?php echo $group_field['tochigi']['url']; ?>" target="_blank" class="blank <?= isset($group_field['tochigi']['class1']) ? $group_field['tochigi']['class1'] : ''; ?> <?= isset($group_field['tochigi']['class2']) ? $group_field['tochigi']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・栃木エリア
                                                    <?php if ($group_field['tochigi']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">茨城
                                            <span class="new_link">
                                                <?php if ($group_field['ibaraki_new']['link']) : ?><a href="<?php echo $group_field['ibaraki_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ibaraki_new']['class1']) ? $group_field['ibaraki_new']['class1'] : ''; ?> <?= isset($group_field['ibaraki_new']['class2']) ? $group_field['ibaraki_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['ibaraki_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['ibaraki']['link']) : ?><a href="<?php echo $group_field['ibaraki']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ibaraki']['class1']) ? $group_field['ibaraki']['class1'] : ''; ?> <?= isset($group_field['ibaraki']['class2']) ? $group_field['ibaraki']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・茨城エリア
                                                    <?php if ($group_field['ibaraki']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">千葉
                                        <span class="new_link">
                                                <?php if ($group_field['chiba_new']['link']) : ?><a href="<?php echo $group_field['chiba_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['chiba_new']['class1']) ? $group_field['chiba_new']['class1'] : ''; ?> <?= isset($group_field['chiba_new']['class2']) ? $group_field['chiba_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['chiba_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['chuou_tounan']['link']) : ?><a href="<?php echo $group_field['chuou_tounan']['url']; ?>" target="_blank" class="blank <?= isset($group_field['chuou_tounan']['class1']) ? $group_field['chuou_tounan']['class1'] : ''; ?> <?= isset($group_field['chuou_tounan']['class2']) ? $group_field['chuou_tounan']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・中央・東南エリア
                                                    <?php if ($group_field['chuou_tounan']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['matsudo_kashiwa']['link']) : ?><a href="<?php echo $group_field['matsudo_kashiwa']['url']; ?>" target="_blank" class="blank <?= isset($group_field['matsudo_kashiwa']['class1']) ? $group_field['matsudo_kashiwa']['class1'] : ''; ?> <?= isset($group_field['matsudo_kashiwa']['class2']) ? $group_field['matsudo_kashiwa']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・松戸・柏エリア
                                                    <?php if ($group_field['matsudo_kashiwa']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['ichikawa_urayasu']['link']) : ?><a href="<?php echo $group_field['ichikawa_urayasu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['ichikawa_urayasu']['class1']) ? $group_field['ichikawa_urayasu']['class1'] : ''; ?> <?= isset($group_field['ichikawa_urayasu']['class2']) ? $group_field['ichikawa_urayasu']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・市川・浦安エリア
                                                    <?php if ($group_field['ichikawa_urayasu']['link']) : ?></a><?php endif; ?>
                                            </li>
                                        </ul>
                                        <p class="pref">神奈川
                                        <span class="new_link">
                                                <?php if ($group_field['kanagawa_new']['link']) : ?><a href="<?php echo $group_field['kanagawa_new']['url']; ?>" target="_blank" class="blank <?= isset($group_field['kanagawa_new']['class1']) ? $group_field['kanagawa_new']['class1'] : ''; ?> <?= isset($group_field['kanagawa_new']['class2']) ? $group_field['kanagawa_new']['class2'] : ''; ?>"><?php endif; ?>
                                                    新着
                                                    <?php if ($group_field['kanagawa_new']['link']) : ?></a><?php endif; ?>
                                            </span>
                                        </p>
                                        <ul>
                                            <li>
                                                <?php if ($group_field['yokohama_kawasaki']['link']) : ?><a href="<?php echo $group_field['yokohama_kawasaki']['url']; ?>" target="_blank" class="blank <?= isset($group_field['yokohama_kawasaki']['class1']) ? $group_field['yokohama_kawasaki']['class1'] : ''; ?> <?= isset($group_field['yokohama_kawasaki']['class2']) ? $group_field['yokohama_kawasaki']['class2'] : ''; ?>"><?php endif; ?>
                                                    ・横浜・川崎エリア
                                                    <?php if ($group_field['yokohama_kawasaki']['link']) : ?></a><?php endif; ?>
                                            </li>
                                            <li>
                                                <?php if ($group_field['kanagawa_seibu']['link']) : ?><a href="<?php echo $group_field['kanagawa_seibu']['url']; ?>" target="_blank" class="blank <?= isset($group_field['kanagawa_seibu']['class1']) ? $group_field['kanagawa_seibu']['class1'] : ''; ?> <?= isset($group_field['kanagawa_seibu']['class2']) ? $group_field['kanagawa_seibu']['class2'] : ''; ?>"><?php endif; ?>
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
                        <h2 class="ff_smin blue">タクトホームの分譲土地付住宅<br>マイセレクトの強み</h2>
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

                <section id="select">
                    <div class="inner">
                        <h2 class="ff_smin blue">間取り選び</h2>
                    </div>

                    <div class="select_sec1">
                        <div class="inner">
                            <div class="box">
                                <h3 class="ff_smin">自由度の高いプラン提案</h3>
                                <p class="note">グラファーレの分譲土地付住宅・マイセレクトは、厳選された基本プランをベースに、ご家族のこだわりやライフスタイルに合せてカスタマイズできます。外観のデザインはそのままに、間仕切り壁やプランをカスタムすることでより自分らしい住まいが実現可能です。</p>
                            </div>
                            <div class="img">
                                <picture>
                                    <source media="(min-width:751px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img01.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img01-sp.png" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>

                    <div class="inner">
                        <div class="select_img01">
                            <picture>
                                <source media="(min-width:751px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/kanto_myselect_madori_img02.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/kanto_myselect_madori_img02-sp.png" alt="">
                            </picture>
                        </div>
                        <ul class="select_list">
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/kanto_myselect_madori_img03.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">広々ワークトップのキッチン</p>
                                <p class="note">広いワークトップカウンターはテーブルや作業スペースとして、多目的に使えます。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/kanto_myselect_madori_img04.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">アイランド型で楽しくおしゃれに</p>
                                <p class="note">テーブル一体型だから配膳・片付けもスムーズ。<br>
                                    家族や友達とキッチンを囲む時間が楽しくなります。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/kanto_myselect_madori_img05.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">リビングに生まれるゆとりの空間</p>
                                <p class="note">キッチンダイニングが一体化することで、<br>
                                    リビングスペースをゆったり取ることができます。</p>
                            </li>
                        </ul>

                        <div class="color_select">
                            <h3 class="ff_smin">カラーセレクト</h3>
                            <p class="lead">外装／内装のデザイン・カラーをお好みにコーディネートできます。<br>専任デザイナーが厳選したコーディネートパターンからお選びいただくことにより、<br class="pc">自由な組み合わせとまとまりのある、ご家族だけの住まいをスマートに実現できます。</p>
                            <div class="color_select_box">
                                <div class="box">
                                    <h4 class="ff_smin"><span>Exterior</span>6つのファサードデザイン</h4>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/select_color_img01.jpg" alt=""></div>
                                </div>
                                <div class="box">
                                    <h4 class="ff_smin"><span>Interior</span>4つのインテリアデザイン</h4>
                                    <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/select_color_img02.jpg" alt=""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="customhome">
                    <div class="inner">
                        <?php
                        $group_field_customhome1 = get_field('customhome1');
                        ?>
                        <div class="flex">
                            <div class="img pc">
                                <img src="<?php echo $group_field_customhome1['img']; ?>" alt="">
                                <p class="btn"><a href="<?php echo $group_field_customhome1['pdf']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>カタログをダウンロードする</span></a></p>
                            </div>
                            <div class="box">
                                <h2 class="ff_smin">分譲土地付住宅をご検討のお客様限定<br><span>+60万円でフリープランの注文住宅</span></h2>
                                <p class="lead">分譲土地付住宅をご検討のお客様へ、追加費用60万円でフリープランの注文住宅への変更を承ります。</p>

                                <h3 class="ff_smin">すべて価格に含まれます。</h3>
                                <ul class="customhome_list">
                                    <li>
                                        <dl>
                                            <dt><img src="<?php echo get_template_directory_uri(); ?>/common/images/customhome_img01.jpg" alt=""></dt>
                                            <dd>
                                                <p class="ttl ff_smin">土地費用</p>
                                                <p class="note">建築条件付売地でご提供しています。</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><img src="<?php echo get_template_directory_uri(); ?>/common/images/customhome_img02.jpg" alt=""></dt>
                                            <dd>
                                                <p class="ttl ff_smin">造成費用</p>
                                                <p class="note">建築前の造成費用が含まれます。<br><span class="fs80">※地盤関係（改良）費も含まれます。</span></p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><img src="<?php echo get_template_directory_uri(); ?>/common/images/customhome_img03.jpg" alt=""></dt>
                                            <dd>
                                                <p class="ttl ff_smin">建物費用</p>
                                                <p class="note">工事代金、材料費などの建築に関わる費用が含まれます。</p>
                                            </dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt><img src="<?php echo get_template_directory_uri(); ?>/common/images/customhome_img04.jpg" alt=""></dt>
                                            <dd>
                                                <p class="ttl ff_smin">外構費用</p>
                                                <p class="note">ブロックやカースペース、ポストなど、住宅を彩る外構費も含まれます。</p>
                                            </dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="img sp">
                        <img src="<?php echo $group_field_customhome1['img']; ?>" alt="">
                        <p class="btn"><a href="<?php echo $group_field_customhome1['pdf']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>カタログをダウンロードする</span></a></p>
                    </div>
                </section>

                <section id="design">
                    <div class="inner">
                        <h2 class="ff_smin blue">グラファーレのデザイン</h2>
                    </div>
                    <div class="design_sec1">
                        <div class="inner flex">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/design_bg.jpg" alt=""></div>
                            <div class="box">
                                <h3 class="ff_smin blue">GRAFARE<br>DESIGN QUALITY</h3>
                                <p class="note">グラファーレが選ばれる理由の一つに、建物のデザイン性が挙げられます。累計59,000棟に及ぶ住宅建築実績から、常に機能性や意匠性に優れたデザイン性の高い住宅デザインを追求してきました。上質な部材と熟練の技術で磨き上げられたグラファーレのデザインにご期待ください。</p>
                                <p class="btn"><a href="https://www.tacthome.co.jp/grafare/gallery/" target="_blank" class="blank"><span>施工例ギャラリーを見る</span></a></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="modelhouse">
                    <div class="inner">
                        <h2 class="ff_smin blue">モデルハウス・ショールーム</h2>
                        <div class="modelhouse_box">
                            <div class="box">
                                <h3 class="ff_smin blue">各地の開発現場で<br>現地モデルハウスを公開中</h3>
                                <p class="note">販売現地各所では随時モデルハウスを建築・公開しています。グラファーレの品質を目で見て、触れて、体感いただける他、家具をしつらえた実際の建物をご内覧いただくことで、よりリアルな暮らしをイメージいただけます。</p>
                                <p class="btn"><a href="https://www.tacthome.co.jp/modelhouse/" target="_blank" class="blank"><span>グラファーレのモデルハウス紹介ページ</span></a></p>
                            </div>
                            <div class="img">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/modelhouse_map.png" alt="モデルハウス・ショールーム">

                                <?php
                                $group_field_modelhouse = get_field('kanto_modelhouse');
                                ?>

                                <div class="map">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 535.48 340.68">
                                        <defs>
                                            <pattern id="_map_bg01" data-name="map_bg01" x="0" y="0" width="9.52" height="9.52" patternTransform="translate(-5717.98 -5727.75) scale(.28)" patternUnits="userSpaceOnUse" viewBox="0 0 9.52 9.52">
                                                <g>
                                                    <rect class="map_bg01_2" width="9.52" height="9.52" />
                                                    <rect class="map_bg01_4" width="9.52" height="9.52" />
                                                    <circle class="map_bg01_3" cx="4.76" cy="4.76" r="2.5" />
                                                </g>
                                            </pattern>
                                            <pattern id="_map_bg02" data-name="map_bg02" x="0" y="0" width="9.52" height="9.52" patternTransform="translate(-5717.98 -5727.75) scale(.28)" patternUnits="userSpaceOnUse" viewBox="0 0 9.52 9.52">
                                                <g>
                                                    <rect class="map_bg02_2" width="9.52" height="9.52" />
                                                    <rect class="map_bg02_4" width="9.52" height="9.52" />
                                                    <circle class="map_bg02_3" cx="4.76" cy="4.76" r="2.5" />
                                                </g>
                                            </pattern>
                                        </defs>
                                        <a <?php if ($group_field_modelhouse['gunma']['link']) : ?> href="<?php echo $group_field_modelhouse['gunma']['url']; ?>" class="<?= isset($group_field_modelhouse['gunma']['class1']) ? $group_field_modelhouse['gunma']['class1'] : ''; ?> <?= isset($group_field_modelhouse['gunma']['class2']) ? $group_field_modelhouse['gunma']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="gunma">
                                                <polygon class="map_bg01" points="0 95.69 0 1 163.15 1 163.15 95.69 0 95.69" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['tochigi']['link']) : ?> href="<?php echo $group_field_modelhouse['tochigi']['url']; ?>" class="<?= isset($group_field_modelhouse['tochigi']['class1']) ? $group_field_modelhouse['tochigi']['class1'] : ''; ?> <?= isset($group_field_modelhouse['tochigi']['class2']) ? $group_field_modelhouse['tochigi']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="tochigi">
                                                <polygon class="map_bg01" points="175.95 95.69 175.95 1 325.18 1 325.18 95.69 175.95 95.69" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['saitama']['link']) : ?> href="<?php echo $group_field_modelhouse['saitama']['url']; ?>" class="<?= isset($group_field_modelhouse['saitama']['class1']) ? $group_field_modelhouse['saitama']['class1'] : ''; ?> <?= isset($group_field_modelhouse['saitama']['class2']) ? $group_field_modelhouse['saitama']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="saitama">
                                                <polygon class="map_bg01" points="0 173.28 0 104.7 325.18 104.7 325.18 173.28 0 173.28" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['tokyo']['link']) : ?> href="<?php echo $group_field_modelhouse['tokyo']['url']; ?>" class="<?= isset($group_field_modelhouse['tokyo']['class1']) ? $group_field_modelhouse['tokyo']['class1'] : ''; ?> <?= isset($group_field_modelhouse['tokyo']['class2']) ? $group_field_modelhouse['tokyo']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="tokyo">
                                                <polygon class="map_bg01" points="97.01 248.12 61.03 182.04 325.18 182.04 325.18 248.12 97.01 248.12" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['kanagawa']['link']) : ?> href="<?php echo $group_field_modelhouse['kanagawa']['url']; ?>" class="<?= isset($group_field_modelhouse['kanagawa']['class1']) ? $group_field_modelhouse['kanagawa']['class1'] : ''; ?> <?= isset($group_field_modelhouse['kanagawa']['class2']) ? $group_field_modelhouse['kanagawa']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="kanagawa">
                                                <path class="map_bg01" d="m254.78,328.9v-12.81c0-4.14-4.29-7.5-9.59-7.5h-87.13c-5.24,0-9.5,3.28-9.59,7.38l-.26,12.93h-51.49l.27-72.01h228.19v72.01h-70.4Z" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['chiba']['link']) : ?> href="<?php echo $group_field_modelhouse['chiba']['url']; ?>" class="<?= isset($group_field_modelhouse['chiba']['class1']) ? $group_field_modelhouse['chiba']['class1'] : ''; ?> <?= isset($group_field_modelhouse['chiba']['class2']) ? $group_field_modelhouse['chiba']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="chiba">
                                                <path class="map_bg01" d="m380.29,340.68v-83.78c0-4.1-4.2-7.43-9.44-7.5l-36.06-.43v-107.94h200.68l-10.96,19.61c-.37.67-.62,1.37-.73,2.1l-14.82,95.12c-.05.3-.07.6-.07.91v81.91h-128.6Z" />
                                            </g>
                                        </a>
                                        <a <?php if ($group_field_modelhouse['ibaraki']['link']) : ?> href="<?php echo $group_field_modelhouse['ibaraki']['url']; ?>" class="<?= isset($group_field_modelhouse['ibaraki']['class1']) ? $group_field_modelhouse['ibaraki']['class1'] : ''; ?> <?= isset($group_field_modelhouse['ibaraki']['class2']) ? $group_field_modelhouse['ibaraki']['class2'] : ''; ?>" <?php endif; ?> target="_blank">
                                            <g class="ibaraki">
                                                <path class="map_bg01" d="m334.8,132.01V1h168.35v82.42c0,1.53.59,2.96,1.6,4.15l29.59,44.45h-199.54Z" />
                                            </g>
                                        </a>
                                        <text class="map_txt" transform="translate(28.23 53.88)">群馬エリア</text>
                                        <?php if ($group_field_modelhouse['gunma']['link']) : ?>
                                            <path class="map_icon" d="m118.8,53.92h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(202.87 53.88)">栃木エリア</text>
                                        <?php if ($group_field_modelhouse['tochigi']['link']) : ?>
                                            <path class="map_icon" d="m292.03,53.92h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(108.38 145.51)">埼玉エリア</text>
                                        <?php if ($group_field_modelhouse['saitama']['link']) : ?>
                                            <path class="map_icon" d="m199.85,146h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(152.09 220.57)">東京エリア</text>
                                        <?php if ($group_field_modelhouse['tokyo']['link']) : ?>
                                            <path class="map_icon" d="m243.53,220.57h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(144.87 289.59)">神奈川エリア</text>
                                        <?php if ($group_field_modelhouse['kanagawa']['link']) : ?>
                                            <path class="map_icon" d="m251.43,289.64h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(376.76 217.95)">千葉エリア</text>
                                        <?php if ($group_field_modelhouse['chiba']['link']) : ?>
                                            <path class="map_icon" d="m466.16,218.52h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                        <text class="map_txt" transform="translate(368.84 73.05)">茨城エリア</text>
                                        <?php if ($group_field_modelhouse['ibaraki']['link']) : ?>
                                            <path class="map_icon" d="m458.79,73.55h12.28v-5.32h1.23v6.55h-14.74v-14.74h6.55v1.23h-5.32v12.28Zm7.78-12.28v-1.23h5.73v5.73h-1.23v-3.6l-7.37,7.29-.82-.82,7.29-7.37h-3.6Z" /><?php endif; ?>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <h2 id="modelhouse_showroom" class="ff_smin blue">お近くのショールームへお越しください</h2>
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

                        </ul>
                    </div>
                </section>

                <section id="catalog">
                    <div class="inner">
                        <h2 class="ff_smin blue">カタログダウンロード</h2>
                        <p class="lead">グラファーレの分譲土地付住宅・マイセレクトの最新カタログをダウンロードいただけます。</p>
                        <?php
                        $group_field_myselect = get_field('myselect');
                        ?>
                        <ul class="catalog_list">
                            <li>
                                <div class="img"><img src="<?php echo $group_field_myselect['img1']; ?>" alt="マイセレクトとは"></div>
                                <p class="name ff_smin blue"><?php echo $group_field_myselect['title1']; ?></p>
                                <p class="note"><?php echo $group_field_myselect['copy1']; ?></p>
                                <p class="btn"><a href="<?php echo $group_field_myselect['pdf1']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo $group_field_myselect['img2']; ?>" alt="アンケート"></div>
                                <p class="name ff_smin blue"><?php echo $group_field_myselect['title2']; ?></p>
                                <p class="note"><?php echo $group_field_myselect['copy2']; ?></p>
                                <p class="btn"><a href="<?php echo $group_field_myselect['pdf2']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                        </ul>
                        <ul class="catalog_list">
                            <li>
                                <div class="img"><img src="<?php echo $group_field_myselect['img3']; ?>" alt="マンガでわかるマイセレクト"></div>
                                <p class="name ff_smin blue"><?php echo $group_field_myselect['title3']; ?></p>
                                <p class="note"><?php echo $group_field_myselect['copy3']; ?></p>
                                <p class="btn"><a href="<?php echo $group_field_myselect['pdf3']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo $group_field_myselect['img4']; ?>" alt="デザインブック"></div>
                                <p class="name ff_smin blue"><?php echo $group_field_myselect['title4']; ?></p>
                                <p class="note"><?php echo $group_field_myselect['copy4']; ?></p>
                                <p class="btn"><a href="<?php echo $group_field_myselect['pdf4']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo $group_field_myselect['img5']; ?>" alt="住宅性能-住まいの通信簿-"></div>
                                <p class="name ff_smin blue"><?php echo $group_field_myselect['title5']; ?></p>
                                <p class="note"><?php echo $group_field_myselect['copy5']; ?></p>
                                <p class="btn"><a href="<?php echo $group_field_myselect['pdf5']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                        </ul>
                    </div>
                </section>

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
                                <div class="img"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr03.jpg" alt="タクトホームの店舗紹介"></a></div>
                                <p class="ttl ff_smin blue"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank" class="blank">タクトホームの店舗紹介</a></p>
                                <p class="note">物件情報や建物仕様の詳細は各店舗にてご案内中<br>お客様の案内もご安心ください</p>
                            </li>
                        </ul>
                    </div>
                </section>

                <section id="customhome_catalog">
                    <div class="inner">
                        <div class="flex">
                            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/customhome_catalog_img01.png" alt=""></div>
                            <div class="box">
                                <h2 class="ff_smin">もっと自由に、自分らしく<br>グラファーレの注文住宅で<br class="sp">憧れの暮らしを</h2>
                                <p class="lead">グラファーレの注文住宅では、ご提案プランのカスタマイズから、フルオーダー建築まで、お客様にとって最適な住まいづくり実現できる体制を整えています。タクトホームだからできる、デザインと性能に優れた住まい。ぜひご検討ください。</p>
                            </div>
                        </div>

                        <h3 class="ff_smin">注文住宅 カタログダウンロード</h3>
                        <?php
                        $group_field_customhome2 = get_field('customhome2');
                        ?>
                        <ul class="customhome_catalog_list">
                            <li>
                                <div class="img"><img src="<?php echo $group_field_customhome2['img1']; ?>" alt="グラファーレの注文住宅 総合パンフレット"></div>
                                <p class="name">グラファーレの注文住宅<br>総合パンフレット</p>
                                <p class="btn"><a href="<?php echo $group_field_customhome2['pdf1']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo $group_field_customhome2['img2']; ?>" alt="グラファーレのセレクト住宅 「G-fit」パンフレット"></div>
                                <p class="name">グラファーレのセレクト住宅<br>「G-fit」パンフレット</p>
                                <p class="btn"><a href="<?php echo $group_field_customhome2['pdf2']; ?>" target="_blank" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a></p>
                            </li>
                        </ul>
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
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/MySelect-index/" target="_blank" class="blank"><span>マイセレクト<br class="sp"><span class="fs80">（建築条件付売地）</span></span></a></p>
                            </li>
                            <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/lineup/saisei/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr04.jpg" alt="認定再生住宅"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/lineup/saisei/" target="_blank" class="blank"><span>認定再生住宅</span></a></p>
                            </li>
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