<?php get_header(); ?>

<main role="main">
  <!--swiper-->
  <section class="container-fluid no-padding swiper-con">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/headerimg-1.jpg" alt="swiper-img">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/headerimg-2.jpg" alt="swiper-img">
        </div>
        <div class="swiper-slide">
          <img src="<?php echo get_template_directory_uri(); ?>/img/headerimg-3.jpg" alt="swiper-img">
        </div>
        <div class="swiper-pagination"></div>
      </div>
  </section>

  <!--about-->
  <section class="about-con container" id="about">
    <div class="row">
      <header class="col-sm-12 animated con-title">
        <h3>西藏电子商务有限公司</h3>
        <div class="line2 line2-works"></div>
        <p>our company</p>
      </header>

      <div class="col-sm-3 hidden-xs left-img no-padding">
        <div class="img-con">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
        </div>
      </div>
      <div class="col-sm-9 col-xs-12 text-con">

        <p>西藏电子商务有限公司是西藏地区唯一一家由政府引导、企业参与、高度市场化运作的大型国资背景综合电商平台。
        </p>
        <p>公司始终坚持“网上天路·购通世界”的企业使命，以西藏区域电子商务生态系统建设为职能定位，通过互联网连接西藏与世界，突破时空局限，拓宽贸易领域，向全世界展示当代西藏的魅力与活力。
        </p>
        <p>
          公司拟总投资6亿元，利用3-5年实现与市场的二次融合，力争成为国内最具影响力的西藏特色产品交易平台，成为拉动区内企业拓展区外市场的强力引擎，成为向世人展示西藏特色风貌的第一窗口，成为政府了解产业发展、进行宏观调控的数据支撑平台，成为推进西藏产业升级、结构调整的重要载体，成为促进西藏大众创业、万众创新的服务平台。
        </p>

      </div>
    </div>


  </section>

  <!--service-->
  <div class="container-fluid bg-color">
    <section class="service-con container" id="service">
      <div class="row">
        <header class="col-sm-12 animated con-title">
          <h3>核心业务</h3>
          <div class="line2 line2-works"></div>
          <p>our service</p>
        </header>

        <section class="col-sm-12 no-padding">
          <div class="col-xs-12 col-sm-3 icon-con">
            <div class="fa fa-shopping-cart icon-cell"></div>
            <h4 class="text-title">
              电商运营
            </h4>
            <p>
              旅游+购物，西藏区域特色电商平台
            </p>
          </div>
          <div class="col-xs-12 col-sm-3 icon-con">
            <div class="fa fa-sellsy icon-cell"></div>
            <h4 class="text-title">
              电商服务
            </h4>
            <p>
              依托公司资源，面向西藏自治区的综合电商服务
            </p>
          </div>
          <div class="col-xs-12 col-sm-3 icon-con">
            <div class="fa fa-exchange icon-cell"></div>
            <h4 class="text-title">
              资产电商
            </h4>
            <p>
              通过O2O交易技术，构建“产权交易+淘宝网”的模式
            </p>
          </div>
          <div class="col-xs-12 col-sm-3 icon-con">
            <div class="fa fa-group icon-cell"></div>
            <h4 class="text-title">
              公众服务
            </h4>
            <p>
              投融资平台、CA认证平台、第三方支付等
            </p>
          </div>
          <div class="col-sm-4 col-sm-offset-4 col-xs-12 icon-con">
            <div class="fa fa-tasks icon-cell"></div>
            <h4 class="text-title">
              支撑核心业务的平台+实体
            </h4>
            <p>
              旅游平台、购物平台、第三方平台、大宗交易平台、购物中心、汽车租赁、旅行社、IDC机房、电子商务产业园
            </p>
          </div>
        </section>
      </div>

    </section>
  </div>

  <!--news-->
  <section class="main-con container">

    <header class="col-sm-12 animated con-title">
      <h3>最新动态</h3>
      <div class="line2 line2-works"></div>
      <p>news</p>
    </header>

    <section class="main-wrapper col-sm-12 no-padding" role="complementary">
      <div class="col-sm-6 hidden-xs no-padding-l">
        <div class="img-con">
          <img src="<?php echo get_template_directory_uri(); ?>/img/new.jpg" alt="news-left-img">
        </div>
      </div>

      <div class="col-sm-6 col-xs-12 no-padding news-list">
          <?php $post_query = new WP_Query('showposts=10');
          while ($post_query->have_posts()) : $post_query->the_post();
              $do_not_duplicate = $post->ID; ?> 

            <a href="<?php the_permalink() ?>" class="col-xs-12 no-padding"> 
              <span class="news-title col-xs-8 no-padding-l"><?php the_title(); ?> </span>
              <span class="news-date col-xs-4 no-padding">[<?php the_time('Y-m-d'); ?>]</span> 
            </a> 
          <?php endwhile; ?> 
      </div>
    </section>

    <div class="a-btn col-xs-12">
      <a href="<?php echo home_url(); ?>/index.php/?page_id=10">MORE</a>
    </div>
  </section>
  <!--info -->
  <section class="container-fluid info-con no-padding">
    <div class="text">
      网上天路 购通世界<br>以诚为本 用心服务
    </div>
  </section>
  <!--contact-->
  <section class="contact-con container" id="contact">
    <div class="row">

      <header class="col-sm-12 animated con-title">
        <h3>联系我们</h3>
        <div class="line2 line2-works"></div>
        <p>contact us</p>
      </header>

      <section class="col-sm-10 col-sm-offset-1 no-padding">
        <div class="col-sm-4 animated icon-con">
          <h4><i class="fa fa-phone"></i>联系电话</h4>
          <p>这里是您的联系电话</p>
        </div>
        <div class="col-sm-4 animated icon-con">
          <h4><i class="fa fa-map-marker"></i>公司地址</h4>
          <p>这里是您的公司地址</p>
        </div>
        <div class="col-sm-4 animated icon-con email-con">
          <h4><i class="fa fa-envelope-o"></i>邮箱</h4>
          <p>这里是您的公司邮箱</p>
        </div>
      </section>

    </div>
  </section>

</main>

<?php get_footer(); ?>

