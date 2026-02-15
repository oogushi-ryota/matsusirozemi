<?php

// 管理バー非表示
add_filter( 'show_admin_bar', '__return_false' );

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');

//自動補完リダイレクト機能機能を停止
add_filter( 'do_redirect_guess_404_permalink', '__return_false' );

//スラッグの変更によるリダイレクト機能を停止
remove_action( 'template_redirect', 'wp_old_slug_redirect' );

// Contact Form 7の自動pタグ無効
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

add_action('wp', function() {
  if (is_singular('news-post')) { // カスタム投稿タイプを指定
      remove_filter('the_content', 'wpautop');
  }
});

?>