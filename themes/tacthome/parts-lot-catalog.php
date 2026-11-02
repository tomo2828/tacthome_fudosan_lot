<?php $group_field_myselect = get_field('myselect'); ?>
<section id="catalog" class="lot_catalog">
  <div class="inner">
    <h2 class="ff_smin blue">カタログダウンロード</h2>
    <p class="lead">「建築条件付売地 MYSELECT」の<br>最新カタログをダウンロードいただけます。</p>
    <ul class="catalog_list">
      <li>
        <div class="img">
          <img
            src="<?php echo esc_url(get_template_directory_uri()); ?>/common/images/lot-2026/catalog-myselect.webp"
            width="229" height="324" alt="建築条件付売地 MY SELECT カタログ" loading="lazy"
          >
        </div>
        <p class="name ff_smin blue"><?php echo esc_html(!empty($group_field_myselect['title1']) ? $group_field_myselect['title1'] : '建築条件付売地'); ?></p>
        <p class="note"><?php echo esc_html(!empty($group_field_myselect['copy1']) ? $group_field_myselect['copy1'] : '間取りをお好みにカスタムできる 建築条件付売地についてのご案内'); ?></p>
        <?php if (!empty($group_field_myselect['pdf1'])) : ?>
          <p class="btn">
            <a href="<?php echo esc_url($group_field_myselect['pdf1']); ?>" target="_blank" rel="noopener" class="pdf gtm-catalog-download"><span>ダウンロードする</span></a>
          </p>
        <?php endif; ?>
      </li>
    </ul>
  </div>
</section>
