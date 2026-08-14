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

<section class="products-explore">
    <div class="container">
        <div class="products-explore-intro">
            <h2>Explore Our Products and Capabilities</h2>
            <p>At Western Forge &amp; Flange, we provide single-run and multiple-run flanges and forged shapes up to 2,500 pounds, serving a global client base across industries and functions. Our U.S. materials-sourcing and inspection processes are designed to deliver reliable quality.</p>
            <p>This includes a diverse range of flanges: weld neck, slip-on, blind, socket weld, threaded, lap joint, stub end, studding outlet, long weld neck, and orifice set. We can also produce specialized parts to suit your measurements.</p>
            <h3>Flanges</h3>
        </div>

        <div class="row g-4 product-card-grid">
            <?php
            $productCards = [
                ['label' => 'Weld Neck Flanges', 'file' => 'flange-weld-neck.webp'],
                ['label' => 'Slip-on Flanges', 'file' => 'flange-slip-on.webp'],
                ['label' => 'Blind Flanges', 'file' => 'flange-blind.webp'],
                ['label' => 'Socket Weld Flanges', 'file' => 'flange-socket-weld.webp'],
                ['label' => 'Lap Joint Flanges', 'file' => 'flange-lap-joint.webp'],
                ['label' => 'Stub Ends', 'file' => 'flange-stubb-end.webp'],
                ['label' => 'Studding Outlet Flanges', 'file' => 'flange-studding-outlet.png'],
                ['label' => 'Long Weld Neck Flanges', 'file' => 'flange-long-weld-neck.webp'],
                ['label' => 'Orifice Sets', 'file' => 'flange-orifice.png'],
            ];
            foreach ($productCards as $i => $card) {
                $path = __DIR__ . '/images/' . $card['file'];
                if (!is_file($path)) {
                    $alt = preg_replace('/\.(webp|png)$/', '', $card['file']);
                    if (is_file(__DIR__ . '/images/' . $alt . '.png')) {
                        $productCards[$i]['file'] = $alt . '.png';
                    } elseif (is_file(__DIR__ . '/images/' . $alt . '.webp')) {
                        $productCards[$i]['file'] = $alt . '.webp';
                    }
                }
            }
            foreach ($productCards as $card):
            ?>
            <div class="col-md-6 col-lg-4">
                <a class="product-card" href="#products">
                    <span class="product-card-arrow" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17 17 7M9 7h8v8" stroke="#e0393e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div class="product-card-inner">
                        <img src="<?php echo $baseUrl; ?>/images/<?php echo htmlspecialchars($card['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($card['label'], ENT_QUOTES, 'UTF-8'); ?>">
                        <h4><?php echo htmlspecialchars($card['label'], ENT_QUOTES, 'UTF-8'); ?></h4>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>

        <div class="text-center">
            <a class="btn-view-products" href="#products">View All Products</a>
        </div>
    </div>
</section>

<section class="trust-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2>Why Our Customers Trust Us</h2>
                <p class="trust-lead">Companies across the world feel confident coming to Western Forge &amp; Flange with their most demanding needs. They know they can count on our experts and facilities to forge reliable products that meet exacting specifications.</p>
                <h3>We offer:</h3>
                <ul class="trust-list">
                    <li>Rush capabilities, with quotes in minutes and a five-day emergency turnaround time.</li>
                    <li>Experience and know-how built over 80+ years in business.</li>
                    <li>A lineup of U.S.-sourced stainless and exotic alloys.</li>
                    <li>Quality program that has been proven with a wide variety of certifications, from ISO to the most stringent nuclear certifications in the industry.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 trust-video">
                    <iframe src="https://www.youtube.com/embed/aiH00reL7mc" title="Western Forge and Flange - High Nickel Alloys" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
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
