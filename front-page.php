<?php get_header(); ?>

<main class="l-main">
    <!-- MVセクション -->
    <section class="p-top-mv">
        <div class="p-top-mv__inner l-inner">

            <!-- ボディビルダー -->
            <div class="p-top-mv__bb-area">
                <div class="p-top-mv__vertical-label p-top-mv__vertical-label--black u-fade-up">
                    ボディビルダーから
                </div>

                <div class="p-top-mv__bb-images u-fade-up u-delay-200">
                    <figure class="p-top-mv__bb-img-back ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-bodybuilder-back.webp" alt="ボディビル大会の様子(バックポーズ)" width="360" height="580">
                    </figure>
                    <figure class="p-top-mv__bb-img-front  ">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-bodybuilder-front.webp" alt="ボディビル大会の様子(フロントポーズ)" width="500" height="780">
                    </figure>
                </div>

            </div>
            <!-- 矢印 -->
            <div class="p-top-mv__arrow u-arrow-anim u-delay-400">
                <img
                    class="p-top-mv__arrow-sp"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-arrow-sp.svg"
                    alt=""
                    width="35"
                    height="58">

                <img
                    class="p-top-mv__arrow-pc"
                    src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-arrow-pc.svg"
                    alt=""
                    width="100"
                    height="24">
            </div>

            <!-- Web制作者 -->
            <div class="p-top-mv__web-area">
                <figure class="p-top-mv__web-img u-fade-up u-delay-600">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mv-web-coder.webp" alt="山本静華のポートレート" width="1280" height="1200">
                </figure>

                <div class="p-top-mv__vertical-label p-top-mv__vertical-label--white u-fade-up u-delay-600">
                    ＷＥＢ制作者へ
                </div>
            </div>

            <!-- コピー -->
            <div class="p-top-mv__copy u-fade-up u-delay-800">
                <h2 class="p-top-mv__name">
                    SHIZUKA<br class="u-hidden-lg">
                    YAMAMOTO
                </h2>
                <p class="p-top-mv__portfolio">Portfolio.</p>
            </div>
        </div>
    </section>
    <!-- /MVセクション -->

    <!-- Aboutセクション -->
    <section id="about" class="p-top-about">
        <div class="p-top-about__inner l-inner">
            <h2 class="p-top-about__title c-section-title u-fade-up">
                <span class="c-section-title__en">ABOUT</span>
                <span class="c-section-title__ja">私について</span>
            </h2>

            <div class="p-top-about__content">
                <div class="p-top-about__image u-fade-up">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.webp"
                        alt="山本静華のプロフィール写真"
                        width="400"
                        height="400" />
                </div>

                <?php
                // AboutページのIDを指定
                $about_page_id = 92;
                $study_hours = get_field('total_study_hours', $about_page_id);
                ?>
                <div class="p-top-about__body u-fade-up u-delay-200">
                    <p class="p-top-about__name-en">SHIZUKA YAMAMOTO</p>
                    <h3 class="p-top-about__name-ja">山本 静<span>華</span></h3>
                    <p class="p-top-about__text">
                        静岡県浜松市出身。社会人経験を経て、「自身のスキルで価値を提供したい」と考えるようになり、WEB制作者への転身を決意しました。<br>
                        いち早く現場で通用する技術を身につけるため、8月の学習開始から毎日PCに向かい、累計<?php echo esc_html($study_hours); ?>時間の学習・制作を継続してきました。<br>
                        現在はWEB制作スクール「デイトラ」にて、デザインカンプをもとにしたピクセルパーフェクトな実装と、保守性・可読性を意識したコーディングを重視し、実務を想定した制作に取り組んでいます。
                    </p>
                    <div class="p-top-about__button">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="c-button"> 私について詳しく</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Aboutセクション -->

    <!-- Skillsセクション -->
    <section id="skills" class="p-top-skills">
        <div class="p-top-skills__inner l-inner">
            <h2 class="p-top-skills__title c-section-title u-fade-up">
                <span class="c-section-title__en">SKILLS</span>
                <span class="c-section-title__ja">できること</span>
            </h2>

            <ul class="p-top-skills__list">
                <li class="p-top-skills__item u-fade-up">
                    <div class="c-skill-card">
                        <div class="c-skill-card__header">
                            <div class="c-skill-card__icon c-skill-card__icon--coding">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-coding.svg"
                                    alt="codingのアイコン"
                                    width="80"
                                    height="64" />
                            </div>
                            <h3 class="c-skill-card__title">Coding</h3>
                            <span class="c-skill-card__subtitle">
                                HTML / CSS / Sass / JavaScript / jQuery
                            </span>
                        </div>
                        <p class="c-skill-card__text">
                            デザインカンプをもとにしたピクセルパーフェクトなコーディングはもちろん、
                            FLOCSS等の設計思想を取り入れ、保守性・拡張性の高いCSS設計を意識しています。JavaScript / jQueryによる動的なUI実装にも対応可能で、
                            ユーザー体験を損なわない、直感的でスムーズな実装を行います。
                        </p>
                    </div>
                </li>

                <li class="p-top-skills__item u-fade-up u-delay-200">
                    <div class="c-skill-card">
                        <div class="c-skill-card__header">
                            <div class="c-skill-card__icon c-skill-card__icon--wordpress">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-wordpress.svg"
                                    alt="WordPressのアイコン"
                                    width="64"
                                    height="64" />
                            </div>
                            <h3 class="c-skill-card__title">WordPress</h3>
                            <span class="c-skill-card__subtitle">
                                PHP / Original Theme
                            </span>
                        </div>
                        <p class="c-skill-card__text">
                            HTML/CSSで作成した静的サイトのオリジナルテーマ化に対応します。
                            カスタム投稿タイプ・カスタムフィールドを活用し、クライアント様が迷わず更新できる管理画面設計を心がけています。
                            また、納品後の運用を見据え、更新性・再利用性を考慮した設計により、運用コストの軽減を意識しています。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- /Skillsセクション -->

    <!-- Worksセクション -->
    <section id="works" class="p-top-works">
        <div class="p-top-works__inner l-inner">
            <h2 class="p-top-works__title c-section-title u-fade-up">
                <span class="c-section-title__en">WORKS</span>
                <span class="c-section-title__ja">作品一覧</span>
            </h2>

            <!-- Swiper -->
            <div class="p-top-works__slider-area u-fade-up">
                <div id="js-top-works-swiper" class="swiper p-top-works__swiper">
                    <div class="swiper-wrapper">
                        <?php
                        // データの取得設定
                        $args = array(
                            'post_type'      => 'works',      // カスタム投稿タイプスラッグ
                            'posts_per_page' => -1,           // 全件表示
                            'orderby'        => 'date',       // 日付順
                            'order'          => 'DESC',        //降順
                        );
                        $the_query = new WP_Query($args);
                        ?>
                        <?php if ($the_query->have_posts()) : ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <?php
                                // 1. 制作カテゴリー（黄色ラベル）を取得
                                $cats = get_the_terms(get_the_ID(), 'work_category');
                                $cat_name = (!empty($cats) && !is_wp_error($cats)) ? $cats[0]->name : '';

                                // 2. 担当範囲（緑ラベル＆下のテキスト）を取得
                                $roles = get_the_terms(get_the_ID(), 'work_role');
                                $role_list = [];
                                if (!empty($roles) && !is_wp_error($roles)) {
                                    foreach ($roles as $role) {
                                        $role_list[] = $role->name;
                                    }
                                }
                                // 配列を文字にする（例: Design, Coding）
                                $role_text = implode(' & ', $role_list);

                                // 3. 使用技術（下のテキスト）を取得
                                $skills = get_the_terms(get_the_ID(), 'work_skill');
                                $skill_list = [];
                                if (!empty($skills) && !is_wp_error($skills)) {
                                    foreach ($skills as $skill) {
                                        $skill_list[] = $skill->name;
                                    }
                                }
                                $skill_text = implode(', ', $skill_list);
                                ?>

                                <!-- スライド1枚目-->
                                <div class="swiper-slide p-top-works__swiper-slide">
                                    <article class="c-work-card">
                                        <a href="<?php the_permalink(); ?>" class="c-work-card__link">
                                            <figure class="c-work-card__image">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php else : ?>
                                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png" alt="No Image" />
                                                <?php endif; ?>
                                            </figure>

                                            <div class="c-work-card__body">
                                                <div class="c-work-card__tags">
                                                    <?php if ($cat_name) : ?>
                                                        <span class="c-label c-label--category"><?php echo esc_html($cat_name); ?></span>
                                                    <?php endif; ?>

                                                    <?php if (!empty($roles) && !is_wp_error($roles)) : ?>
                                                        <?php foreach ($roles as $role) : ?>
                                                            <span class="c-label c-label--role"><?php echo esc_html($role->name); ?></span>
                                                        <?php endforeach; ?>
                                                    <?php endif; ?>
                                                </div>
                                                <h3 class="c-work-card__title"><?php the_title(); ?></h3>
                                                <p class="c-work-card__meta">
                                                    Coding / <?php echo esc_html($skill_text); ?>
                                                </p>
                                            </div>
                                        </a>
                                    </article>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata();
                            ?>

                        <?php else : ?>
                            <p style="text-align:center; padding: 20px;">ただいま制作実績を準備中です。</p>
                        <?php endif; ?>
                    </div>

                    <!-- ナビゲーション -->
                    <div
                        id="js-top-works-prev"
                        class="swiper-button-prev p-top-works__prev"></div>
                    <div
                        id="js-top-works-next"
                        class="swiper-button-next p-top-works__next"></div>
                </div>
            </div>

            <div class="p-top-works__button">
                <a class="c-button" href="<?php echo esc_url(get_post_type_archive_link('works')); ?>">作品一覧を見る</a>
            </div>
        </div>
    </section>
    <!-- /Worksセクション -->

    <?php get_template_part('template-parts/contact'); ?>
</main>

<?php get_footer(); ?>