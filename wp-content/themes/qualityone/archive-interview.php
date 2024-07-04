<?php get_header(); ?>

<main class="l-main bg01">

  <section class="sub-mainvisual sub-mainvisual_interview inview js-anim_elm">
    <div class="bg-icon icon01 -delay1 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_01.png" alt=""></div>
    <div class="bg-icon icon02 -delay2"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_02.png" alt=""></div>
    <div class="bg-icon icon03 -delay3 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_03.png" alt=""></div>
    <div class="bg-icon icon04 -delay4 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_04.png" alt=""></div>
    <div class="bg-icon icon05 -delay5 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_05.png" alt=""></div>
    <div class="bg-icon icon06 -delay6 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_06.png" alt=""></div>
    <div class="bg-icon icon07 -delay7"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_07.png" alt=""></div>
    <div class="l-inner">
      <div class="c-hashtag">#PARTY</div>
      <div class="sub-mainvisual_ttl">
        <h2 class="c-ttl">INTERVIEW</h2>
        <h3 class="c-lead js-letter">社員紹介</h3>
      </div>
    </div>
    <div class="sub-mainvisual_image"><img src="<?php echo THEME_URL ?>/assets/img/interview/img_mainvisual.png" alt=""></div>
  </section>

  <section class="interview-content">
    <div class="interview-content_list">
      <?php
        $interview = array(
          'post_type' => 'interview'
        );
        $query_interview = new WP_Query($interview);
        $counter = 1;

        if ($query_interview->have_posts()) :
          while ($query_interview->have_posts()) : $query_interview->the_post();
          $formatted_counter = sprintf('%02d', $counter);
          ?>
            <div class="interview-content_item js-bounce-trigger">
              <div class="l-inner">
                <div class="item-content js-bounce-target">
                  <div class="item-image">
                    <figure class="image"><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fit')) ?></figure>
                    <div class="number">#<?php echo $formatted_counter; ?></div>
                  </div>
                  <div class="item-text">
                    <div class="item-heading">
                      <h3 class="item-ttl c-lead js-letter"><?php the_title(); ?></h3>
                      <div class="item-info">
                        <span><?php the_field('date'); ?>年目：</span>
                        <span><?php the_field('position'); ?></span>
                      </div>
                    </div>
                    <div class="item-copy">
                      <div class="text"><?php the_field('intro'); ?></div>
                    </div>
                    <div class="item-btn"><a href="<?php the_permalink(); ?>" class="c-btn c-btn_border">VIEW MORE</a></div>
                  </div>
                </div>
              </div>
            </div>
        <?php $counter++; endwhile; wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
  </section>



  <section class="interview-gallery">
    <div class="l-inner">
    <?php
      $gallerys = get_field('image', 'gallery');
      if( $gallerys ): ?>
        <div class="interview-gallery_content js-bounce-trigger">
          <h2 class="interview-gallery_ttl c-lead js-bounce-target"><span>ギ</span><span>ャ</span><span>ラ</span><span>リ</span><span>ー</span></h2>
          <div class="interview-gallery_box">
            <div class="interview-gallery_slider js-bounce-target">
              <div class="interview-gallery_main splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach( $gallerys as $gallery ): ?>
                      <li class="splide__slide">
                        <img src="<?php echo esc_html($gallery); ?>" alt="">
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
              <div class="interview-gallery_thumbnail splide">
                <div class="splide__track">
                  <ul class="splide__list">
                    <?php foreach( $gallerys as $gallery ): ?>
                      <li class="splide__slide">
                        <img src="<?php echo esc_html($gallery); ?>" alt="">
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="splide__arrows"></div>
              </div>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </section>


</main>
<!-- .l-main -->

<?php get_footer(); ?>
