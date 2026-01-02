    <!-- フッター -->
    <footer id="footer" class="l-footer">
        <div class="l-footer__inner l-inner">
            <nav class="p-footer-nav" aria-label="フッターナビゲーション">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-nav',
                        'container'      => false,
                        'menu_class'     => 'p-footer-nav__list',
                    )
                );
                ?>
            </nav>

            <div class="l-footer__copyright">
                <small>&copy; 2026 Shizuka Yamamoto Portfolio.</small>
            </div>
        </div>
    </footer>
    <!-- /フッター -->

    <!-- トップへ戻るボタン -->
    <button id="js-page-top" class="c-page-top" aria-label="ページトップへ戻る">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M6 14L12 8L18 14"
                stroke="currentColor"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
    <!-- /トップへ戻るボタン -->

    <?php wp_footer(); ?>
    </body>

    </html>