<?php
/**
 * ページヘッダーの共通パーツ
 * $args['title'] : ページタイトル（必須）
 */
?>

<header class="c-page-header">
    <div class="l-inner">
        <h1 class="c-page-header__title u-fade-up">
            <?php echo esc_html($args['title']); ?>
        </h1>

        <?php get_template_part('template-parts/breadcrumb'); ?>
    </div>
</header>