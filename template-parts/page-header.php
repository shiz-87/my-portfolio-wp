<?php
// 引数（$args）から値を取り出す。指定がない場合は初期値を設定。
$title = $args['title'] ?? ''; // タイトル文字
$tag   = $args['tag']   ?? 'h1'; // タグ（指定がなければh1）
?>

<div class="c-page-header">
    <<?php echo esc_html($tag); ?> class="c-page-header__title">
        <?php echo esc_html($title); ?>
    </<?php echo esc_html($tag); ?>>
</div>