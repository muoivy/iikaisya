<?php

/**
 * Template Name: BUSINESS
 *
 */
get_header(); ?>

<main class="l-main">

  <section class="sub-mainvisual sub-mainvisual_business inview js-anim_elm">
    <div class="bg-icon icon01 -delay1 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_01.png" alt=""></div>
    <div class="bg-icon icon02 -delay2"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_02.png" alt=""></div>
    <div class="bg-icon icon03 -delay3 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_03.png" alt=""></div>
    <div class="bg-icon icon04 -delay4 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_04.png" alt=""></div>
    <div class="bg-icon icon05 -delay5 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_05.png" alt=""></div>
    <div class="bg-icon icon06 -delay6 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_06.png" alt=""></div>
    <div class="bg-icon icon07 -delay7"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_07.png" alt=""></div>
    <div class="l-inner">
      <div class="c-hashtag">#QUEST</div>
      <div class="sub-mainvisual_ttl">
        <h2 class="c-ttl">BUSINESS</h2>
        <h3 class="c-lead js-letter">仕事内容</h3>
      </div>
    </div>
    <div class="sub-mainvisual_image"><img src="<?php echo THEME_URL ?>/assets/img/business/img_mainvisual.png" alt=""></div>
  </section>

  <section class="business-content">
    <div class="business-content_wrap js-bounce-trigger">
      <div class="business-content_inner">
        <h2 class="business-content_ttl c-lead js-letter js-bounce-target">事業内容</h2>
        <div class="business-content_btn btn01 js-bounce-target">
          <a href="#modal01">
            <div class="btn-text">
              <div class="btn-link">
                <span class="txt">企業配送</span>
                <span class="icon"><img src="<?php echo THEME_URL ?>/assets/img/icon_arrow_03.svg" alt="" class="js-svg"></span>
              </div>
            </div>
          </a>
        </div>
        <div class="business-content_btn btn02 js-bounce-target">
          <a href="#modal02">
            <div class="btn-text">
              <div class="btn-link">
                <span class="txt">スポット<br>チャーター便</span>
                <span class="icon"><img src="<?php echo THEME_URL ?>/assets/img/icon_arrow_03.svg" alt="" class="js-svg"></span>
              </div>
              <div class="btn-note">(委託ドライバー様向け)</div>
            </div>
          </a>
        </div>
        <div class="business-content_btn btn03 js-bounce-target">
          <a href="#modal03">
            <div class="btn-text">
              <div class="btn-link">
                <span class="txt">宅配</span>
                <span class="icon"><img src="<?php echo THEME_URL ?>/assets/img/icon_arrow_03.svg" alt="" class="js-svg"></span>
              </div>
              <div class="btn-note">(委託ドライバー様向け)</div>
            </div>
          </a>
        </div>
        <div class="business-content_btn btn04 js-bounce-target">
          <a href="#modal04">
            <div class="btn-text">
              <div class="btn-link">
                <span class="txt">取扱運送業</span>
                <span class="icon"><img src="<?php echo THEME_URL ?>/assets/img/icon_arrow_03.svg" alt="" class="js-svg"></span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div id="modal01" class="business-content_modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-inner">
          <div class="modal-heading">
            <div class="heading-image"><img src="<?php echo THEME_URL ?>/assets/img/business/bg_btn_01.png" alt=""></div>
            <h3 class="heading-ttl">企業配送</h3>
          </div>
          <div class="modal-copy">当社では、卸売業者や販売店などの企業間軽貨物の配送もお引き受けしており、同一地域の軽貨物をまとめて配送することで、効率的な輸送を実現しています。安全第一で、荷物の取り扱いには最大限の注意を払っておりますので、お客様に迅速かつ丁寧な配送をお約束いたします。</div>
          <div class="modal-btn">閉じる</div>
        </div>
      </div>
    </div>
    <div id="modal02" class="business-content_modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-inner">
          <div class="modal-heading">
            <div class="heading-image"><img src="<?php echo THEME_URL ?>/assets/img/business/bg_btn_02.png" alt=""></div>
            <h3 class="heading-ttl">スポット<br>チャーター便<span>(委託ドライバー様向け)</span></h3>
          </div>
          <div class="modal-copy">お客様の元へ商品をお届けするネットスーパーは、地域密着型のお店が増える中で、ドライバーの接客力が非常に重要となります。<br>当社では充実した研修制度を整えておりますので、安心してご依頼ください。実際に、拠点を丸ごと任せて頂いているお店もございます。</div>
          <div class="modal-btn">閉じる</div>
        </div>
      </div>
    </div>
    <div id="modal03" class="business-content_modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-inner">
          <div class="modal-heading">
            <div class="heading-image">
              <picture>
                <source media="(min-width:769px)" srcset="<?php echo THEME_URL ?>/assets/img/business/bg_btn_03.png">
                <img src="<?php echo THEME_URL ?>/assets/img/business/bg_btn_03_sp.png" loading="lazy" alt="">
              </picture>
            </div>
            <h3 class="heading-ttl">宅配<span>(委託ドライバー様向け)</span></h3>
          </div>
          <div class="modal-copy">大切な貴重品や壊れやすいデリケートな荷物を個人様のお宅にお届けする際は、信頼できる運送会社を選びたいと考える方も多いでしょう。<br>弊社は大手業者からの表彰も受けており、、最高の配送品質を目指して努力しているクオリティ・ワンは、常にお客様目線で丁寧かつ迅速な軽貨物輸送を行なっています。</div>
          <div class="modal-btn">閉じる</div>
        </div>
      </div>
    </div>
    <div id="modal04" class="business-content_modal">
      <div class="modal-overlay"></div>
      <div class="modal-content">
        <div class="modal-inner">
          <div class="modal-heading">
            <div class="heading-image"><img src="<?php echo THEME_URL ?>/assets/img/business/bg_btn_04.png" alt=""></div>
            <h3 class="heading-ttl">取扱運送業</h3>
          </div>
          <div class="modal-copy">一般貨物の車両手配などもお任せください。<br>お客様のニーズに合わせて最適な車両手配や物流サービスを提案・提供いたします。<br>弊社は常にお客様の満足度向上に努め、迅速かつ丁寧な対応を心がけています。<br class="is-pc">東京・埼玉からの配送に関するご相談やお問い合わせは、ぜひクオリティ・ワンにお任せください。</div>
          <div class="modal-btn">閉じる</div>
        </div>
      </div>
    </div>
  </section>

  <section class="business-fun">
    <div class="l-inner">
      <div class="business-fun_content js-bounce-trigger">
        <h2 class="business-fun_ttl c-lead js-letter js-bounce-target">仕事の面白さ</h2>
        <div class="business-fun_list">
          <div class="business-fun_item js-bounce-target">
            <h3 class="item-ttl">与えられたノルマを確認<div class="c-borderBg c-borderBg--small"><span></span><span></span><span></span><span></span></div>
            </h3>
            <div class="item-content">
              <div class="item-text">与えられたノルマを確認することで新たなチャレンジを見つけ、日々成長していくことに繋がります。ノルマは単なる目標ではなく、自身の能力や努力を試す機会でもあります。<br class="is-pc">常に自分の限界に挑戦していき、その達成感を味わうことで、<br>仕事に対する情熱ややりがいを感じることができます。</div>
              <div class="item-image"><img src="<?php echo THEME_URL ?>/assets/img/business/img_fun_01.png" alt=""></div>
            </div>
          </div>
          <div class="business-fun_item js-bounce-target">
            <h3 class="item-ttl">ノルマを素早く丁寧に運ぶ<div class="c-borderBg c-borderBg--small"><span></span><span></span><span></span><span></span></div>
            </h3>
            <div class="item-content">
              <div class="item-text">なんといっても配送業の面白さは、与えられたノルマを素早く丁寧にこなすこと！<br>ノルマ達成のためには、効率的な計画や素早く丁寧な行動が求められ、それによって達成感や充実感を得ることができ、お客様からの喜びや感謝の声を受け取ることができる！<br class="is-pc">さらに、日々変化する環境や課題に対処することで、自己成長や新たな挑戦の機会が与えられることも、配送業の面白さの一つ！</div>
              <div class="item-image"><img src="<?php echo THEME_URL ?>/assets/img/business/img_fun_02.png" alt=""></div>
            </div>
          </div>
          <div class="business-fun_item js-bounce-target">
            <h3 class="item-ttl">クリア後の特別報酬は格別！<div class="c-borderBg c-borderBg--small"><span></span><span></span><span></span><span></span></div>
            </h3>
            <div class="item-content">
              <div class="item-text">すべての配達が終われば今日のお仕事は終了！<br class="is-pc">早く運べば運ぶほど、自分の時間が増えていく。</div>
              <div class="item-image"><img src="<?php echo THEME_URL ?>/assets/img/business/img_fun_03.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>
<!-- .l-main -->

<?php get_footer(); ?>
