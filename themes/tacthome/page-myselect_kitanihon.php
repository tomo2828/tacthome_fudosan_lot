<?php
/*
Template Name:myselect_北日本
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

        <body class="myselect_kitanihon">

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
                    <h1 class="ff_smin">北 日 本 エ リ ア<br><span>分譲土地付住宅</span><br>～建築条件付売地・新築注文住宅～</h1>
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
                        <li><a href="#modelhouse">モデルハウス<br>ショールーム</a></li>
                    </ul>
                </div>
            </div>
            <main class="top myselect_nagoya">
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
                                    <p class="note">お気軽にショールームにお連れください。喜んでプレゼンテーションさせていただきます。<br>※ご依頼はお近くのショールームまで</p>
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
                        <div class="flex">
                            <div class="txtarea">

                                <p class="property_lead ff_smin blue">販売会社様に<br>より早くより良い土地情報を</p>
                                <p class="property_note">タクトホームでは、販売会社様にいち早く最新の物件をご紹介いただけるよう、<br>決済前の未公開物件も積極的にご案内しております。</p>

                            </div>

                            <div class="property_area">
                                <h3 class="ff_smin">未公開 分譲土地付住宅をエリアから選ぶ</h3>
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
                                <source media="(min-width:751px)" srcset="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img02.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img02-sp.png" alt="">
                            </picture>
                        </div>
                        <ul class="select_list">
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img03.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">1. Entrance Hall</p>
                                <p class="note">玄関ホールの手洗い器で「ただいま！」の後に<br>すぐにキレイ。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img04.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">2. Work Space</p>
                                <p class="note">これからの時代に柔軟に対応できる<br>リビングにワークスペースがある暮らし。</p>
                            </li>
                            <li>
                                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/common/images/myselect_madori_img05.jpg" alt=""></div>
                                <p class="ttl ff_smin blue">3. Master Bed Room</p>
                                <p class="note">大きな主寝室は将来的に家族が<br>増えたときに２部屋にする事も可能です。</p>
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
                                <div class="img"><a href="https://www.tacthome.co.jp/corporate/officelist/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/quality_bnr03_2.jpg" alt="タクトホームの店舗紹介"></a></div>
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
                                <h2 class="ff_smin">もっと自由に、自分らしく<br>タクトホームの注文住宅で<br class="sp">憧れの暮らしを</h2>
                                <p class="lead">タクトホームの注文住宅では、ご提案プランのカスタマイズから、フルオーダー建築まで、お客様にとって最適な住まいづくり実現できる体制を整えています。タクトホームだからできる、デザインと性能に優れた住まい。ぜひご検討ください。</p>
                            </div>
                        </div>

                        <h3 class="ff_smin">注文住宅 カタログダウンロード</h3>
                        <?php
                        $group_field_customhome2 = get_field('customhome2');
                        ?>
                        <ul class="customhome_catalog_list">
                            <li>
                                <div class="img"><img src="<?php echo $group_field_customhome2['img1']; ?>" alt="タクトホームの注文住宅 総合パンフレット"></div>
                                <p class="name">タクトホームの注文住宅<br>総合パンフレット</p>
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
                            <!-- <li>
                                <div class="img"><a href="https://www.tacthome.co.jp/saisei/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/common/images/brand_bnr04.jpg" alt="認定再生住宅"></a></div>
                                <p class="name"><a href="https://www.tacthome.co.jp/saisei/" target="_blank" class="blank"><span>認定再生住宅</span></a></p>
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