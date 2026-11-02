<?php $group_field_myselect = get_field('myselect'); ?>
<section id="catalog" class="lot_catalog">
  <div class="inner">
    <h2 class="ff_smin blue">カタログダウンロード</h2>
    <p class="lead">「建築条件付売地 MYSELECT」の<br>最新カタログをダウンロードいただけます。</p>
    <ul class="catalog_list">
      <?php for ($i = 1; $i <= 5; $i++) : ?>
        <?php if (!empty($group_field_myselect['img' . $i])) : ?>
          <li>
            <div class="img">
              <img
                src="<?php echo esc_url($group_field_myselect['img' . $i]); ?>"
                width="229" height="324"
                alt="<?php echo esc_attr($group_field_myselect['title' . $i] ?? ''); ?>"
                loading="lazy"
              >
            </div>
            <?php if (!empty($group_field_myselect['title' . $i])) : ?>
              <p class="name ff_smin blue"><?php echo esc_html($group_field_myselect['title' . $i]); ?></p>
            <?php endif; ?>
            <?php if (!empty($group_field_myselect['copy' . $i])) : ?>
              <p class="note"><?php echo wp_kses($group_field_myselect['copy' . $i], array('br' => array())); ?></p>
            <?php endif; ?>
            <?php if (!empty($group_field_myselect['pdf' . $i])) : ?>
              <p class="btn">
                <a href="<?php echo esc_url($group_field_myselect['pdf' . $i]); ?>" target="_blank" rel="noopener" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a>
              </p>
            <?php endif; ?>
          </li>
        <?php endif; ?>
      <?php endfor; ?>
    </ul>
  </div>
</section>