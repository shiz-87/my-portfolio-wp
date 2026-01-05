<?php

function my_setup()
{
    // アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');

    // RSSフィードリンクの自動生成
    add_theme_support('automatic-feed-links');

    // タイトルタグ自動生成
    add_theme_support('title-tag');

    // HTML5の有効化
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
    // CSSの読み込み
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/lib/swiper-bundle.min.css', array(), '12.0.3', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime(get_theme_file_path('/assets/css/style.css')), 'all');

    // JSの読み込み
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/lib/swiper-bundle.min.js', array(), '12.0.3', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array("jquery"), filemtime(get_theme_file_path('/assets/js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

function my_menu_init()
{
    register_nav_menus(array(
        'header-nav' => 'ヘッダーナビゲーション',
        'drawer-nav' => 'ドロワーナビゲーション',
        'footer-nav' => 'フッターナビゲーション',
    ));
}
add_action('after_setup_theme', 'my_menu_init');

/**
 * メニューの<li>タグにクラスを付与
 */
function add_class_to_menu_li($classes, $item, $args)
{
    if ($args->theme_location === 'header-nav') {
        $classes[] = 'p-header-nav__item';
    } elseif ($args->theme_location === 'footer-nav') {
        $classes[] = 'p-footer-nav__item';
    } elseif ($args->theme_location === 'drawer-nav') {
        $classes[] = 'p-drawer-nav__item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_to_menu_li', 10, 3);

/**
 * メニューの<a>タグにクラスを付与
 */
function add_class_to_menu_a($atts, $item, $args)
{
    if ($args->theme_location === 'header-nav') {
        if (in_array('is-button', $item->classes)) {
            $atts['class'] = 'p-header-nav__button c-button';
        } else {
            $atts['class'] = 'p-header-nav__link';
        }
    } elseif ($args->theme_location === 'footer-nav') {
        $atts['class'] = 'p-footer-nav__link';
    } elseif ($args->theme_location === 'drawer-nav') {
        $atts['class'] = 'p-drawer-nav__link';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_to_menu_a', 10, 3);

/**
 * ドロワーメニューの中身（HTML）を書き換える
 */
function change_drawer_menu_html($item_output, $item, $depth, $args)
{
    // ドロワーメニューの時だけ発動
    if ($args->theme_location === 'drawer-nav') {
        // ラベル（英語）と説明（日本語）を取得
        $en = $item->title;
        $ja = $item->description;

        // HTMLを組み立てる
        $item_output = '<a class="' . implode(' ', $item->classes) . '" href="' . $item->url . '">';
        $item_output .= '<span class="p-drawer-nav__en">' . $en . '</span>';
        if ($ja) { // 説明が入力されている場合のみ表示
            $item_output .= '<span class="p-drawer-nav__ja">' . $ja . '</span>';
        }
        $item_output .= '</a>';
    }
    return $item_output;
}
// リンクの中身をいじるためのフック
add_filter('walker_nav_menu_start_el', 'change_drawer_menu_html', 10, 4);

/* ==============================================
   2560px以上の画像の自動縮小機能を無効化
   （縦長のWebサイトキャプチャを綺麗に見せるため）
============================================== */
add_filter('big_image_size_threshold', '__return_false');

/* ==========================================================
   Worksアーカイブの並び順を「更新日」順に変更
========================================================== */
function change_works_query_order( $query ) {
    // 管理画面ではなく、メインクエリであり、Worksアーカイブページの場合のみ実行
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'works' ) ) {
        $query->set( 'orderby', 'modified' ); // 更新日時を基準にする
        $query->set( 'order', 'DESC' );       // 新しい順（降順）
    }
}
add_action( 'pre_get_posts', 'change_works_query_order' );