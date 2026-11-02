<?php
$lot_showrooms = array(
  array('tokyo', '東京都　西東京市', 'GRAFARE<br>DESIGN STUDIO TOKYO'),
  array('saitama', '埼玉県　さいたま市', 'GRAFARE<br>DESIGN STUDIO SAITAMA'),
  array('tachikawa', '東京都　立川市', '立川ショールーム'),
  array('kashiwa', '千葉県　柏市', '柏ショールーム'),
  array('shiki', '埼玉県　志木市', '志木ショールーム'),
  array('tsukimino', '東京都　町田市', 'つきみ野ショールーム'),
  array('fujisawa', '神奈川県　藤沢市', '藤沢ショールーム'),
);
?>
<section id="modelhouse" class="lot_showrooms">
  <div class="inner">
    <h2 id="modelhouse_showroom" class="ff_smin blue">お近くのショールームへお越しください</h2>
    <ul class="lot_showroom_list">
      <?php foreach ($lot_showrooms as $lot_showroom) : ?>
        <li>
          <img
            src="<?php echo esc_url(get_template_directory_uri() . '/common/images/lot-2026/showroom-' . $lot_showroom[0] . '.webp'); ?>"
            width="234" height="132" alt="<?php echo esc_attr(str_replace('<br>', ' ', $lot_showroom[2])); ?>" loading="lazy"
          >
          <p class="ff_smin blue"><?php echo esc_html($lot_showroom[1]); ?><br><?php echo wp_kses_post($lot_showroom[2]); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>
