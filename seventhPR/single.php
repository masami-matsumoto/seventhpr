<?php get_header(); ?>

<section class="single">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="row">
        <div class="col-12">
          <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; else : ?>
      <p>記事はありません。</p>
    <?php endif; ?>

    <!-- 前の記事・次の記事ナビゲーション -->
    <div class="post-navigation">
      <div class="nav-previous">
        <?php previous_post_link('<div class="prev-post-button">%link</div>', '← 前の記事', TRUE); ?>
      </div>
      <div class="nav-next">
        <?php next_post_link('<div class="next-post-button">%link</div>', '次の記事 →', TRUE); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
