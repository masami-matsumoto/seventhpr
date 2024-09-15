<?php 
/*
Template Name:Works2
*/
get_header(); 
?>

<section class="hero-section jarallax py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 my-5 py-5" data-aos="fade-up">
        <div class="section-header mt-5 text-white text-center">
          <div class="breadcrumbs"> <span class="item"><a href="index.html">HOME /</a></span> <span class="item">WORKS</span> </div>
          <h1 class="display-1 fw-bold">WORKS</h1>
        </div>
        <!--section-header--> 
      </div>
    </div>
  </div>
</section>
<section class="py-2 my-2 py-md-5 my-md-5">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="service-content">
          <div class="section-header text-center mb-5 works-header">
            <h2 class="section-title" data-aos="fade-up">実績紹介</h2>
            <p class="section-lead" data-aos="fade-up"></p>
          </div>
        </div>
      </div>
      <!--inner-content--> 
    </div>
  </div>
</section>
<section class="works"> 

  <!-- Nav tabs -->
  <?php 
wp_nav_menu(
    array(
        'theme_location' => 'archive-menu',
        'menu_class'     => 'nav nav-tabs my-5 justify-content-center gap-3',  // <ul>に追加されるクラス
        'container_id'   => 'portfolio-tab',  // <ul>に追加されるID
        'add_a_class' => 'nav-link' // aタグへclass追加
    )
);
?>

<!-- Nav tabs　ここまで -->

  <!-- Tab panes -->
  <div class="post-grid tab-content">

    <!-- Category -->
    <div class="tab-pane active" id="nav-pr" role="tabpanel" aria-labelledby="nav-pr-tab">
    <article class="post-item" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center align-items-center g-md-5 works-row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-md-5">
            <div class="post-media"> <img src="<?php the_post_thumbnail_url(); ?>" alt="post" class="img-fluid"> </div>
          </div>
          <div class="col-md-6">
            <div class="post-content">
              <time><?php echo get_the_date('Y-m-d'); ?></time>
              <ul class="post-categories">
                  <li><?php echo get_the_category_list(', '); ?></li>
              </ul>
              <p><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a></p>
            </div>
          </div>
        </div>
      <?php endwhile; else : ?>
        <p>記事はありません。</p>
      <?php endif; wp_reset_postdata(); ?>

    </div> <!-- container -->
    <!-- ページネーション -->
    <div class="nav-links">
        <div class="page-numbers">
          <?php 
            echo paginate_links(array(
              'prev_text' => '« 前',
              'next_text' => '次 »',
              'type'      => 'list', // <ul> リスト形式で表示
              'mid_size'  => 2, // 現在のページの前後に表示するページ数
              'end_size'  => 1, // 最初と最後に表示するページ数
            )); 
          ?>
        </div>
      </div>
    </article>
</div> <!-- tab-pane -->

   
  </div>
</section>

<?php get_footer(); ?>