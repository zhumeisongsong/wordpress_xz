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
        <?php $type = $_GET[type];
        echo $type;
        if ($type != 'productions') {
            ?>
          <script>
              $(function ($) {
                  $('#cases').addClass('active');
              }(jQuery));
          </script>
            <?php
        }
        ?>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-stacked col-xs-3" role="tablist">
        <li role="presentation" class="active">
          <a href="#about_company" aria-controls="home" role="tab" data-toggle="tab">产品</a>
        </li>
        <li role="presentation" id="cases">
          <a href="#about_porpose" aria-controls="profile" role="tab" data-toggle="tab">案例</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content col-xs-9 no-padding-r">
        <ol class="breadcrumb"> 
          <li>您的位置：<a href="<?php echo home_url(); ?>">首页</a></li>
          <li><a href="<?php echo home_url(); ?>/cases">产品与案例</a></li>
        </ol>

        <div role="tabpanel" class="tab-pane active" id="about_company">
          <h3>公司概况</h3>
        </div>
        <div role="tabpanel" class="tab-pane" id="about_porpose">发展目标</div>

      </div>

    </section>
  </main>

<?php get_footer(); ?>