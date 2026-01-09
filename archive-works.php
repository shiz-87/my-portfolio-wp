<?php get_header(); ?>

<main class="l-main">
    <?php get_template_part('template-parts/page-header', null, [
        'title' => '作品一覧'
    ]); ?>

    <div class="p-works-archive">
        <div class="p-works-archive__body">
            <div class="l-inner">

                <?php if (have_posts()) : ?>

                    <div class="p-works-list">
                        <?php while (have_posts()) : the_post(); ?>

                            <article class="c-work-card u-fade-up u-delay-200">
                                <a href="<?php the_permalink(); ?>" class="c-work-card__link">
                                    <div class="c-work-card__image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class="c-work-card__body">
                                        <div class="c-work-card__tags">
                                            <?php
                                            $cats = get_the_terms(get_the_ID(), 'work_category');
                                            if (! empty($cats)) :
                                                foreach ($cats as $cat) : ?>
                                                    <span class="c-label c-label--category"><?php echo esc_html($cat->name); ?></span>
                                            <?php endforeach;
                                            endif;
                                            ?>

                                            <?php
                                            $roles = get_the_terms(get_the_ID(), 'work_role');
                                            if (! empty($roles)) :
                                                foreach ($roles as $role) : ?>
                                                    <span class="c-label c-label--role"><?php echo esc_html($role->name); ?></span>
                                            <?php endforeach;
                                            endif;
                                            ?>
                                        </div>
                                        <h2 class="c-work-card__title"><?php the_title(); ?></h2>
                                        <p class="c-work-card__meta">
                                            Coding /
                                            <?php
                                            // 使用技術（タクソノミー）を取得
                                            $skills = get_the_terms(get_the_ID(), 'work_skill');

                                            if (! empty($skills) && ! is_wp_error($skills)) {
                                                $skill_names = array();
                                                foreach ($skills as $skill) {
                                                    $skill_names[] = $skill->name;
                                                }
                                                // 配列をカンマ区切りの文字列にして出力（例: HTML, Sass, JS）
                                                echo esc_html(implode(', ', $skill_names));
                                            }
                                            ?>
                                        </p>
                                    </div>
                                </a>
                            </article>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <p class="u-fade-up">表示する作品がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Contactセクション -->
    <?php get_template_part('template-parts/contact'); ?>
    <!-- /Contactセクション -->
</main>

<?php get_footer(); ?>