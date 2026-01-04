<nav
    class="c-breadcrumb u-fade-up u-delay-200"
    aria-label="パンくずリスト">
    <ul class="c-breadcrumb__list">
        <?php
        if (function_exists('bcn_display')) {
            bcn_display();
        }
        ?>
    </ul>
</nav>