<!doctype html>
<html class="no-js" lang="zh-CN">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width initial-scale=1, maximum-scale=1, user-scalable=no"/>
  <title>西藏电子商务有限公司</title>

  <!--css-->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/Font-Awesome-master/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/swiper.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/animate.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheet/style.css">

    <?php wp_head(); ?>
  <script>
      // conditionizr.com
      // configure environment tests
      //      conditionizr.config({
      //          assets: '<?php //echo get_template_directory_uri(); ?>//',
      //          tests: {}
      //      });
  </script>
</head>
<body <?php body_class(); ?>>

<nav class="navbar" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar_collapse" aria-expanded="false">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
        <div class="img-con">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="西藏电商">
        </div>
      </a>
    </div>

    <!--right navbar collapse-->
    <div class="collapse navbar-collapse navbar-main-collapse navbar-right top-menu" id="navbar_collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="<?php echo home_url(); ?>">首页</a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/?page_id=10">新闻</a>
        </li>
        <li>
          <a href="<?php echo home_url();  ?>#service">业务范围</a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>#about">关于我们</a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>#contact">联系我们</a>
        </li>
      </ul>
    </div>

  </div>
</nav>