<?php
// カスタムヘッダー
add_theme_support("custom-header");
// サムネイルを追加する方法
add_theme_support("post-thumbnails");
//メニュー有効
function register_my_menus() { 
    register_nav_menus( array(
      'header' => 'ヘッダー',//表示する位置
    ) );
  }
  add_action( 'after_setup_theme', 'register_my_menus' );

// JavaScriptを読み込む関数
function kv_slider_script() {

    wp_register_script(
        'jquery_script',
        get_template_directory_uri() . '/jquery.js',
        array(),
        false,
        // 「false」はヘッダーで読み込み、「true」はフッターで読み込み。
        true,
    );

    wp_enqueue_script(
        'main_script',
        get_template_directory_uri() . '/script.js',
        // 'jquery_script'が読み込まれた後に'main_script'を読み込む
        array('jquery_script'),
        false,
        // 「false」はヘッダーで読み込み、「true」はフッターで読み込み。
        true,
    );

}

// ※注意点：「wp_enqueue_script」は× 「wp_enqueue_scripts」と語尾に"s"を付ける必要あり
add_action( 'wp_enqueue_scripts', 'kv_slider_script' );

