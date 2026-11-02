<?php $group_field_customhome2 = get_field('customhome2'); ?>
<section id="customhome_catalog" class="lot_order_catalog">
  <div class="inner">
    <div class="flex">
      <div class="img lot_order_logo">
        <p>GRAFARE<br>ORDER HOUSING</p>
        <small>タクトホームの注文住宅</small>
      </div>
      <div class="box">
        <h2 class="ff_smin">もっと自由に、自分らしく<br>グラファーレの注文住宅で<br class="sp">憧れの暮らしを</h2>
        <p class="lead">グラファーレの注文住宅では、ご提案プランのカスタマイズから、フルオーダー建築まで、お客様にとって最適な住まいづくり実現できる体制を整えています。タクトホームだからできる、デザインと性能に優れた住まい。ぜひご検討ください。</p>
      </div>
    </div>
    <h3 class="ff_smin">注文住宅 カタログダウンロード</h3>
    <ul class="customhome_catalog_list">
      <?php for ($i = 1; $i <= 2; $i++) : ?>
        <?php if (!empty($group_field_customhome2['img' . $i])) : ?>
          <li>
            <div class="img">
              <img
                src="<?php echo esc_url($group_field_customhome2['img' . $i]); ?>"
                width="227" height="323" alt="" loading="lazy">
            </div>
            <?php if (!empty($group_field_customhome2['copy' . $i])) : ?>
              <p class="name"><?php echo wp_kses($group_field_customhome2['copy' . $i], array('br' => array())); ?></p>
            <?php endif; ?>
            <?php if (!empty($group_field_customhome2['pdf' . $i])) : ?>
              <p class="btn">
                <a href="<?php echo esc_url($group_field_customhome2['pdf' . $i]); ?>" target="_blank" rel="noopener" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a>
              </p>
            <?php endif; ?>
          </li>
        <?php endif; ?>
      <?php endfor; ?>
    </ul>
  </div>
</section>