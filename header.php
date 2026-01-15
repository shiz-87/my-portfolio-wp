<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet" />

    <?php wp_head() ?>
</head>

<body>
    <!-- ヘッダー -->
    <header class="l-header">
        <div class="l-header__inner l-inner">
            <?php $header_tag = is_front_page() ? 'h1' : 'div'; ?>

            <<?php echo $header_tag; ?> class="l-header__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    SHIZUKA<br class="u-hidden-md" />
                    YAMAMOTO</a>
            </<?php echo $header_tag; ?>>

            <!-- グローバルナビゲーション -->
            <nav class="p-header-nav" aria-label="グローバルナビゲーション">
                <?php
                wp_nav_menu(
                    array(
                        'depth' => 1,
                        'theme_location' => 'header-nav',
                        'container' => false,
                        'menu_class' => 'p-header-nav__list',
                        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
                    )
                ) ?>
            </nav>
            <!-- /グローバルナビゲーション -->

            <!-- ハンバーガーメニュー -->
            <button
                class="c-hamburger"
                id="js-hamburger"
                aria-label="メニュー開閉ボタン">
                <span class="c-hamburger__bar"></span>
                <span class="c-hamburger__bar"></span>
                <span class="c-hamburger__bar"></span>
            </button>
            <!-- /ハンバーガーメニュー -->
        </div>
    </header>
    <!-- /ヘッダー -->

    <!-- ドロワーナビゲーション -->
    <nav class="p-drawer-nav" aria-label="ドロワーナビゲーション">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'drawer-nav',
                'container'      => false,
                'menu_class'     => 'p-drawer-nav__list',
            )
        );
        ?>
    </nav>
    <!-- /ドロワーナビゲーション -->