<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php wp_head(); ?>
</head>

<body>

<header class="<?php if (!is_front_page()) { echo 'subpage-header'; } ?>">
<?php wp_nav_menu(
    array(
        'theme_location' => 'header-menu',
        'container' => false,            // <div>タグでのラッピングを防ぐ
        'menu_class' => 'visual-navi',   // <ul>に適用するクラス
    )
); ?>
  <!-- <ul class="visual-navi">
    <li class="visual-navi-item"><a href="about.html">About</a></li>
    <li class="visual-navi-item"><a href="pr.html">PR</a></li>
    <li class="visual-navi-item"><a href="casting.html">Casting</a></li>
    <li class="visual-navi-item"><a href="works.html">Works</a></li>
    <li class="visual-navi-item is-burger"></li>
    <li class="visual-navi-item"><a href="index.html#contact">Contact</a></li>
  </ul> -->
  <div class="nav nav-overlay">
  <div class="nav__content">
    <?php wp_nav_menu(
    array(
        'theme_location' => 'burger-menu',
        'container' => false,            // <div>タグでのラッピングを防ぐ
        'menu_class' => 'nav__list',   // <ul>に適用するクラス
    )
); ?>
      <!-- <ul class="nav__list">
        <li class="nav__list-item active-nav"><a href="index.html" class="hover-target">Home</a></li>
        <li class="nav__list-item"><a href="about.html" class="hover-target">About</a></li>
        <li class="nav__list-item"><a href="pr.html" class="hover-target">PR</a></li>
        <li class="nav__list-item"><a href="casting.html" class="hover-target">Casting</a></li>
        <li class="nav__list-item"><a href="works.html" class="hover-target">Works</a></li>
        <li class="nav__list-item"><a href="index.html#contact" class="hover-target">Contact</a></li>
      </ul> -->
    </div>
  </div>
  <?php  if (is_front_page()) { ?>
  <!-- 黒い背景とドット -->
  <div class="c-loader-bg js-loader-bg">
    <div class="c-loader-dot js-loader-dot-wrap"> <span class="dot_color1"></span> <span class="dot_color2"></span> <span class="dot_color3"></span> <span class="dot_color4"></span> <span class="dot_color5"></span> <span class="dot_color6"></span> <span class="dot_color7"></span> </div>
  </div>
  <?php } ?>
  <!-- ここまで -->
  <div id="header-wrap">
    <nav id="navbar">
      <h1 class="main-logo"> 
    <a href="<?php echo esc_url(home_url('/')); ?>">
    <?php if (is_front_page()): ?>
        <img src="<?php echo esc_url(get_theme_file_uri('/images/logo-seventhPR_wh.png')); ?>" alt="seventhPR" width="201" height="106" style="width: 100px; height: auto;">
        <?php else: ?>
          <img src="<?php echo esc_url(get_theme_file_uri('/images/logo-seventhPR.png')); ?>" alt="seventhPR" width="201" height="106" style="width: 100px; height: auto;">
        <?php endif; ?>

    </a> 
</h1>
    </nav>
    <div class="side-nav-bar">
      <nav class="side-nav">
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-btn" for="menu-toggle"> <span></span> </label>
      </nav>
    </div>
    <!--sidenavbar--> 
  </div>
  <!--header-wrap--> 
</header>