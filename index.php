<?php
$pageTitle = 'High-Quality Flanges and Forgings | Western Forge & Flange';
include __DIR__ . '/header.php';
?>

<section class="hero">
    <video class="hero-media" autoplay muted loop playsinline poster="<?php echo $baseUrl; ?>/images/hero.png">
        <source src="<?php echo $baseUrl; ?>/images/hero-video.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">High-Quality Flanges and Custom Forgings, Delivered Fast</h1>
            <p class="hero-subtitle">Expertly forged flanges and specialized products, trusted by diverse industries worldwide since 1944.</p>
            <div class="hero-actions">
                <a class="btn-hero btn-hero-primary" href="#products">Explore Products</a>
                <a class="btn-hero btn-hero-outline" href="#contact">Request a Quote</a>
            </div>
        </div>
    </div>

    <img class="hero-flange" src="<?php echo $baseUrl; ?>/images/flange-weld-neck.png" alt="">
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script>
    (function () {
        var panel = document.getElementById('headerSearch');
        var openBtn = document.getElementById('searchToggle');
        var closeBtn = document.getElementById('searchClose');
        var input = document.getElementById('site-search');

        function openSearch() {
            panel.classList.add('is-open');
            setTimeout(function () { input.focus(); }, 50);
        }

        function closeSearch() {
            panel.classList.remove('is-open');
        }

        if (openBtn) openBtn.addEventListener('click', openSearch);
        if (closeBtn) closeBtn.addEventListener('click', closeSearch);
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeSearch();
        });
    })();
</script>
</body>
</html>
