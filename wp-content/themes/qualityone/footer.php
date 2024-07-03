<section class="sec-recruit">
    <div class="sec-recruit_image js-zoom01">
      <picture>
        <source media="(min-width:769px)" srcset="<?php echo THEME_URL ?>/assets/img/img_recruit_01.png">
        <img src="<?php echo THEME_URL ?>/assets/img/img_recruit_01_sp.png" loading="lazy" alt="">
      </picture>
    </div>
    <div class="sec-recruit_content">
      <h2 class="sec-recruit_ttl">#RECURUITMENT</h2>
      <h3 class="sec-recruit_lead"><span class="c-lead js-letter">採用情報</span></h3>
      <div class="sec-recruit_txt">俺たちの旅はまだ始まったばかりだ・・・！</div>
      <div class="sec-recruit_btn"><a href="<?php echo home_url() ?>/recruit" class="c-btn c-btn--white js-btn-hover01"><span>VIEW RECRUITMENT</span></a></div>
    </div>
  </section>

  <footer class="l-footer">
    <div class="l-footer_inner">
      <div class="l-footer_top">
        <div class="l-footer_logo"><a href="<?php echo home_url() ?>"><img src="<?php echo THEME_URL ?>/assets/img/logo.png" loading="lazy"  alt="" width="624" height="110"></a></div>
        <ul class="l-footer_menu">
          <li><a href="<?php echo home_url() ?>/company">会社概要</a></li>
          <li><a href="<?php echo home_url() ?>/business">仕事内容</a></li>
          <li><a href="<?php echo home_url() ?>/interview">社員紹介</a></li>
          <li><a href="<?php echo home_url() ?>/culture">働く環境</a></li>
          <li><a href="<?php echo home_url() ?>/program">研修制度</a></li>
          <li><a href="<?php echo home_url() ?>/recruit">採用情報</a></li>
        </ul>
      </div>
      <div class="l-footer_bottom">
        <div class="l-footer_address">クオリティ・ワン株式会社<br>〒333-0861　埼玉県川口市柳崎2－14－3</div>
        <div class="l-footer_tel">
          <p>TEL：048-424-4615</p>
          <p>FAX：048-424-4616</p>
        </div>
        <div class="l-footer_info">代表者：代表取締役 笠原大助</div>
        <div class="l-footer_copy">&copy; copy dummy copy dummy. copy dummy</div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  </div>
  <!-- #wrapper -->

  <script type="text/javascript">
    var templateUrl = '<?php echo get_template_directory_uri() ?>';
  </script>

  <?php wp_footer(); ?>

</body>

</html>
