<?php /* Template Name: join us */
get_header(); ?>

  <main role="main">

    <header class="list-header">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-list.jpg" alt="header-img">
      <p class="header-text">招贤纳士</p>
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
            <p>西藏电子商务有限公司是西藏地区唯一一家由政府引导、企业参与、高度市场化运作的大型国资背景综合电商平台。
            </p>
            <p>公司始终坚持“网上天路·购通世界”的企业使命，以西藏区域电子商务生态系统建设为职能定位，通过互联网连接西藏与世界，突破时空局限，拓宽贸易领域，向全世界展示当代西藏的魅力与活力。
            </p>
            <p>
              公司拟总投资6亿元，利用3-5年实现与市场的二次融合，力争成为国内最具影响力的西藏特色产品交易平台，成为拉动区内企业拓展区外市场的强力引擎，成为向世人展示西藏特色风貌的第一窗口，成为政府了解产业发展、进行宏观调控的数据支撑平台，成为推进西藏产业升级、结构调整的重要载体，成为促进西藏大众创业、万众创新的服务平台。
            </p>
          </div>
        </div>
      </div>

    </section>
  </main>
<?php get_footer(); ?>