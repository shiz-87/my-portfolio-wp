<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="l-main">

            <?php get_template_part('template-parts/page-header', null, ['title' => 'ABOUT']); ?>

            <!-- プロフィールセクション -->
            <section class="p-about-profile">
                <div class="p-about-profile__inner l-inner">

                    <div class="p-about-profile__image u-fade-up u-delay-200">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.webp"
                            alt="山本静華のプロフィール写真"
                            width="400"
                            height="400" />
                    </div>

                    <div class="p-about-profile__body u-fade-up u-delay-400">
                        <p class="p-about-profile__en">SHIZUKA YAMAMOTO</p>
                        <h2 class="p-about-profile__ja">山本 静<span>華</span></h2>
                        <div class="p-about-profile__text">
                            <p>
                                静岡県浜松市出身。社会人としてキャリアを積む中で、「自分の手で形にし、価値を提供したい」というモノ作りへの強い想いが芽生え、WEB制作者への転身を決意しました。
                            </p>
                            <p>
                                現在はWEB制作スクール「デイトラ」にて、HTML/CSSはもちろん、Sass（FLOCSS）を用いた保守性の高いコード設計や、WordPressのオリジナルテーマ開発を深く学んでいます。特に「デザインカンプの意図を1px単位で再現するピクセルパーフェクト」へのこだわりと、運用者が迷わない管理画面設計など「現場で通用する実務力」の習得を最優先しています。
                            </p>
                            <p>
                                2025年8月30日の学習開始以来、現職と両立しながら毎日学習を継続し、累計学習時間は<?php echo esc_html(get_field('total_study_hours')); ?>時間を突破しました。実務開始に向け、日々技術のアップデートを怠らず、自走し続ける姿勢を大切にしています。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /プロフィールセクション -->

            <!-- Strengthセクション -->
            <section class="p-about-strength">
                <div class="p-about-strength__inner l-inner">
                    <h2 class="p-about-strength__title c-section-title u-fade-up">
                        <span class="c-section-title__en">STRENGTH</span>
                        <span class="c-section-title__ja">強み</span>
                    </h2>

                    <div class="p-about-strength__card">
                        <ul class="p-about-strength__list">
                            <!-- 強み1つ目 -->
                            <li class="p-about-strength__item u-fade-up">
                                <div class="p-about-strength__head">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-checked.svg"
                                        alt="チェックマークのアイコン画像"
                                        width="24"
                                        height="24" />
                                    <h3 class="p-about-strength__term">妥協しない粘り強さ</h3>
                                </div>
                                <p class="p-about-strength__text">
                                    未経験からWEB制作の世界に飛び込みましたが、「わからない」をそのままにせず、納得がいくまでとことん調べるのが私のスタイルです。エラーや新しい技術に直面した際も、単なるコピペで終わらせず「なぜそう動くのか」という根本理解を大切にしています。この粘り強さで、確実な実装を行います。
                                </p>
                            </li>

                            <!-- 強み2つ目 -->
                            <li class="p-about-strength__item u-fade-up u-delay-200">
                                <div class="p-about-strength__head">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-checked.svg"
                                        alt="チェックマークのアイコン画像"
                                        width="24"
                                        height="24" />
                                    <h3 class="p-about-strength__term">
                                        心身を支える継続力と体力
                                    </h3>
                                </div>
                                <p class="p-about-strength__text">
                                    一度決めた目標は最後までやり抜きます。実はプライベートでも、筋力トレーニングを10年間続けています。トレーニングで培った「コツコツ続ける体力と根気」は、WEB制作における地道な修正作業や、長時間のコーディング集中力にも活きています。困難な実装も投げ出さず、しっかりと形にします。
                                </p>
                            </li>

                            <!-- 強み3つ目 -->
                            <li class="p-about-strength__item u-fade-up u-delay-400">
                                <div class="p-about-strength__head">
                                    <img
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-checked.svg"
                                        alt="チェックマークのアイコン画像"
                                        width="24"
                                        height="24" />
                                    <h3 class="p-about-strength__term">使う人を想う想像力</h3>
                                </div>
                                <p class="p-about-strength__text">
                                    日常生活でも「相手の立場だったらどう思うか」を大切にしています。WEB制作においても、「自分がお客様ならこの管理画面は使いやすいか」「後任のエンジニアならこのコードは読みやすいか」と常に自問自答を繰り返します。技術力だけでなく、「相手への思いやり」を込めた実装を常に心がけています。
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Strengthセクション -->

            <!-- Visionセクション -->
            <section class="p-about-vision">
                <div class="p-about-vision__inner l-inner">
                    <h2 class="p-about-vision__title c-section-title u-fade-up">
                        <span class="c-section-title__en">VISION</span>
                        <span class="c-section-title__ja">将来像</span>
                    </h2>

                    <div class="p-about-vision__content">
                        <ul class="p-about-vision__list">
                            <?php
                            // 3年分のデータを配列として定義（グループフィールドを使用）
                            $visions = [
                                'delay-0'   => get_field('vision_1_group'), // 1年後のグループ
                                'delay-200' => get_field('vision_2_group'), // 2年後のグループ
                                'delay-400' => get_field('vision_3_group'), // 3年後のグループ
                            ];

                            foreach ($visions as $delay_class => $vision) :
                                // データが入っていて、かつ見出し(term)がある場合のみ表示
                                if ($vision && !empty($vision['term'])) :
                            ?>
                            <!-- 将来像 -->
                            <li class="p-about-vision__item u-fade-up u-<?php echo esc_attr($delay_class); ?>">
                                <div class="p-about-vision__head">
                                    <span class="p-about-vision__year"><?php echo esc_html($vision['year']); ?>年後</span>
                                    <h3 class="p-about-vision__term">
                                        <?php echo esc_html($vision['term']); ?>
                                    </h3>
                                </div>
                                <p class="p-about-vision__text">
                                    <?php echo nl2br(esc_html($vision['text'])); ?>
                                </p>
                            </li>
                            <?php
                                endif;
                            endforeach;
                            ?>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- /Visionセクション -->

            <!-- Contactセクション -->
            <?php get_template_part('template-parts/contact'); ?>
        </main>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>