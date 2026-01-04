<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <main class="l-main">
            <!-- プロフィールセクション -->
            <section class="p-about-profile">
                <div class="p-about-profile__inner l-inner">
                    <div class="p-about-profile__image u-fade-up">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/profile.png"
                            alt="山本静華のプロフィール写真"
                            width="400"
                            height="400" />
                    </div>

                    <div class="p-about-profile__body u-fade-up u-delay-200">
                        <p class="p-about-profile__en">SHIZUKA YAMAMOTO</p>
                        <h2 class="p-about-profile__ja">山本 静<span>華</span></h2>
                        <div class="p-about-profile__text">
                            <p>
                                静岡県浜松市出身。社会人としてキャリアを積む中で、「自分の手で形にし、価値を提供したい」というモノ作りへの強い想いが芽生え、Webコーダーへの転身を決意しました。
                            </p>
                            <p>
                                現在はWeb制作スクール「デイトラ」にて、HTML/CSSはもちろん、Sass（FLOCSS）を用いた保守性の高いコード設計や、WordPressのオリジナルテーマ開発を深く学んでいます。特に「デザインカンプの意図を1px単位で再現するピクセルパーフェクト」へのこだわりと、運用者が迷わない管理画面設計など「現場で通用する実務力」の習得を最優先しています。
                            </p>
                            <p>
                                2025年8月30日の学習開始以来、現職と両立しながら毎日学習を継続し、累計学習時間は420時間を突破しました。実務開始に向け、日々技術のアップデートを怠らず、自走し続ける姿勢を大切にしています。
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /プロフィールセクション -->

            <!-- Strengthセクション -->
            <section class="p-about-strength">
                <div class="p-about-strength__inner l-inner">
                    <div class="p-about-strength__title c-section-title u-fade-up">
                        <span class="c-section-title__en">STRENGTH</span>
                        <span class="c-section-title__ja">強み</span>
                    </div>

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
                                    未経験からWeb制作の世界に飛び込みましたが、「わからない」をそのままにせず、納得がいくまでとことん調べるのが私のスタイルです。エラーや新しい技術に直面した際も、単なるコピペで終わらせず「なぜそう動くのか」という根本理解を大切にしています。この粘り強さで、確実な実装を行います。
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
                                    一度決めた目標は最後までやり抜きます。実はプライベートでも、筋力トレーニングを10年間続けています。トレーニングで培った「コツコツ続ける体力と根気」は、Web制作における地道な修正作業や、長時間のコーディング集中力にも活きています。困難な実装も投げ出さず、しっかりと形にします。
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
                                    日常生活でも「相手の立場だったらどう思うか」を大切にしています。Web制作においても、「自分がお客様ならこの管理画面は使いやすいか」「後任のエンジニアならこのコードは読みやすいか」と常に自問自答を繰り返します。技術力だけでなく、「相手への思いやり」を込めた実装を常に心がけています。
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
                    <div class="p-about-vision__title c-section-title u-fade-up">
                        <span class="c-section-title__en">VISION</span>
                        <span class="c-section-title__ja">将来像</span>
                    </div>

                    <div class="p-about-vision__content">
                        <ul class="p-about-vision__list">
                            <!-- 将来像1つ目 -->
                            <li class="p-about-vision__item u-fade-up">
                                <div class="p-about-vision__head">
                                    <span class="p-about-vision__year">1年後</span>
                                    <h3 class="p-about-vision__term">
                                        「確実な実装力」で信頼を築く
                                    </h3>
                                </div>
                                <p class="p-about-vision__text">
                                    まずはコーダーとして、正確でミスのない実装を徹底します。開発フローを吸収しながらHTML/CSSの品質を高め、「山本に任せれば大丈夫」と言われる信頼関係をチーム内で築きます。
                                </p>
                            </li>

                            <!-- 将来像2つ目 -->
                            <li class="p-about-vision__item u-fade-up u-delay-200">
                                <div class="p-about-vision__head">
                                    <span class="p-about-vision__year">2年後</span>
                                    <h3 class="p-about-vision__term">
                                        実装の幅を広げ、技術を深める
                                    </h3>
                                </div>
                                <p class="p-about-vision__text">
                                    静的な表示だけでなく、JavaScriptを用いた複雑な機能実装や、WordPressの高度なカスタマイズスキルを習得します。「動く・機能する」サイトを作れる技術者として、対応領域を広げます。
                                </p>
                            </li>

                            <!-- 将来像3つ目 -->
                            <li class="p-about-vision__item u-fade-up u-delay-400">
                                <div class="p-about-vision__head">
                                    <span class="p-about-vision__year">3年後</span>
                                    <h3 class="p-about-vision__term">
                                        フロントエンドエンジニアへ
                                    </h3>
                                </div>
                                <p class="p-about-vision__text">
                                    モダンなフレームワーク（React/Vue.jsなど）やパフォーマンス最適化を学び、フロントエンドエンジニアへとステップアップします。UI/UXの視点も持ち、ユーザー体験を技術で最大化できる人材を目指します。
                                </p>
                            </li>
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