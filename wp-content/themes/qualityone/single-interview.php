<?php get_header(); ?>

<main class="l-main bg01">

  <section class="sub-mainvisual sub-mainvisual_interview sub-mainvisual_interview--detail inview js-anim_elm">
    <div class="bg-icon icon01 -delay1 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_01.png" alt=""></div>
    <div class="bg-icon icon02 -delay2"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_02.png" alt=""></div>
    <div class="bg-icon icon03 -delay3 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_03.png" alt=""></div>
    <div class="bg-icon icon04 -delay4 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_04.png" alt=""></div>
    <div class="bg-icon icon05 -delay5 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_05.png" alt=""></div>
    <div class="bg-icon icon06 -delay6 is-pc"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_06.png" alt=""></div>
    <div class="bg-icon icon07 -delay7"><img src="<?php echo THEME_URL ?>/assets/img/sub/icon_mainvisual_07.png" alt=""></div>
    <div class="l-inner">
      <div class="number"><?php the_field('number'); ?></div>
      <div class="sub-mainvisual_ttl">
        <h3 class="c-lead js-letter"><?php the_title(); ?></h3>
        <div class="info">
          <span><?php the_field('date'); ?>年目：</span>
          <span><?php the_field('position'); ?></span>
        </div>
      </div>
      <div class="copy">
        <div class="text"><?php the_field('intro'); ?></div>
      </div>
    </div>
    <div class="sub-mainvisual_image"><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fit')) ?>/div>
  </section>

  <section class="interview-detail">
    <div class="l-inner">
      <div class="interview-detail_content">
        <?php
          if( have_rows('content') ):
            while ( have_rows('content') ) : the_row();

              if( get_row_layout() == 'message' ):
                $title = get_sub_field('title');
                $content = get_sub_field('content');
                echo '<div class="content-text js-bounce-trigger">';
                echo '<h3 class="content-text_ttl js-bounce-target"><span>01</span>' . $title . '</h3>';
                echo '<div class="content-text_copy js-bounce-target">' . $content . '</div>';
                echo '</div>';

              elseif( get_row_layout() == 'images' ):
                $image = get_sub_field('image');
                echo '<div class="js-bounce-trigger">';
                echo '<div class="content-image js-bounce-target"><img src="'. $image .'" alt=""></div>';
                echo '</div>';
              endif;

            endwhile;
          endif;
        ?>
      </div>
    </div>
  </section>

  <section class="interview-list js-bounce-trigger">
    <div class="l-inner">
      <h2 class="interview-list_ttl c-lead js-letter js-bounce-target">インタビュー一覧</h2>
    </div>
    <div class="interview-list_slider">
      <div class="top-interview_slider splide">
        <div class="splide__track">
          <ul class="splide__list">
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
                  <li class="splide__slide item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="item-image"><?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'fit')) ?></div>
                      <div class="item-text">
                        <div class="item-position"><?php the_field('date'); ?>年目：<?php the_field('position'); ?></div>
                        <div class="item-name"><?php the_title(); ?></div>
                      </div>
                      <div class="item-btn c-btn c-btn_border">VIEW MORE</div>
                      <div class="item-num">#<?php echo $formatted_counter; ?></div>
                    </a>
                  </li>
            <?php $counter++; endwhile; wp_reset_postdata(); ?>
            <?php endif; ?>
          </ul>
        </div>
        <div class="splide__arrows"></div>
      </div>
    </div>
  </section>


</main>
<!-- .l-main -->

<?php get_footer(); ?>
