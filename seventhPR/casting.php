<?php 
/*
Template Name:casting
*/
get_header(); 
?>

<section class="hero-section jarallax py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 my-5 py-5" data-aos="fade-up">
        <div class="section-header mt-5 text-white text-center">
          <div class="breadcrumbs"> <span class="item"><a href="index.html">HOME /</a></span> <span class="item">CASTING</span> </div>
          <h1 class="display-1 fw-bold">CASTING</h1>
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
          <div class="section-header text-center mb-5 casting-header">
            <h2 class="section-title" data-aos="fade-up">事務所の手の内を知り尽くしたキャスティング</h2>
            <p class="section-lead" data-aos="fade-up">大手芸能プロでのタレントマネージャー歴20年以上のベテランが監修するキャスティング術。<br>
              事務所の手の内は知りつくしており、事故なく安心安全なご提案と進行が可能です。想定と危機管理で弊社の右に出る会社はまずありません。</p>
          </div>
        </div>
      </div>
      <!--inner-content--> 
    </div>
  </div>
</section>
<section class="pr-casting">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="company-detail">
          <div class="heading-lv2" data-aos="fade-up">
            <h2 class="heading-lv2__title casting-title">できること。</h2>
          </div>
          <div class="features-row">
            <div class="detail-entry">
              <div class="detail-list" data-aos="fade-up">
                <h3>トップレベルのキャリアが可能にするキャスティング</h3>
                <p>事務所さま、クライアントさま、広告代理店さまが考える双方の意図を瞬時に理解し調整致します。 </p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list" data-aos="fade-up">
                <h3>オールジャンルのキャスティングに対応</h3>
                <p>事前交渉から撮影までに起こりうる全てのことに先回りが可能です。<br>
                  安心安全なキャスティングでクライアントさまの希望に寄り添います。</p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list" data-aos="fade-up">
                <h3>ベテランマネージャーが織りなす危機管理</h3>
                <p>大手芸能プロから個人事務所、タレント、俳優、スポーツ選手、文化人、インフルエンサーまで
                  幅広い人脈でスムーズな交渉を実現。<br>
                  長年のマネージャー経験が可能にするキャスティングで、キャスティングはAIやマッチングで
                  交渉や細かいケアは不可能です。</p>
                <div class="detail-img"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="achievement">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="company-detail">
          <div class="heading-lv2" data-aos="fade-up">
            <h2 class="heading-lv2__title">主な実績</h2>
          </div>
          <div class="row row-cols-2 row-cols-lg-3 achievement-row">
          <?php
      $pr_query = new WP_Query(array(
        'category_name' => 'casting', // カテゴリー名をスラッグで指定
        'posts_per_page' => 6 // 全ての投稿を表示
      ));
      if ($pr_query->have_posts()) : while ($pr_query->have_posts()) : $pr_query->the_post(); ?>
            <div class="col portfolio-content" data-aos="fade-up"> <a href="<?php echo esc_url(get_permalink()); ?>" class="image-link" title="Read More">
              <figure class="portfolio-style"> <img src="<?php the_post_thumbnail_url(); ?>" alt="portfolio" class="img-fluid portfolio-item">
                <figcaption> <span>Read More</span> </figcaption>
              </figure>
              <p><?php echo get_the_date('Y-m-d'); ?></p>
              <p><?php the_title(); ?></p>
              </a> </div>
              <?php endwhile; else : ?>
        <p>記事はありません。</p>
      <?php endif; wp_reset_postdata(); ?>
          </div>
          <div class="btn-wrap" style="text-align:center"> <a href="/works/" class="btn-accent hvr-sweep-to-right">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>