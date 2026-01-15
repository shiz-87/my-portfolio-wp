<?php get_header(); ?>

<main class="l-main" style="padding-top: 120px; min-height: 80vh;">
    <div class="l-inner">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class('u-mb-10'); ?>>
                    <h2>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <hr>

            <?php endwhile; ?>

            <div class="pagination">
                <?php the_posts_pagination( array(
                    'prev_text' => '前へ',
                    'next_text' => '次へ',
                ) ); ?>
            </div>

        <?php else : ?>
            <p>記事が見つかりませんでした。</p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>