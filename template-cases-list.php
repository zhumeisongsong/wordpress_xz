<?php /* Template Name: cases list */
get_header(); ?>

<main role="main">
  <header class="list-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="header-img">
    <div class="container hidden-xs">
      <p>产品与案例</p>
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
        <li><a href="<?php echo home_url(); ?>/cases_list/">产品与案例</a></li>
      </ol>

      <div role="tabpanel" class="tab-pane production-tab-pane active" id="productions">
        <section class="container-fluid no-padding">
          <div class="row case-con no-margin-lr">
              <?php
              $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                  'post_type' => 'productions',
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
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cover.jpg" alt="cover">
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
        </section>
      </div>

      <div role="tabpanel" class="tab-pane" id="cases">
        <section class="container-fluid no-padding">
          <div class="row case-con no-margin-lr">
              <?php
              $paged_cases = (get_query_var('paged')) ? get_query_var('paged') : 1;
              $args = array(
                  'post_type' => 'cases',
              );
              $loop_cases = new WP_Query($args);
              while ($loop_cases->have_posts()):
                  $loop_cases->the_post();
                  ?>
                <a href="<?php the_permalink() ?>" class="col-xs-12 item-cell"> 
                  <div class="col-xs-4 img-con no-padding">
                      <?php
                      if (has_post_thumbnail()) { ?>
                          <?php the_post_thumbnail(); ?>
                      <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cover.jpg" alt="cover">
                      <?php } ?>
                  </div>
                  <div class="col-xs-8 no-padding text-con">
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
      </div>
    </div>

  </section>
</main>

<?php get_footer(); ?>

<?php $type = $_GET[type];
if ($type != 'productions') {
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
}
?>
