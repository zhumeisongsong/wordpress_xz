<?php get_header(); ?>

<main role="main" class="article-main">
  <div class="detail-cover">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="cover">
  </div>
  <!-- section -->
  <section class="detail-con container">
    <div class="col-xs-12">
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <!-- article -->
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <!-- post title -->
            <h1 class="article-title">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </h1>
            <!-- /post title -->

            <!-- post details -->
            <span class="date"><?php the_time('Y-j-m'); ?></span>
            <!-- /post details -->

              <?php the_content(); ?>

          </article>
        <?php endwhile; ?>
        <?php else: ?>

          <article>
            <h1><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h1>
          </article>

        <?php endif; ?>
    </div>
  </section>
  <!-- /section -->
</main>
<?php get_footer(); ?>


