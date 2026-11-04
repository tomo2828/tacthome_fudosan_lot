<section id="brand">
  <div class="inner">
    <h2 class="ff_smin blue">グラファーレブランド</h2>
    <ul class="brand_list">
      <li>
        <div class="img"><a href="https://www.tacthome.co.jp/grafare/" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/common/images/lot-2026/brand-design.webp?ver=2"
            alt="新築分譲住宅"
          >
        </a></div>
        <p class="name"><a href="https://www.tacthome.co.jp/grafare/" target="_blank" class="blank"><span>新築分譲住宅</span></a></p>
      </li>
      <li>
        <div class="img"><a href="https://www.tacthome.co.jp/order/" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/common/images/lot-2026/brand-order.webp?ver=2"
            alt="注文住宅"
          >
        </a></div>
        <p class="name"><a href="https://www.tacthome.co.jp/order/" target="_blank" class="blank"><span>注文住宅</span></a></p>
      </li>
      <li>
        <div class="img"><a href="https://www.tacthome.co.jp/grafare/myselect/" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/common/images/lot-2026/brand-myselect.webp?ver=2"
            alt="建築条件付売地"
          >
        </a></div>
        <p class="name"><a href="https://www.tacthome.co.jp/grafare/myselect/" target="_blank" class="blank"><span>建築条件付売地</span></a></p>
      </li>
      <?php if (!in_array(get_page_template_slug(), array('page-myselect_kitanihon.php', 'page-sales_kitanihon.php'), true)) : ?>
      <li>
        <div class="img"><a href="https://www.tacthome.co.jp/saisei/" target="_blank">
          <img
            src="<?php echo get_template_directory_uri(); ?>/common/images/lot-2026/brand-reuse.webp?ver=2"
            alt="認定再生住宅"
          >
        </a></div>
        <p class="name"><a href="https://www.tacthome.co.jp/saisei/" target="_blank" class="blank"><span>認定再生住宅</span></a></p>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</section>
