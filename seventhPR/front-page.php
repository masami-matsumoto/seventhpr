<?php get_header(); ?>

<section id="billboard">
  <div class="video_wrapper">
    <video  src="<?php echo esc_url(get_theme_file_uri('/images/AdobeStock_299766399.mp4')); ?>" id="video-home" disableRemotePlayback playsinline webkit-playsinline muted>
  
    </video>
    <div class="js-text">
      <p class="js-mv_title-item m-plus-1p-regular heading-lv1">PRとキャスティングは</p>
      <p class="js-mv_title-item m-plus-1p-regular heading-lv2">芸能出身者が最強</p>
      <p class="js-mv_title-item m-plus-1p-regular">セブンスPRにしか出来ない</p>
      <p class="js-mv_title-item m-plus-1p-regular heading-lv2">属人的PR</p>
    </div>
  </div>
</section>
<section id="services" class="py-2 my-2 py-md-5 my-md-5">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="service-content">
          <div class="section-header text-center mb-5">
            <h2 class="section-title" data-aos="fade">SERVICES</h2>
            <p data-aos="fade">大手芸能プロのタレントマネージャー・広報歴20年以上のベテラン×大手出版社出身のスタッフが手掛けるPR術。<br>
              大手芸能プロでのタレントマネージャー歴20年以上のベテランが監修するキャスティング術。</p>
          </div>
          <div class="row g-md-5">
            <div class="col-md-6" data-aos="fade-up">
              <div class="service-item">
                <div class="service-img"> <img src="<?php echo esc_url(get_theme_file_uri('/images/top-pr.jpg')); ?>" alt=""> </div>
                <div class="btn-wrap"> <a href="/pr/" class="btn-accent hvr-sweep-to-right">Read More</a> </div>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up">
              <div class="service-item">
                <div class="service-img"> <img src="<?php echo esc_url(get_theme_file_uri('/images/top-casting.jpg')); ?>" alt=""> </div>
                <div class="btn-wrap"> <a href="/casting/" class="btn-accent hvr-sweep-to-right">Read More</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--inner-content--> 
    </div>
  </div>
</section>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="company-detail">
          <div class="section-header text-center mb-5">
            <h2 class="section-title" data-aos="fade">ABOUT US</h2>
            <p data-aos="fade">芸能プロ、メディア出身者しか在籍しない唯一無二のPR会社</p>
          </div>
          <div class="row"> <img src="<?php echo esc_url(get_theme_file_uri('/images/point.png')); ?>" data-aos="fade" alt="">
            <div class="detail-entry" data-aos="fade">
              <div class="detail-list">
                <p>テレビスタッフ・記者への個別<span>
                  アプローチが可能</span></p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list">
                <p>「テレビが欲しがるネタ」を捉え、<span>
                  露出確度をアップ</span></p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list">
                <p>記者の手の内を知り尽くしているから<span>
                  こそ出来る危機管理</span></p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list">
                <p>トップレベルのタレントマネジメント<span>
                  経験を生かしたキャスティング力</span></p>
                <div class="detail-img"></div>
              </div>
              <div class="detail-list">
                <p>PR会社から『も』頼まれるPR会社</p>
                <div class="detail-img"></div>
              </div>
              
            </div>
          </div>
          <div class="img-bana"> <a href="https://seventhpr.tokyo/2309/"><img src="<?php echo esc_url(get_theme_file_uri('/images/bana_1.JPG')); ?>" alt=""></a> </div>
          <div class="btn-wrap"> <a href="/about/" class="btn-accent hvr-sweep-to-right">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="portfolio">
  <div class="container">
    <div class="row">
      <div class="inner-content">
        <div class="section-header text-center">
          <h2 class="section-title" data-aos="fade">WORKS</h2>
          <p data-aos="fade">主な実績<br>
            PR・キャスティングを中心とした最新の事例をご紹介。</p>
        </div>

        <!-- ここから -->
        <!-- Nav tabs -->
<ul class="nav nav-tabs my-5 justify-content-center gap-3" id="portfolio-tab" role="tablist">
  <li class="nav-item" role="presentation"> 
    <a href="#" class="nav-link active" id="nav-pr-tab" data-bs-toggle="tab" data-bs-target="#nav-pr" type="button" role="tab" aria-controls="nav-pr" aria-selected="true">PR</a> 
  </li>
  <li class="nav-item" role="presentation"> 
    <a href="#" class="nav-link" id="nav-casting-tab" data-bs-toggle="tab" data-bs-target="#nav-casting" type="button" role="tab" aria-controls="nav-casting" aria-selected="false" tabindex="-1">CASTING</a> 
  </li>
  <li class="nav-item" role="presentation"> 
    <a href="#" class="nav-link" id="nav-other-tab" data-bs-toggle="tab" data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-casting" aria-selected="false" tabindex="-1">OTHER</a> 
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  
  <!-- PR Category -->
  <div class="tab-pane active" id="nav-pr" role="tabpanel" aria-labelledby="nav-pr-tab">
    <div class="row row-cols-2 row-cols-lg-3">
      <?php
      $pr_query = new WP_Query(array(
        'category_name' => 'pr', // カテゴリー名をスラッグで指定
        'posts_per_page' => 6 // 全ての投稿を表示
      ));
      if ($pr_query->have_posts()) : while ($pr_query->have_posts()) : $pr_query->the_post(); ?>
      <div class="col portfolio-content" data-aos="fade-up"> 
        <a href="<?php echo esc_url(get_permalink()); ?>" class="image-link" title="Read More">
          <figure class="portfolio-style"> 
            <img src="<?php the_post_thumbnail_url(); ?>" alt="portfolio" class="img-fluid portfolio-item">
            <figcaption> <span>Read More</span> </figcaption>
          </figure>
          <p><?php echo get_the_date('Y-m-d'); ?></p>
          <p><?php the_title(); ?></p>
        </a> 
      </div>
      <?php endwhile; else : ?>
        <p>記事はありません。</p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>
  
  <!-- CASTING Category -->
  <div class="tab-pane" id="nav-casting" role="tabpanel" aria-labelledby="nav-casting-tab">
    <div class="row row-cols-2 row-cols-lg-3">
      <?php
      $casting_query = new WP_Query(array(
        'category_name' => 'casting', // カテゴリー名をスラッグで指定
        'posts_per_page' => 6
      ));
      if ($casting_query->have_posts()) : while ($casting_query->have_posts()) : $casting_query->the_post(); ?>
      <div class="col portfolio-content" data-aos="fade-up"> 
        <a href="<?php echo esc_url(get_permalink()); ?>" class="image-link" title="Read More">
          <figure class="portfolio-style"> 
            <img src="<?php the_post_thumbnail_url(); ?>" alt="portfolio" class="img-fluid portfolio-item">
            <figcaption> <span>Read More</span> </figcaption>
          </figure>
          <p><?php echo get_the_date('Y-m-d'); ?></p>
          <p><?php the_title(); ?></p>
        </a> 
      </div>
      <?php endwhile; else : ?>
        <p>記事はありません。</p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>

  <!-- OTHER Category -->
  <div class="tab-pane" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
    <div class="row row-cols-2 row-cols-lg-3">
      <?php
      $other_query = new WP_Query(array(
        'category_name' => 'other', // カテゴリー名をスラッグで指定
        'posts_per_page' => 6
      ));
      if ($other_query->have_posts()) : while ($other_query->have_posts()) : $other_query->the_post(); ?>
      <div class="col portfolio-content" data-aos="fade-up"> 
        <a href="<?php echo esc_url(get_permalink()); ?>" class="image-link" title="Read More">
          <figure class="portfolio-style"> 
            <img src="<?php the_post_thumbnail_url(); ?>" alt="portfolio" class="img-fluid portfolio-item">
            <figcaption> <span>Read More</span> </figcaption>
          </figure>
          <p><?php echo get_the_date('Y-m-d'); ?></p>
          <p><?php the_title(); ?></p>
        </a> 
      </div>
      <?php endwhile; else : ?>
        <p>記事はありません。</p>
      <?php endif; wp_reset_postdata(); ?>
    </div>
  </div>

</div>

<!-- ここまで -->
 
            </div>
          </div>
        </div>
        <div class="btn-wrap"> <a href="/works/" class="btn-accent hvr-sweep-to-right">Read More</a> </div>
      </div>
      <!--inner-content--> 
    </div>
  </div>
</section>
<section id="contact">
  <div class="container">
      <div class="inner-content">
        <div class="section-header text-center mb-5">
          <h2 class="section-title" data-aos="fade">CONTACT</h2>
          <p data-aos="fade">詳細についてはお問い合わせください</p>
        </div>
       
         

          <?php echo do_shortcode('[contact-form-7 id="435df11" title="コンタクトフォーム"]'); ?>

         
        </div>
      </div>
</section>
<?php get_footer(); ?>