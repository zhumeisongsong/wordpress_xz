<?php /* Template Name: cases list */
get_header(); ?>

<main role="main">
  <header class="list-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="header-img">
    <div class="container hidden-xs">
      <p>产品与案例</p>zx
    </div>
  </header>
  <section class="list-con container">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-stacked col-xs-3" role="tablist">
      <li role="presentation" class="productions active">
        <a href="#productions" aria-controls="home" role="tab" data-toggle="tab">产品</a>
      </li>
      <li role="presentation" class="cases">
        <a href="#cases" aria-controls="profile" role="tab" data-toggle="tab">案例</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content col-xs-9 no-padding-r">
      <ol class="breadcrumb"> 
        <li>您的位置：<a href="<?php echo home_url(); ?>">首页</a></li>
        <li><a href="<?php echo home_url(); ?>/cases">产品与案例</a></li>
      </ol>

      <div role="tabpanel" class="tab-pane active" id="productions">

        <!--                --><?php
          //
          //                $post_query = new WP_Query(
          //                    'showposts=15' .
          //
          //
          ////                while ($post_query->have_posts()) : $post_query->the_post();
          ////                    $do_not_duplicate = $post->ID; ?><!--<!-- -->-->

        <section class="container">
          <div class="row case-con no-margin-lr">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                  'post_type' => 'productions',
                  'showposts' => '1',
                  "posts_per_page" => $posts_per_page,
                  "&orderby" => $order_by,
                  "&order" => $order,
                  "&cat=" => $cat,
                  "&paged" => $paged,
              );
              $loop_productions = new WP_Query($args);
              while ($loop_productions->have_posts()):
                  $loop_productions->the_post();
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

            <div class="col-xs-10 col-xs-offset-1 page-navi">
                <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $loop_productions)); ?>
            </div>

          </div>
        </section>
      </div>

      <div role="tabpanel" class="tab-pane" id="cases">

        <div class="row case-con no-margin-lr">
<!--            --><?php
//            $args = array(
//                'post_type' => 'cases',
//                'showposts' => '2',
//            );
//            $loop = new WP_Query($args);
//            while ($loop->have_posts()):
//                $loop->the_post();
//                ?>
<!---->
<!--              <a href="--><?php //the_permalink() ?><!--" class="col-xs-12 item-cell"> -->
<!--                <div class="col-xs-12 col-sm-4 img-con no-padding">-->
<!--                    --><?php
//                    if (has_post_thumbnail()) { ?>
<!--                        --><?php //the_post_thumbnail(); ?>
<!--                    --><?php //} else { ?>
<!--                      <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/case.jpg" alt="cover">-->
<!--                    --><?php //} ?>
<!--                </div>-->
<!---->
<!--                <div class="col-xs-12 col-sm-8 no-padding text-con">-->
<!--                  <div class="title-text">--><?php //the_title(); ?><!-- </div>-->
<!--                  <div class="excerpt-text">--><?php //the_excerpt(); ?><!--</div>-->
<!--                </div>-->
<!--              </a> -->
<!--                --><?php
//
//            endwhile;
//            wp_reset_query();
//            ?>

        </div>

      </div>
    </div>

  </section>
</main>

<?php get_footer(); ?>

<?php $type = $_GET[type];
if ($type != 'productions') {
    echo $type;
    ?>
  <script>
      $(function ($) {
          $('.productions').removeClass('active');
          $('.cases').addClass('active');

          $('#productions').removeClass('active');
          $('#cases').addClass('active');
      }(jQuery));
  </script>
    <?php
} else {
    echo $$type, 'false';
}
?>
