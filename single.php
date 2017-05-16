<?php get_header(); ?>

<main role="main" class="article-main">
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
  <!-- section -->
  <section class="article-con container">
    <div class="col-xs-12">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <!-- article -->
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- post thumbnail -->
              <?php if (has_post_thumbnail()) : // Check if Thumbnail exists ?>
                  <?php the_post_thumbnail(); // Fullsize image for the single post ?>
              <?php endif; ?>
            <!-- /post thumbnail -->

            <!-- post title -->
            <h1 class="article-title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h1>
            <!-- /post title -->

            <!-- post details -->
            <span class="date"><?php the_time('Y-j-m'); ?></span>
            <!-- /post details -->

              <?php the_content(); // Dynamic Content ?>

          </article>
          <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

          <!-- article -->
          <article>

            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>

          </article>
          <!-- /article -->

        <?php endif; ?>
    </div>
  </section>
  <!-- /section -->
    <?php get_footer(); ?>
</main>


