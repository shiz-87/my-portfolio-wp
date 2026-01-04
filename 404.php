<?php get_header(); ?>

<main class="l-main p-not-found">
    <div class="l-inner">
        <div class="p-not-found__content">
            <figure class="p-not-found__image u-fade-up">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/404-illustration.svg"
                    alt="404 Not Found Illustration"
                    width="600"
                    height="398" />
            </figure>

            <h1 class="p-not-found__title u-fade-up">
                お探しのページが<br class="u-hidden-md" />見つかりませんでした
            </h1>

            <p class="p-not-found__text u-fade-up">
                申し訳ありませんが、お探しのページが存在しないか、アクセスできません。<br />入力されたURLが正しいかご確認ください。
            </p>

            <div class="p-not-found__button u-fade-up">
                <a class="c-button" href="<?php echo home_url('/'); ?>">トップページへ戻る</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>