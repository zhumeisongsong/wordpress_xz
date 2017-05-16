<?php /* Template Name: Demo Page Template */
get_header(); ?>

<main role="main">
  <div class="detail-cover">
    <img src="<?php echo get_template_directory_uri(); ?>/img/news-header.jpg" alt="cover">
  </div>
  <header class="bread-con">
    <div class="container">
      <ol class="breadcrumb col-xs-12">
        <li><a href="<?php echo home_url(); ?>">首页</a></li>
        <li><a href="<?php echo home_url(); ?>/?page_id=10">新闻列表</a></li>
      </ol>
    </div>
  </header>
  <section class="container news-list-con">
    <div class="row">
      <div class="col-xs-12 news-list">
          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $post_query = new WP_Query('showposts=15' .
              "posts_per_page=" . $posts_per_page .
              "&orderby=" . $order_by .
              "&order=" . $order .
              "&cat=" . $cat .
              "&paged=" . $paged);
          while ($post_query->have_posts()) : $post_query->the_post();
              $do_not_duplicate = $post->ID; ?> 
            <a href="<?php the_permalink() ?>" class="col-xs-12 no-padding"> 
              <span class="news-title col-xs-8"><?php the_title(); ?> </span>
              <span class="news-date col-xs-4">[<?php the_time('Y-m-d'); ?>]</span> 
            </a> 
          <?php endwhile; ?> 

      </div>
      <div class="col-xs-10 col-xs-offset-1 page-navi">
          <?php if (function_exists('wp_pagenavi')) wp_pagenavi(array('query' => $post_query)); ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
