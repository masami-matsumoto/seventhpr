<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div>
  <div class="post-mv">
    <div class="post-thumb"> <img src="<?php the_post_thumbnail_url(); ?>" alt=""> </div>
  </div>
</div>
<section class="py-md-5">
  <div class="single-content">
    <h1><?php the_title(); ?></h1>
    <?php
               $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                 echo '<ul class="single-taglist">';
                foreach ( $categories as $category ) {
                // parentが0でない場合は子カテゴリー
                if ( $category->parent != 0 ) {
                 echo '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a></li>';
                }
              }
              echo '</ul>';
            }
            ?>
    <div class="_fullbg single-table">
      <table>
        <tr>
          <th>クライアント</th>
          <td><?php the_field('post-client'); ?></td>
        </tr>
        <?php if ( get_field('post-talent') ) : ?>
        <tr>
          <th>起用タレント</th>
          <td><?php the_field('post-talent'); ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <th>PR・キャスティング範囲</th>
          <td><?php the_field('post-pr'); ?></td>
        </tr>
        <?php if ( get_field('post-work') ) : ?>
        <tr>
          <th>掲載実績</th>
          <td><?php the_field('post-work'); ?></td>
        </tr>
        <?php endif; ?>
      </table>
    </div>
    <h2>商品/サービス概要・目的</h2>
    <p><?php echo nl2br(get_field('post-service')); ?></p>
    <?php endwhile; endif; ?>
<!-- 前の記事・次の記事ナビゲーション -->
<div class="post-navigation">
      <div class="nav-previous">
        <?php previous_post_link('<div class="prev-post-button">%link</div>', '← 前の記事'); ?>
      </div>
      <div class="nav-next">
        <?php next_post_link('<div class="next-post-button">%link</div>', '次の記事 →'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>