<?php get_header(); ?>

<main role="main">
  <!--swiper-->
  <section class="container-fluid fluid-con-con no-padding">
    <div class="swiper-container">
      <div class="swiper-wrapper">

          <?php
          $args = array(
              'post_type' => 'banner',
              'showposts' => '5',
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post();
              ?>
            <div class="swiper-slide">
                <?php the_post_thumbnail(); ?>
            </div>
              <?php
          endwhile;
          wp_reset_query();
          ?>

        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <!--news&notices-->
  <section class="container">
    <div class="row">

      <section class="news-con col-sm-7">
        <header class="row title-con">
          <h4 class="col-xs-9 no-padding-l">
            <span class="border-bottom">新闻动态<span>news</span></span>
          </h4>
          <div class="a-btn col-xs-3 no-padding-r">
            <a href="<?php echo home_url(); ?>/index.php/news_list">更多>></a>
          </div>
        </header>

        <div class="row no-margin-lr">
            <?php
            $args = array(
                'post_type' => 'news',
                'showposts' => '3',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();
                ?>

              <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
                <div class="img-con">
                    <?php
                    if (has_post_thumbnail()) { ?>
                        <?php the_post_thumbnail(); ?>
                    <?php } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/new.jpg" alt="cover">
                    <?php } ?>
                </div>

                <div class="text-con">
                  <div class="title-text"><?php the_title(); ?> </div>
                  <div class="excerpt-text"><?php the_excerpt(); ?></div>
                </div>
              </a> 
                <?php

            endwhile;
            wp_reset_query();
            ?>

        </div>
      </section>

      <section class="notices-con col-sm-5">
        <header class="row title-con">
          <h4 class="col-xs-9 no-padding-l">
            <span class="border-bottom">公告<span>notices</span></span>
          </h4>

          <div class="a-btn col-xs-3 no-padding-r">
            <a href="<?php echo home_url(); ?>/index.php/news_list?type=notices">更多>></a>
          </div>
        </header>

        <div class="row no-margin-lr">

            <?php
            $args = array(
                'post_type' => 'notices',
                'showposts' => '9',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()):
                $loop->the_post();

                ?>
              <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
                [公告]<?php the_title(); ?>
              </a> 
                <?php
            endwhile;
            wp_reset_query();
            ?>

        </div>
      </section>

    </div>
  </section>

  <!--production-->
  <section class="container">
    <header class="row title-con">
      <h4 class="col-xs-9 no-padding-l">
        <span class="border-bottom">产品中心<span>productions</span></span>
      </h4>

      <div class="a-btn col-xs-3 no-padding-r">
        <a href="<?php echo home_url(); ?>/index.php/cases_list?type=productions">更多>></a>
      </div>
    </header>

    <div class="row production-con">
        <?php
        $args = array(
            'post_type' => 'productions',
            'showposts' => '6',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>

          <a class="col-xs-12 col-sm-4 item-con" href="<?php the_permalink() ?>">
            <div class="item-cell">
              <div class="img-con">
                  <?php
                  if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail(); ?>
                  <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-cover.png" alt="cover">
                  <?php } ?>
              </div>
              <div class="text-con">
                <div class="title-text"><?php the_title(); ?> </div>
                <div class="excerpt-text"><?php the_excerpt(); ?></div>
              </div>
            </div>
          </a>
            <?php
        endwhile;
        wp_reset_query();
        ?>

    </div>
  </section>

  <!--cases-->
  <div class="container">
    <header class="row title-con">
      <h4 class="col-xs-9 no-padding-l">
        <span class="border-bottom">成功案例<span>cases</span></span>
      </h4>

      <div class="a-btn col-xs-3 no-padding-r">
        <a href="<?php echo home_url(); ?>/index.php/cases">更多>></a>
      </div>
    </header>

    <div class="row case-con no-margin-lr">
        <?php
        $args = array(
            'post_type' => 'cases',
            'showposts' => '2',
        );
        $loop = new WP_Query($args);
        while ($loop->have_posts()):
            $loop->the_post();
            ?>

          <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
            <div class="col-xs-12 col-sm-4 img-con no-padding">
                <?php
                if (has_post_thumbnail()) { ?>
                    <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/case.jpg" alt="cover">
                <?php } ?>
            </div>

            <div class="col-xs-12 col-sm-8 no-padding text-con">
              <div class="title-text"><?php the_title(); ?> </div>
              <div class="excerpt-text"><?php the_excerpt(); ?></div>
            </div>
          </a> 
            <?php

        endwhile;
        wp_reset_query();
        ?>

    </div>

  </div>

  <!--partner-->
  <section class="container partner-con">
    <header class="row title-con">
      <h4 class="col-xs-12 no-padding">
        <span class="border-bottom">合作伙伴<span>partners</span></span>
      </h4>
    </header>

    <section class="row">
      <div class="col-sm-12 item-con">

          <?php
          $args = array(
              'post_type' => 'partners',
          );
          $loop = new WP_Query($args);
          while ($loop->have_posts()):
              $loop->the_post();
              ?>
            <div class="col-md-3 col-sm-4 col-xs-6 item-cell">
              <a href="<?php echo get_post_meta($post->ID, '_link', true) ?>" target="_blank" class="item-cell-link">
                  <?php the_post_thumbnail(); ?>
                <div class="hover-con"><span><?php the_title(); ?></span></div>
              </a>
            </div>

              <?php
          endwhile;
          wp_reset_query();
          ?>

      </div>
    </section>

  </section>

  <!--code-->
  <section class="container-fluid code-con">
    <div class="row">
      <div class="col-xs-12 img-con">
        <p>立即扫码关注微信公众号</p>
        <img src="<?php echo get_template_directory_uri(); ?>/img/code.jpg" alt="code">
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>


