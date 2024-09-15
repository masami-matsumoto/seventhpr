<?php 
/*
Template Name:pr
*/
get_header(); 
?>

<section class="hero-section jarallax py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 my-5 py-5" data-aos="fade-up">
        <div class="section-header mt-5 text-white text-center">
          <div class="breadcrumbs"> <span class="item"><a href="index.html">HOME /</a></span> <span class="item">PR</span> </div>
          <h1 class="display-1 fw-bold">PR</h1>
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
          <div class="section-header text-center mb-5 pr-header">
            <h2 class="section-title" data-aos="fade-up">そのPR、本当に大丈夫ですか!?</h2>
            <p class="section-lead" data-aos="fade-up">大手芸能プロのタレントマネージャー・広報歴20年以上のベテラン×大手出版社出身のスタッフが手掛けるPR術。<br>
              既に進んでいるPRのセカンドオピニオンにもご利用いただけます。</p>
          </div>
        </div>
      </div>
      <!--inner-content--> 
    </div>
  </div>
</section>
<section class="pr">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="company-detail">
          <div class="heading-lv2" data-aos="fade-up">
            <h2 class="heading-lv2__title pr-title">できること。</h2>
          </div>
          <div class="features-row">
            <div class="detail-entry">
              <div class="detail-list" data-aos="fade-up">
                <h3>PRはヒアリングが命</h3>
                <p>『メディア露出のことはメディアに直接聞け』露出の可能性や確度を上げるために、<br>
                  弊社はメディア担当者へのヒアリングを重視しています。<br>
                  机上の空論ではなく、ディレクター、放送作家などに聞き、課題解決の筋道を立てていきます。 </p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list" data-aos="fade-up">
                <h3>PRのセカンドオピニオン承ります</h3>
                <p>既に進んでいるPR案件に迷いが…本当にこれでいいのか！？<br>
                  もっと違う角度の意見を聞いてみたいなど、既に進んでいる案件のご相談も可能です。お気軽にお問い合わせください。</p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list" data-aos="fade-up">
                <h3>オールジャンルのPRに対応</h3>
                <p>テレビ、ウェブ、イベント、リリース配信のみなど、各種のご相談を承っております。<br>
                  PRイベントでは、イベント制作からタレントのキャスティングまでワンストップで対応が可能です。</p>
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
        'category_name' => 'pr', // カテゴリー名をスラッグで指定
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