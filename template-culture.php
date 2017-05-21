<?php /* Template Name: culture */
get_header(); ?>

<main role="main">

  <header class="list-header">
    <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="header-img">
    <div class="container hidden-xs">
      <p>党建与企业文化</p>
    </div>
  </header>

  <section class="list-con container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-stacked col-xs-3" role="tablist">
      <li role="presentation" class="active">
        <a href="#about_company" aria-controls="home" role="tab" data-toggle="tab">活动情况</a>
      </li>
      <li role="presentation">
        <a href="#about_porpose" aria-controls="profile" role="tab" data-toggle="tab">学习资料</a>
      </li>
      <li role="presentation">
        <a href="#about_direction" aria-controls="messages" role="tab" data-toggle="tab">企业文化</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content col-xs-9 no-padding-r">
      <ol class="breadcrumb"> 
        <li>您的位置：<a href="<?php echo home_url(); ?>">首页</a></li>
        <li><a href="<?php echo home_url(); ?>/culture">党建与企业文化</a></li>
      </ol>
      <div role="tabpanel" class="tab-pane active" id="about_company">
        <h3>活动情况</h3>
        <div class="text-con">
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="about_porpose">
        <h3>学习资料</h3>
        <div class="text-con">
        </div>
      </div>
      <div role="tabpanel" class="tab-pane" id="about_direction">
        <h3>企业文化</h3>
        <div class="text-con">
        </div>
      </div>
    </div>

  </section>
</main>
<?php get_footer(); ?>
