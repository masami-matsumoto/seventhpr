<footer id="footer" class="py-2 py-md-5">
  <div id="footer-bottom">
    <div class="container">
      <div class="footer-logo"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo-seventhPR.png')); ?>" alt=""></div>
      <p>株式会社セブンスPR<br>
        東京都品川区東五反田5-22-37 オフィスサークルN 805　<br>
        03-3780-7194<br>
        info@seventhpr.com</p>
      <div class="copyright text-md-end">
        <p>© 2024 - SEVENTH PR Co., Ltd</p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // URL のフラグメント部分を取得
    var fragment = window.location.hash;
    
    // フラグメントが '#contact' の場合、ローダーを非表示にする
    if (fragment === '#contact') {
        var loader = document.querySelector('.c-loader-bg');
        if (loader) {
            loader.style.display = 'none';
        }
    }
});

</script>
</body>
</html>