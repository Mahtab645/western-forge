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
</section>

<?php
$flanges = [
    ['name' => 'Weld Neck', 'file' => 'flange-weld-neck.webp'],
    ['name' => 'Slip On', 'file' => 'flange-slip-on.webp'],
    ['name' => 'Blind', 'file' => 'flange-blind.webp'],
    ['name' => 'Socket Weld', 'file' => 'flange-socket-weld.webp'],
    ['name' => 'Threaded', 'file' => 'flange-threaded.png'],
    ['name' => 'Lap Joint', 'file' => 'flange-lap-joint.webp'],
    ['name' => 'Stub End', 'file' => 'flange-stubb-end.webp'],
    ['name' => 'Studding Outlet', 'file' => 'flange-studding-outlet.png'],
    ['name' => 'Long Weld Neck', 'file' => 'flange-long-weld-neck.webp'],
    ['name' => 'Orifice Set', 'file' => 'flange-orifice.png'],
];
foreach ($flanges as $i => $flange) {
    $path = __DIR__ . '/images/' . $flange['file'];
    if (!is_file($path)) {
        $alt = preg_replace('/\.(webp|png)$/', '', $flange['file']);
        if (is_file(__DIR__ . '/images/' . $alt . '.png')) {
            $flanges[$i]['file'] = $alt . '.png';
        } elseif (is_file(__DIR__ . '/images/' . $alt . '.webp')) {
            $flanges[$i]['file'] = $alt . '.webp';
        }
    }
}
$startIndex = 7;
?>

<section class="product-slider" id="products">
    <div class="product-slider-stage">
        <button class="slider-arrow slider-arrow-prev" type="button" aria-label="Previous product">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M15 6 9 12l6 6" stroke="#171819" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>

        <div class="slider-viewport" id="flangeSlider">
            <?php foreach ($flanges as $index => $flange): ?>
                <article class="slider-item<?php echo $index === $startIndex ? ' is-active' : ''; ?>" data-index="<?php echo $index; ?>">
                    <img src="<?php echo $baseUrl; ?>/images/<?php echo htmlspecialchars($flange['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($flange['name'], ENT_QUOTES, 'UTF-8'); ?>">
                </article>
            <?php endforeach; ?>
        </div>

        <button class="slider-arrow slider-arrow-next" type="button" aria-label="Next product">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m9 6 6 6-6 6" stroke="#171819" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
    </div>

    <div class="container product-slider-copy">
        <h2 class="slider-title" id="sliderTitle"><?php echo htmlspecialchars($flanges[$startIndex]['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
        <ul class="slider-cats" id="sliderCats">
            <?php foreach ($flanges as $index => $flange): ?>
                <li class="<?php echo $index === $startIndex ? 'is-active' : ''; ?>">
                    <a href="#" data-index="<?php echo $index; ?>"><?php echo htmlspecialchars($flange['name'], ENT_QUOTES, 'UTF-8'); ?></a>
                    <?php if ($index < count($flanges) - 1): ?><span>:</span><?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
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

    (function () {
        var items = Array.prototype.slice.call(document.querySelectorAll('.slider-item'));
        var cats = Array.prototype.slice.call(document.querySelectorAll('#sliderCats a'));
        var catItems = Array.prototype.slice.call(document.querySelectorAll('#sliderCats li'));
        var title = document.getElementById('sliderTitle');
        var prevBtn = document.querySelector('.slider-arrow-prev');
        var nextBtn = document.querySelector('.slider-arrow-next');
        var viewport = document.getElementById('flangeSlider');
        var total = items.length;
        var current = <?php echo (int) $startIndex; ?>;
        var names = <?php echo json_encode(array_column($flanges, 'name'), JSON_UNESCAPED_UNICODE); ?>;

        function wrap(i) {
            return (i + total) % total;
        }

        function render(index) {
            current = wrap(index);
            items.forEach(function (item, i) {
                item.className = 'slider-item';
                var offset = i - current;
                if (offset > total / 2) offset -= total;
                if (offset < -total / 2) offset += total;
                if (offset === 0) item.classList.add('is-active');
                else if (offset === -1) item.classList.add('is-prev');
                else if (offset === 1) item.classList.add('is-next');
                else if (offset === -2) item.classList.add('is-prev-2');
                else if (offset === 2) item.classList.add('is-next-2');
                else item.classList.add('is-far');
            });
            catItems.forEach(function (li, i) {
                li.classList.toggle('is-active', i === current);
            });
            if (title) title.textContent = names[current];
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { render(current - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { render(current + 1); });
        cats.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                render(parseInt(link.getAttribute('data-index'), 10));
            });
        });

        var startX = 0;
        if (viewport) {
            viewport.addEventListener('touchstart', function (e) {
                startX = e.changedTouches[0].clientX;
            }, { passive: true });
            viewport.addEventListener('touchend', function (e) {
                var dx = e.changedTouches[0].clientX - startX;
                if (Math.abs(dx) > 40) render(current + (dx < 0 ? 1 : -1));
            }, { passive: true });
        }

        render(current);
    })();
</script>
</body>
</html>
