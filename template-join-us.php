<?php /* Template Name: join us */
get_header(); ?>

  <main role="main">

    <header class="list-header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-us.jpg" alt="header-img">
      <div class="container hidden-xs">
        <p>招贤纳士</p>
      </div>
    </header>

    <section class="list-con container">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-stacked col-xs-3" role="tablist">
        <li role="presentation" class="active">
          <a href="#about_company" aria-controls="home" role="tab" data-toggle="tab">招贤纳士</a>
        </li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content col-xs-9 no-padding-r">
        <ol class="breadcrumb"> 
          <li>您的位置：<a href="<?php echo home_url(); ?>">首页</a></li>
          <li><a href="<?php echo home_url(); ?>/join_us">招贤纳士</a></li>
        </ol>
        <div role="tabpanel" class="tab-pane active" id="about_company">
          <h3>招贤纳士</h3>
          <div class="text-con">

          </div>
        </div>
      </div>

    </section>
  </main>
<?php get_footer(); ?>