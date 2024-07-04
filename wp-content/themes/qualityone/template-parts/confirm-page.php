<?php

/**
 * Template Name: CONFIRM
 *
 */
get_header(); ?>


<main class="l-main">

  <section class="recruit-contact recruit-contact_confirm">
    <div class="l-inner">
      <h2 class="recruit-app_ttl c-lead js-letter">応募フォーム</h2>
      <div class="recruit-contact_wrap">
        <nav class="recruit-contact_nav">
          <ul>
            <li><span>Step 01</span>必須項目の入力</li>
            <li class="is-active"><span>Step 02</span>入力内容の確認</li>
            <li><span>Step 03</span>送信完了</li>
          </ul>
        </nav>
        <div class="recruit-contact_content">
          <?php echo apply_shortcodes( '[contact-form-7 id="c2ad241" title="Entry Confirm"]' ); ?>
        </div>
      </div>
    </div>
  </section>


</main>
<!-- .l-main -->

<?php get_footer(); ?>
