<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

    <!-- 検索にヒットしないようにする -->
    <meta name="robots" content="noindex" />

    <!-- OGP -->
    <meta property="og:title" content="SHIZUKA YAMAMOTO | PORTFOLIO" />
    <meta
        property="og:description"
        content="静岡県浜松市在住。Webコーダーへの転職を目指すSHIZUKA YAMAMOTOのポートフォリオサイトです。学習成果としての制作実績やスキルセット（HTML/CSS/WordPress等）を掲載しています。" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://example.com/" />
    <meta property="og:image" content="https://example.com/ogp/og-image.jpg" />
    <meta property="og:site_name" content="SHIZUKA YAMAMOTO | PORTFOLIO" />
    <meta property="og:locale" content="ja_JP" />

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
            <h1 class="l-header__logo">
                <a href="#">
                    SHIZUKA<br class="u-hidden-md" />
                    YAMAMOTO</a>
            </h1>

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
                <!-- <ul class="p-header-nav__list">
                    <li class="p-header-nav__item">
                        <a class="p-header-nav__link" href="#about">ABOUT</a>
                    </li>
                    <li class="p-header-nav__item">
                        <a class="p-header-nav__link" href="#skills">SKILLS</a>
                    </li>
                    <li class="p-header-nav__item">
                        <a class="p-header-nav__link" href="#works">WORKS</a>
                    </li>
                    <li class="p-header-nav__item">
                        <a class="p-header-nav__button c-button" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </nav> -->
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
        <ul class="p-drawer-nav__list">
            <li class="p-drawer-nav__item">
                <a class="p-drawer-nav__link" href="#about">
                    <span class="p-drawer-nav__en">ABOUT</span>
                    <span class="p-drawer-nav__ja">私について</span>
                </a>
            </li>
            <li class="p-drawer-nav__item">
                <a class="p-drawer-nav__link" href="#skills">
                    <span class="p-drawer-nav__en">SKILLS</span>
                    <span class="p-drawer-nav__ja">できること</span>
                </a>
            </li>
            <li class="p-drawer-nav__item">
                <a class="p-drawer-nav__link" href="#works">
                    <span class="p-drawer-nav__en">WORKS</span>
                    <span class="p-drawer-nav__ja">制作実績</span>
                </a>
            </li>
            <li class="p-drawer-nav__item">
                <a class="p-drawer-nav__link" href="#contact">
                    <span class="p-drawer-nav__en">CONTACT</span>
                    <span class="p-drawer-nav__ja">お問い合わせ</span>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /ドロワーナビゲーション -->