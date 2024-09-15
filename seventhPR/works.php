<?php 
/*
Template Name:work
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
   $c = $_GET['c'];
   $practive = ' active';
    $castingactive = '';
    $otheractive = '';

   if ($c == 'pr'){
    $practive = ' active';
    $castingactive = '';
    $otheractive = '';
   }
   if ($c == 'casting'){
    $practive = '';
    $castingactive = ' active';
    $otheractive = '';
   }
   if ($c == 'other'){
    $practive = '';
    $castingactive = '';
    $otheractive = ' active';
   }

   $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // 現在のページ番号を取得
   $pr_query = new WP_Query(array(
     'category_name' => 'pr', // カテゴリー名をスラッグで指定
     'posts_per_page' => 10, // 全ての投稿を表示
     'paged' => $paged        // ページ番号を指定
   ));
   
   $casting_query = new WP_Query(array(
     'category_name' => 'casting', // カテゴリー名をスラッグで指定
     'posts_per_page' => 10, // 全ての投稿を表示
     'paged' => $paged        // ページ番号を指定
   ));
   
   $other_query = new WP_Query(array(
     'category_name' => 'other', // カテゴリー名をスラッグで指定
     'posts_per_page' => 10, // 全ての投稿を表示
     'paged' => $paged        // ページ番号を指定
    ));
    ?>
    
  <ul class="nav nav-tabs my-5 justify-content-center gap-3" id="portfolio-tab" role="tablist">
  <li class="nav-item" role="presentation"> 
  <?php if ($practive == ' active'){ ?>
    <a href="#" class="nav-link<?php echo $practive; ?>" id="nav-pr-tab" data-bs-toggle="tab" data-bs-target="#nav-pr" type="button" role="tab" aria-controls="nav-pr" aria-selected="true">PR</a> 
  <?php } else { ?>
    <a href="/works/" class="nav-link<?php echo $practive; ?>" id="nav-pr-tab" type="button" role="tab" aria-controls="nav-pr" aria-selected="true">PR</a> 
    <?php } ?>
  </li>
  <li class="nav-item" role="presentation">
  <?php if ($castingactive == ' active'){ ?> 
    <a href="#" class="nav-link<?php echo $castingactive; ?>" id="nav-casting-tab" data-bs-toggle="tab" data-bs-target="#nav-casting" type="button" role="tab" aria-controls="nav-casting" aria-selected="false" tabindex="-1">CASTING</a> 
    <?php } else { ?>
      <a href="/works/?c=casting" class="nav-link<?php echo $castingactive; ?>" id="nav-casting-tab"  type="button" role="tab" aria-controls="nav-casting" aria-selected="false" tabindex="-1">CASTING</a> 
      <?php } ?>
  </li>
  <li class="nav-item" role="presentation"> 
  <?php if ($otheractive == ' active'){ ?>
    <a href="#" class="nav-link<?php echo $otheractive; ?>" id="nav-other-tab" data-bs-toggle="tab" data-bs-target="#nav-other" type="button" role="tab" aria-controls="nav-other" aria-selected="false" tabindex="-1">OTHER</a> 
    <?php } else { ?>
    <a href="/works/?c=other" class="nav-link<?php echo $otheractive; ?>" id="nav-other-tab"  type="button" role="tab" aria-controls="nav-other" aria-selected="false" tabindex="-1">OTHER</a> 
      <?php } ?>
  </li>
</ul>
  <!-- Tab panes -->
  <div class="post-grid tab-content">

    <!-- PR Category -->
    <div class="tab-pane<?php echo $practive; ?>" id="nav-pr" role="tabpanel" aria-labelledby="nav-pr-tab">
    <article class="post-item" data-aos="fade-up">
      <div class="container">
      <?php
      
      if ($pr_query->have_posts()) : while ($pr_query->have_posts()) : $pr_query->the_post(); ?>
        <div class="row justify-content-center align-items-center g-md-5 works-row">
          <div class="col-md-5">
            <div class="post-media"> <a href="<?php echo esc_url(get_permalink()); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="post" class="img-fluid"></a> </div>
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
      <!-- ページネーション -->
      <div class="nav-links">
    <?php
      echo paginate_links(array(
        'total'        => $pr_query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'mid_size'     => 2,
        'prev_text'    => __('« 前へ'),
        'next_text'    => __('次へ »'),
        'format'       => 'page/%#%?c=pr',
      ));
      ?>
    </div>
    </div> <!-- container -->
    </article>
    </div> <!-- tab-pane -->

    <!-- CASTING Category -->
    <div class="tab-pane<?php echo $castingactive; ?>" id="nav-casting" role="tabpanel" aria-labelledby="nav-casting-tab">
    <article class="post-item" data-aos="fade-up">
      <div class="container">
      <?php
      
      if ($casting_query->have_posts()) : while ($casting_query->have_posts()) : $casting_query->the_post(); ?>
        <div class="row justify-content-center align-items-center g-md-5 works-row">
          <div class="col-md-5">
            <div class="post-media"> <a href="<?php echo esc_url(get_permalink()); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="post" class="img-fluid"></a> </div>
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
      <!-- ページネーション -->
      <div class="nav-links">
    <?php
      echo paginate_links(array(
        'total'        => $casting_query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'mid_size'     => 2,
        'prev_text'    => __('« 前へ'),
        'next_text'    => __('次へ »'),
        'format'       => 'page/%#%?c=casting',
      ));
      ?>
    </div>
      </div> <!-- container -->
    </article>
    </div> <!-- tab-pane -->

    <!-- OTHER Category -->
    <div class="tab-pane<?php echo $otheractive; ?>" id="nav-other" role="tabpanel" aria-labelledby="nav-other-tab">
    <article class="post-item" data-aos="fade-up">
      <div class="container">
      <?php
      
      if ($other_query->have_posts()) : while ($other_query->have_posts()) : $other_query->the_post(); ?>
        <div class="row justify-content-center align-items-center g-md-5 works-row">
          <div class="col-md-5">
            <div class="post-media"> <a href="<?php echo esc_url(get_permalink()); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="post" class="img-fluid"></a> </div>
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
      <!-- ページネーション -->
      <div class="nav-links">
      <?php
      echo paginate_links(array(
        'total'        => $other_query->max_num_pages,
        'current'      => max(1, get_query_var('paged')),
        'mid_size'     => 2,
        'prev_text'    => __('« 前へ'),
        'next_text'    => __('次へ »'),
        'format'       => 'page/%#%?c=other',
      ));
      ?>
      </div>
      </div> <!-- container -->
    </article>
    </div> <!-- tab-pane -->

  </div>
</section>

<?php get_footer(); ?>