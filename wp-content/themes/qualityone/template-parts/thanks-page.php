<?php

/**
 * Template Name: THANKS
 *
 */
get_header(); ?>

<main class="l-main">

  <section class="recruit-contact recruit-contact_thanks">
    <div class="l-inner">
      <h2 class="recruit-app_ttl c-lead js-letter">応募完了</h2>
      <div class="recruit-contact_wrap">
        <nav class="recruit-contact_nav">
          <ul>
            <li><span>Step 01</span>必須項目の入力</li>
            <li><span>Step 02</span>入力内容の確認</li>
            <li class="is-active"><span>Step 03</span>送信完了</li>
          </ul>
        </nav>
        <div class="recruit-contact_content">
          <div class="c-form_thanks">
            <h3>お申し込み有難うございました。</h3>
            <p>この度は採用へのお申し込みいただき、誠にありがとうございます。<br>受付完了メール（自動送信）を送信しましたので、ご確認ください。<br>入力いただいた内容を元に、順次ご案内をお送りさせていただきますので、今しばらくお待ちくださいませ。</p>
            <h3>万が一メールが届いていない場合、<br class="is-sp">以下の原因が考えられます。</h3>
            <p>入力されたメールアドレスに誤りがある可能性があります。<br>迷惑メールフォルダに振り分けられている可能性があります。<br>ドメイン設定受信をおこなっている可能性があります。「@○○○○」のドメイン受信設定を行なってください。</p>
            <p>メールが届かない場合は恐れ入りますが、<br class="is-sp"><a href="<?php echo home_url() ?>/recruit/?anc=entry">再度フォームにご入力</a>ください。</p>
          </div>
          <div class="c-form_btn">
            <a href="<?php echo home_url() ?>" class="c-btn">トップページへ</a>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>
<!-- .l-main -->

<?php get_footer(); ?>
