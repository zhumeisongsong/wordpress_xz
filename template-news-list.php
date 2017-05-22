<?php /* Template Name: news list */
get_header(); ?>

  <main role="main">

    <header class="list-header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="header-img">
      <div class="container">
        <p>资讯中心</p>
      </div>
    </header>

    <section class="list-con container">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-stacked col-xs-3" role="tablist">
        <li role="presentation" class="active">
          <a href="#news" aria-controls="home" role="tab" data-toggle="tab">新闻中心</a>
        </li>
        <li role="presentation">
          <a href="#notices" aria-controls="profile" role="tab" data-toggle="tab">公示公告</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content col-xs-9 no-padding-r">
        <ol class="breadcrumb"> 
          <li>您的位置：<a href="<?php echo home_url(); ?>">首页</a></li>
          <li><a href="<?php echo home_url(); ?>/news">资讯中心</a></li>
        </ol>

        <div role="tabpanel" class="tab-pane active" id="news">
          <section class="container-fluid no-padding">
            <div class="row case-con no-margin-lr">
                <?php
                $paged_cases = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'news',
                );
                $loop_cases = new WP_Query($args);
                while ($loop_cases->have_posts()):
                    $loop_cases->the_post();
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

        <div role="tabpanel" class="tab-pane" id="notices">
          <section class="container-fluid no-padding">
            <div class="row notices-con no-margin-lr">
                <?php
                $paged_cases = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'notices',
                );
                $loop_cases = new WP_Query($args);
                while ($loop_cases->have_posts()):
                    $loop_cases->the_post();
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

      </div>
    </section>
  </main>
<?php get_footer(); ?>