<section id="select">
  <div class="inner">
    <h2 class="ff_smin blue">間取り選び</h2>
  </div>

  <div class="select_sec1">
    <div class="inner">
      <div class="box">
        <h3 class="ff_smin">自由度の高いプラン提案</h3>
        <p class="note">タクトホームの建築条件付売地 MY SELECTは、厳選された基本プランをベースに、ご家族のこだわりやライフスタイルに合せてカスタマイズできます。外観のデザインはそのままに、間仕切り壁やプランをカスタムすることでより自分らしい住まいが実現可能です。</p>
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
      <img
        class="pc"
        src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/floor-plan.webp?ver=2"
        width="1028"
        height="413"
        alt="間取りの変更例。洋室をなくしてLDKを広げ、パントリー、ワイドな洗面室、シューズインクローゼットを追加。"
        loading="lazy"
      >
      <div class="floor_plan_mobile sp">
        <figure>
          <figcaption class="ff_smin blue">Before</figcaption>
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/floor-plan-before.webp?ver=2"
            alt="変更前：洋室5帖とLDK17帖の間取り"
            width="330"
            height="344"
            loading="lazy"
          >
        </figure>
        <figure>
          <figcaption class="ff_smin blue">After</figcaption>
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/floor-plan-after.webp?ver=2"
            alt="変更後：LDK19.9帖と充実した収納の間取り"
            width="335"
            height="344"
            loading="lazy"
          >
        </figure>
      </div>
    </div>
    <ul class="select_list">
      <li>
        <div class="img">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/plan-shoes.webp?ver=2"
            alt="シューズインクローゼット"
            width="322"
            height="181"
            loading="lazy"
          >
        </div>
        <p class="ttl ff_smin blue">収納力豊富な<br>シューズインクローゼット</p>
      </li>
      <li>
        <div class="img">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/plan-pantry.webp?ver=2"
            alt="キッチン横のパントリー"
            width="322"
            height="181"
            loading="lazy"
          >
        </div>
        <p class="ttl ff_smin blue">生活空間を有効活用できる<br>キッチン横のパントリー</p>
      </li>
      <li>
        <div class="img">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/plan-washroom.webp?ver=2"
            alt="ワイドな洗面室"
            width="321"
            height="181"
            loading="lazy"
          >
        </div>
        <p class="ttl ff_smin blue">広々空間で家事効率もアップする<br>ワイドな洗面室</p>
      </li>
    </ul>

    <div class="color_select">
      <h3 class="ff_smin">カラーセレクト</h3>
      <p class="lead">外装／内装のデザイン・カラーをお好みにコーディネートできます。<br>専任デザイナーが厳選したコーディネートパターンからお選びいただくことにより、<br class="pc">自由な組み合わせとまとまりのある、ご家族だけの住まいをスマートに実現できます。</p>
      <div class="color_select_box">
        <?php
        $color_groups = array(
          'exterior' => array('Exterior', 'ファサードデザイン', 'variations'),
          'interior' => array('Interior', 'インテリアデザイン', 'interior'),
        );
        foreach ($color_groups as $color_id => $color_group) :
        ?>
          <div class="box color_slider" role="region" aria-roledescription="カルーセル" aria-labelledby="<?php echo esc_attr($color_id); ?>-title">
            <h4 id="<?php echo esc_attr($color_id); ?>-title" class="ff_smin"><span><?php echo esc_html($color_group[0]); ?></span><?php echo esc_html($color_group[1]); ?></h4>
            <div class="color_slider_stage">
              <div class="color_slider_viewport">
                <div class="color_slider_track" id="<?php echo esc_attr($color_id); ?>-slides">
                  <?php for ($slide = 1; $slide <= 5; $slide++) :
                    $color_image = get_template_directory_uri() . '/common/images/lot-2026/' . $color_group[2] . '_0' . $slide . '.webp';
                    if ($color_id === 'interior' && $slide === 1) {
                      $color_image .= '?ver=2';
                    }
                  ?>
                    <div class="color_slide" role="group" aria-roledescription="スライド" aria-label="<?php echo esc_attr($slide . ' / 5'); ?>"<?php if ($slide !== 1) : ?> hidden<?php endif; ?>>
                      <img
                        src="<?php echo esc_url($color_image); ?>"
                        alt="<?php echo esc_attr($color_group[1] . 'のカラーコーディネート例' . $slide); ?>"
                        width="916"
                        height="466"
                        loading="lazy"
                        draggable="false"
                      >
                    </div>
                  <?php endfor; ?>
                </div>
              </div>
              <button class="color_slider_prev" type="button" aria-label="前の<?php echo esc_attr($color_group[1]); ?>" aria-controls="<?php echo esc_attr($color_id); ?>-slides"></button>
              <button class="color_slider_next" type="button" aria-label="次の<?php echo esc_attr($color_group[1]); ?>" aria-controls="<?php echo esc_attr($color_id); ?>-slides"></button>
            </div>
            <div class="color_slider_dots" aria-label="<?php echo esc_attr($color_group[1]); ?>の切り替え">
              <?php for ($slide = 1; $slide <= 5; $slide++) : ?>
                <button type="button" aria-label="<?php echo esc_attr($slide . '枚目の' . $color_group[1]); ?>" aria-pressed="<?php echo $slide === 1 ? 'true' : 'false'; ?>" aria-controls="<?php echo esc_attr($color_id); ?>-slides"></button>
              <?php endfor; ?>
            </div>
            <p class="color_slider_status" aria-live="polite" aria-atomic="true">1 / 5</p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
