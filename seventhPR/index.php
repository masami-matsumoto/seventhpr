<?php get_header(); ?>

<main id="site-content">
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            // 投稿のコンテンツを表示
            get_template_part( 'template-parts/content', get_post_format() );
        }

        // ページネーション
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => __( 'Back', 'textdomain' ),
            'next_text' => __( 'Next', 'textdomain' ),
        ) );
    } else {
        // 投稿がない場合の表示
        get_template_part( 'template-parts/content', 'none' );
    }
    ?>
</main>




<?php get_footer(); ?>