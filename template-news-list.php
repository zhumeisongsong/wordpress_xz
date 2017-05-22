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

        <div role="tabpanel" class="tab-pane active" id="#news">

        </div>
        <div role="tabpanel" class="tab-pane" id="#notices">

        </div>

      </div>

    </section>
  </main>
<?php get_footer(); ?>