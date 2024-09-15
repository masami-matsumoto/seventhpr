<?php
function add_files() {
// BootstrapのCSSを追加
wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css', array(), null);
    
// AOSのCSSを追加
wp_enqueue_style('aos', 'https://unpkg.com/aos@next/dist/aos.css', array(), null);

// 自作CSSを追加
wp_enqueue_style('vendor.css', get_theme_file_uri('/css/vendor.css'));
wp_enqueue_style('style.css', get_theme_file_uri('/css/style.css'));

//javascript
// jQueryの読み込み
wp_enqueue_script('jquery-min', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), null, true);

// Bootstrapの読み込み（CDN）
wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), null, true);

// Isotopeの読み込み（CDN）
wp_enqueue_script('isotope', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js', array(), null, true);

// プラグインスクリプト
wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array(), null, true);

// カスタムスクリプト
wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), null, true);

//TOPのみ読み込み

// GSAP（CDN）
wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js', array(), null, true);


// GSAPアプリ用スクリプト
wp_enqueue_script('app-script', get_template_directory_uri() . '/js/app.js', array(), null, true);

// プリコネクトの追加
echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
// Google Fontsを追加
wp_enqueue_style( 'google-fonts-ibm-plex', 'https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+JP&display=swap', false );
wp_enqueue_style( 'google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap', false );

// Favicon
echo '<link rel="icon" href="' . get_theme_file_uri('/images/favicon.ico') . '" type="image/x-icon">';
    
// Touch icons for different devices
echo '<link rel="apple-touch-icon" sizes="180x180" href="' . get_theme_file_uri('/images/apple-touch-icon.png') . '">';
echo '<link rel="icon" type="image/png" sizes="32x32" href="' . get_theme_file_uri('/images/favicon-32x32.png') . '">';
echo '<link rel="icon" type="image/png" sizes="16x16" href="' . get_theme_file_uri('/images/favicon-16x16.png') . '">';

// Optional manifest and theme color
echo '<link rel="manifest" href="' . get_theme_file_uri('/images/site.webmanifest') . '">';
echo '<meta name="theme-color" content="#ffffff">';

}
add_action('wp_enqueue_scripts', 'add_files');


// プリコネクトのリンクを<head>内に追加
function add_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">';
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
}
add_action('wp_head', 'add_preconnect');


// タイトルタグ・グローバルメニューのサポートを追加
function custom_theme_setup() {
    add_theme_support('title-tag');

    //アイキャッチ画像
    add_theme_support('post-thumbnails');

    //menu
        register_nav_menus(array(
            'header-menu' => __('Header Menu'),
            'burger-menu' => __('Burger Menu'),
            'footer-menu' => __('Footer Menu'),
            'archive-menu' => __('Archive Menu'),
        ));
}
add_action('after_setup_theme', 'custom_theme_setup');

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_a_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);


// メタタグを追加
function add_meta_tags() {
    ?>
    <!-- メタタグの追加 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="lifeperformance">
    <meta name="keywords" content="株式会社セブンスPR">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php
}
add_action('wp_head', 'add_meta_tags');

function add_pagination_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'add_pagination_query_vars');

