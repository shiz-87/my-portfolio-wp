<?php get_header(); ?>

<main class="l-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/page-header', null, [
                'title' => '作品詳細'
            ]); ?>

            <article class="p-work-detail">

                <!-- MVセクション -->
                <section class="p-work-mv">
                    <div class="p-work-mv__inner l-inner">
                        <figure class="p-work-mv__image u-fade-up u-delay-200">
                            <?php
                            $mv_pc = get_field('work_mv_pc');
                            $mv_sp = get_field('work_mv_sp');

                            if ($mv_pc && $mv_sp) : ?>
                                <picture>
                                    <source
                                        media="(min-width: 768px)"
                                        srcset="<?php echo esc_url($mv_pc['url']); ?>" />
                                    <img
                                        src="<?php echo esc_url($mv_sp['url']); ?>"
                                        alt="#見つけて尾道レトロキャンペーン"
                                        width="670"
                                        height="456" />
                                </picture>

                            <?php elseif ($mv_pc) : ?>
                                <img src="<?php echo esc_url($mv_pc['url']); ?>" alt="<?php echo esc_attr($mv_pc['alt']); ?>" width="<?php echo esc_attr($mv_pc['width']); ?>" height="<?php echo esc_attr($mv_pc['height']); ?>">

                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="No Image" />
                            <?php endif; ?>
                        </figure>

                        <div class="p-work-mv__content u-fade-up u-delay-400">
                            <div class="p-work-mv__tags">
                                <?php
                                $cats = get_the_terms(get_the_ID(), 'work_category');
                                if (!empty($cats) && !is_wp_error($cats)) {
                                    echo '<span class="c-label c-label--category">' . esc_html($cats[0]->name) . '</span>';
                                }
                                ?>
                                <?php
                                $roles = get_the_terms(get_the_ID(), 'work_role');
                                if (!empty($roles) && !is_wp_error($roles)) {
                                    foreach ($roles as $role) {
                                        echo '<span class="c-label c-label--role">' . esc_html($role->name) . '</span>';
                                    }
                                }
                                ?>
                            </div>
                            <h2 class="p-work-mv__title"><?php the_title(); ?></h2>
                            <div class="p-work-mv__text">
                                <?php
                                $mv_desc = get_field('work_mv_desc');
                                if ($mv_desc) {
                                    echo nl2br(esc_html($mv_desc));
                                }
                                ?>
                            </div>
                            <div class="p-work-mv__button">
                                <?php
                                // サイトURL
                                $site_url = get_field('site_url');

                                // Basic認証情報
                                $basic_id = get_field('work_basic_id');
                                $basic_pass = get_field('work_basic_pass');

                                if ($site_url) : ?>
                                    <a href="<?php echo esc_url($site_url); ?>" target="_blank" rel="noopener noreferrer" class="c-button">サイトを見る</a>

                                    <?php if ($basic_id && $basic_pass) : ?>
                                        <p class="p-work-mv__auth">
                                            Basic認証：ID <strong><?php echo esc_html($basic_id); ?></strong> /
                                            Pass <strong><?php echo esc_html($basic_pass); ?></strong>
                                        </p>
                                    <?php endif; ?>

                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /MVセクション -->

                <!-- OVERVIEWセクション -->
                <section class="p-work-overview u-fade-up">
                    <div class="p-work-overview__inner l-inner">
                        <div class="c-section-title u-fade-up">
                            <span class="c-section-title__en">OVERVIEW</span>
                            <span class="c-section-title__ja">作品概要</span>
                        </div>

                        <div class="p-work-overview__content u-fade-up u-delay-200">
                            <dl class="p-work-overview__list">
                                <?php if (get_field('work_target')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">ターゲット</dt>
                                        <dd class="p-work-overview__desc"><?php echo nl2br(esc_html(get_field('work_target'))); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work_concept')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">コンセプト</dt>
                                        <dd class="p-work-overview__desc"><?php echo nl2br(esc_html(get_field('work_concept'))); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work_role')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">担当範囲</dt>
                                        <dd class="p-work-overview__desc"><?php echo esc_html(get_field('work_role')); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work_period')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">制作期間</dt>
                                        <dd class="p-work-overview__desc"><?php echo esc_html(get_field('work_period')); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work_tools')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">使用ツール</dt>
                                        <dd class="p-work-overview__desc"><?php echo esc_html(get_field('work_tools')); ?></dd>
                                    </div>
                                <?php endif; ?>

                                <?php if (get_field('work_language')) : ?>
                                    <div class="p-work-overview__item">
                                        <dt class="p-work-overview__term">使用言語</dt>
                                        <dd class="p-work-overview__desc"><?php echo esc_html(get_field('work_language')); ?></dd>
                                    </div>
                                <?php endif; ?>
                            </dl>

                            <?php $github_url = get_field('github_url'); ?>
                            <?php if ($github_url) : ?>
                                <div class="p-work-overview__button">
                                    <a href="<?php echo esc_url($github_url); ?>" target="_blank" class="c-button c-button--github" rel="noopener noreferrer">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.02742 19.3248C8.02742 19.424 7.91613 19.5034 7.77581 19.5034C7.61613 19.5183 7.50484 19.4389 7.50484 19.3248C7.50484 19.2255 7.61613 19.1461 7.75645 19.1461C7.90161 19.1312 8.02742 19.2106 8.02742 19.3248ZM6.52258 19.1014C6.48871 19.2007 6.58548 19.3148 6.73065 19.3446C6.85645 19.3942 7.00161 19.3446 7.03065 19.2454C7.05968 19.1461 6.96774 19.032 6.82258 18.9873C6.69677 18.9526 6.55645 19.0022 6.52258 19.1014ZM8.66129 19.0171C8.52097 19.0518 8.42419 19.1461 8.43871 19.2602C8.45323 19.3595 8.57903 19.424 8.72419 19.3893C8.86452 19.3545 8.96129 19.2602 8.94677 19.161C8.93226 19.0667 8.80161 19.0022 8.66129 19.0171ZM11.8452 0C5.13387 0 0 5.22573 0 12.109C0 17.6126 3.37742 22.3222 8.20161 23.9798C8.82097 24.0939 9.03871 23.7019 9.03871 23.3793C9.03871 23.0716 9.02419 21.3744 9.02419 20.3322C9.02419 20.3322 5.6371 21.0766 4.92581 18.8533C4.92581 18.8533 4.37419 17.4092 3.58065 17.037C3.58065 17.037 2.47258 16.2578 3.65806 16.2727C3.65806 16.2727 4.8629 16.372 5.52581 17.5531C6.58548 19.4687 8.36129 18.9178 9.05323 18.5903C9.16452 17.7963 9.47903 17.2454 9.82742 16.9179C7.12258 16.6102 4.39355 16.2082 4.39355 11.4341C4.39355 10.0693 4.76129 9.38447 5.53548 8.51103C5.40968 8.18846 4.99839 6.85846 5.66129 5.14136C6.67258 4.81878 9 6.48129 9 6.48129C9.96774 6.20338 11.0081 6.05946 12.0387 6.05946C13.0694 6.05946 14.1097 6.20338 15.0774 6.48129C15.0774 6.48129 17.4048 4.81382 18.4161 5.14136C19.079 6.86342 18.6677 8.18846 18.5419 8.51103C19.3161 9.38943 19.7903 10.0743 19.7903 11.4341C19.7903 16.2231 16.9403 16.6052 14.2355 16.9179C14.6806 17.3099 15.0581 18.0543 15.0581 19.2205C15.0581 20.893 15.0435 22.9624 15.0435 23.3694C15.0435 23.6919 15.2661 24.084 15.8806 23.9699C20.7194 22.3222 24 17.6126 24 12.109C24 5.22573 18.5565 0 11.8452 0ZM4.70323 17.1164C4.64032 17.166 4.65484 17.2801 4.7371 17.3744C4.81452 17.4538 4.92581 17.4886 4.98871 17.424C5.05161 17.3744 5.0371 17.2603 4.95484 17.166C4.87742 17.0866 4.76613 17.0518 4.70323 17.1164ZM4.18064 16.7144C4.14677 16.7789 4.19516 16.8583 4.29194 16.9079C4.36935 16.9576 4.46613 16.9427 4.5 16.8732C4.53387 16.8087 4.48548 16.7293 4.38871 16.6796C4.29194 16.6499 4.21452 16.6648 4.18064 16.7144ZM5.74839 18.4811C5.67097 18.5456 5.7 18.6945 5.81129 18.7888C5.92258 18.9029 6.0629 18.9178 6.12581 18.8384C6.18871 18.7739 6.15968 18.625 6.0629 18.5307C5.95645 18.4166 5.81129 18.4017 5.74839 18.4811ZM5.19677 17.7516C5.11935 17.8012 5.11935 17.9302 5.19677 18.0444C5.27419 18.1585 5.40484 18.2082 5.46774 18.1585C5.54516 18.094 5.54516 17.965 5.46774 17.8508C5.4 17.7367 5.27419 17.6871 5.19677 17.7516Z" fill="#333333" />
                                        </svg>
                                        コードを見る
                                    </a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
                <!-- /OVERVIEWセクション -->

                <!-- POINTセクション -->
                <section class="p-work-point">
                    <div class="p-work-point__inner l-inner">
                        <div class="c-section-title u-fade-up">
                            <span class="c-section-title__en">POINT</span>
                            <span class="c-section-title__ja">工夫したこと</span>
                        </div>

                        <ul class="p-work-point__list">
                            <?php
                            // ポイント1〜3までループ処理
                            for ($i = 1; $i <= 3; $i++) {
                                $p_img = get_field('point' . $i . '_image');
                                $p_title = get_field('point' . $i . '_title');
                                $p_text = get_field('point' . $i . '_text');
                                // タイトルが入力されている場合のみ表示
                                if ($p_title) :
                            ?>
                                    <li class="p-work-point__item u-fade-up">
                                        <figure class="p-work-point__image">
                                            <?php if ($p_img) : ?>
                                                <img src="<?php echo esc_url($p_img['url']); ?>" alt="<?php echo esc_attr($p_img['alt']); ?>" width="800" height="956" />
                                            <?php endif; ?>
                                        </figure>
                                        <div class="p-work-point__body">
                                            <h3 class="p-work-point__title">
                                                <span class="p-work-point__label u-text-accent"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></span>
                                                <?php echo esc_html($p_title); ?>
                                            </h3>
                                            <p class="p-work-point__text">
                                                <?php echo nl2br(esc_html($p_text)); ?>
                                            </p>
                                        </div>
                                    </li>
                            <?php
                                endif; // end if title
                            } // end for
                            ?>
                        </ul>
                    </div>
                </section>
                <!-- /POINTセクション -->

                <!-- キャプチャセクション -->
                <?php
                $capture_pc = get_field('work_capture_pc');
                $capture_sp = get_field('work_capture_sp');

                // どちらか一方でも画像があればセクションを表示
                if ($capture_pc || $capture_sp) :
                ?>
                    <section class="p-work-capture">
                        <div class="l-inner">
                            <p class="p-work-capture__text u-fade-up">
                                ▼スクロールして全体を表示する
                            </p>
                            <figure class="p-work-capture__frame">
                                <div class="p-work-capture__scroll">

                                    <?php if ($capture_pc && $capture_sp) : ?>
                                        <picture>
                                            <source media="(min-width: 768px)" srcset="<?php echo esc_url($capture_pc['url']); ?>">
                                            <img src="<?php echo esc_url($capture_sp['url']); ?>" alt="全体キャプチャ" loading="lazy" width="<?php echo esc_attr($capture_sp['width']); ?>" height="<?php echo esc_attr($capture_sp['height']); ?>" />
                                        </picture>

                                    <?php elseif ($capture_pc) : ?>
                                        <img src="<?php echo esc_url($capture_pc['url']); ?>" alt="全体キャプチャ" loading="lazy" width="<?php echo esc_attr($capture_pc['width']); ?>" height="<?php echo esc_attr($capture_pc['height']); ?>" />

                                    <?php elseif ($capture_sp) : ?>
                                        <img src="<?php echo esc_url($capture_sp['url']); ?>" alt="全体キャプチャ" loading="lazy" width="<?php echo esc_attr($capture_sp['width']); ?>" height="<?php echo esc_attr($capture_sp['height']); ?>" />

                                    <?php endif; ?>

                                </div>
                            </figure>
                        </div>
                    </section>
                <?php endif; ?>
                <!-- /キャプチャセクション -->
            </article>

            <!-- Other worksセクション -->
            <aside class="p-work-others">
                <div class="l-inner">
                    <div class="c-section-title u-fade-up">
                        <span class="c-section-title__en">OTHER WORKS</span>
                        <span class="c-section-title__ja">他の作品</span>
                    </div>

                    <ul class="p-work-others__list">
                        <?php
                        // 現在の記事を除外して、他の作品を3件ランダムに取得
                        $args = array(
                            'post_type' => 'works',
                            'posts_per_page' => 3,
                            'post__not_in' => array(get_the_ID()), // 自分を除外
                            'orderby' => 'rand', // ランダム
                        );
                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                            while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                                <li class="p-work-others__item u-fade-up">
                                    <a href="<?php the_permalink(); ?>" class="p-work-others__link" aria-label="<?php the_title(); ?>を見る">
                                        <figure class="p-work-others__image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large'); ?>
                                            <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.jpg" alt="No Image" />
                                            <?php endif; ?>
                                        </figure>
                                    </a>
                                </li>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </ul>

                    <div class="p-work-others__button">
                        <a href="<?php echo esc_url(home_url('/#works')); ?>" class="c-button">作品一覧を見る</a>
                    </div>
                </div>
            </aside>
            <!-- /Other worksセクション -->

            <?php get_template_part('template-parts/contact'); ?>
    <?php endwhile;
    endif; ?>

</main>

<?php get_footer(); ?>