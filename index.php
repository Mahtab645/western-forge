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
    ['name' => 'Weld Neck', 'file' => 'flange-weld-neck.webp', 'slug' => 'weld-neck-flanges'],
    ['name' => 'Slip On', 'file' => 'flange-slip-on.webp', 'slug' => 'slip-on-flanges'],
    ['name' => 'Blind', 'file' => 'flange-blind.webp', 'slug' => 'blind-flanges'],
    ['name' => 'Socket Weld', 'file' => 'flange-socket-weld.webp', 'slug' => 'socket-weld-flanges'],
    ['name' => 'Threaded', 'file' => 'flange-threaded.png', 'slug' => 'threaded-flanges'],
    ['name' => 'Lap Joint', 'file' => 'flange-lap-joint.webp', 'slug' => 'lap-joint-flanges'],
    ['name' => 'Stub End', 'file' => 'flange-stubb-end.webp', 'slug' => 'stub-end-flanges'],
    ['name' => 'Studding Outlet', 'file' => 'flange-studding-outlet.png', 'slug' => 'studding-outlet-flanges'],
    ['name' => 'Long Weld Neck', 'file' => 'flange-long-weld-neck.webp', 'slug' => 'long-weld-neck-flanges'],
    ['name' => 'Orifice Set', 'file' => 'flange-orifice.png', 'slug' => 'orifice-set-flanges'],
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
                ['label' => 'Weld Neck Flanges', 'file' => 'flange-weld-neck.webp', 'slug' => 'weld-neck-flanges'],
                ['label' => 'Slip-on Flanges', 'file' => 'flange-slip-on.webp', 'slug' => 'slip-on-flanges'],
                ['label' => 'Blind Flanges', 'file' => 'flange-blind.webp', 'slug' => 'blind-flanges'],
                ['label' => 'Socket Weld Flanges', 'file' => 'flange-socket-weld.webp', 'slug' => 'socket-weld-flanges'],
                ['label' => 'Lap Joint Flanges', 'file' => 'flange-lap-joint.webp', 'slug' => 'lap-joint-flanges'],
                ['label' => 'Stub Ends', 'file' => 'flange-stubb-end.webp', 'slug' => 'stub-end-flanges'],
                ['label' => 'Studding Outlet Flanges', 'file' => 'flange-studding-outlet.png', 'slug' => 'studding-outlet-flanges'],
                ['label' => 'Long Weld Neck Flanges', 'file' => 'flange-long-weld-neck.webp', 'slug' => 'long-weld-neck-flanges'],
                ['label' => 'Orifice Sets', 'file' => 'flange-orifice.png', 'slug' => 'orifice-set-flanges'],
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
                <a class="product-card" href="<?php echo wf_product_url($card['slug'], $baseUrl); ?>">
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
            <a class="btn-view-products" href="<?php echo wf_products_listing_url($baseUrl); ?>">View All Products</a>
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

<section class="forging-section" id="custom-forging">
    <div class="container">
        <div class="forging-intro">
            <h2>Custom Forging Solutions</h2>
            <p>We’re ready to forge parts that meet your most exacting needs. These include specialty engineered products, from applications as simple as a water treatment plant to prototypes for aerospace rockets and nuclear submarines for the Navy. We work with a variety of advanced corrosion- and heat-resistant alloys, and can provide expedited turnarounds to meet your demands.</p>
        </div>

        <div class="row g-4 forging-grid">
            <?php
            $forgingCards = [
                ['name' => 'Blocks', 'file' => 'icon-blocks.png', 'hover' => 'up to 2,500 lbs in weight'],
                ['name' => 'Rings', 'file' => 'icon-rings.png', 'hover' => 'up to 75″ in diameter'],
                ['name' => 'Bars', 'file' => 'icon-bars.png', 'hover' => 'up to 48″ in length'],
                ['name' => 'Discs', 'file' => 'icon-discs.png', 'hover' => 'up to 48″ in diameter'],
            ];
            foreach ($forgingCards as $card):
            ?>
            <div class="col-md-6 col-lg-4">
                <a class="forging-card" href="<?php echo $baseUrl; ?>/custom-forging.php">
                    <span class="forging-card-arrow" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17 17 7M9 7h8v8" stroke="#e0393e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div class="forging-card-inner">
                        <div class="forging-card-default">
                            <img src="<?php echo $baseUrl; ?>/images/<?php echo htmlspecialchars($card['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($card['name'], ENT_QUOTES, 'UTF-8'); ?>">
                            <h3><?php echo htmlspecialchars($card['name'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        </div>
                        <div class="forging-card-hover">
                            <span><?php echo htmlspecialchars($card['hover'], ENT_QUOTES, 'UTF-8'); ?></span>
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M5 12h14M13 6l6 6-6 6" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>

            <div class="col-md-6 col-lg-8">
                <div class="forging-cta">
                    <h3>Learn more about Custom Forgings</h3>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/custom-forging.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="materials-section">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
                <h2>Material Grades</h2>
                <h3>80+ Metals In Stock</h3>
                <p>Take advantage of our inventory of metals including stainless steel and high nickel alloys.</p>
            </div>
            <div class="col-lg-7">
                <ul class="materials-list">
                    <li><strong>Hastelloy</strong> – C276, C22, B3, X, G30, G35</li>
                    <li><strong>Alloy</strong> – 400, 600, 601, 625, 800H/HT, 825, 904L, A20</li>
                    <li><strong>Duplex &amp; Super Duplex</strong> – 2205, 2507, 255</li>
                    <li><strong>Nickel</strong> – 200, 201</li>
                    <li><strong>Titanium</strong> – Grades 2, 7, and 12</li>
                    <li><strong>Aluminum</strong> – 6061, 3003, 5083, 5086</li>
                    <li><strong>Copper Nickel</strong> – 70/30, 90/10</li>
                    <li><strong>Stainless</strong> – 304/H, 310, 316/H, 317, 321/H, 347/H</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="industries-section" id="industries">
    <div class="container">
        <h2>Industries We Support</h2>
        <p class="industries-lead">Companies that require high-performance forged products trust Western Forge &amp; Flange to provide the highest level of engineered components to meet a multitude of applications across a wide spectrum of industries.</p>
        <ul class="industries-list">
            <li><a href="#industries">Petrochemical</a></li>
            <li><a href="#industries">Liquefied Natural Gas</a></li>
            <li><a href="#industries">Oil and Gas</a></li>
            <li><a href="#industries">Renewable Fuels</a></li>
            <li><a href="#industries">Nuclear</a></li>
            <li><a href="#industries">Power Generation</a></li>
            <li><a href="#industries">Pulp and Paper</a></li>
            <li><a href="#industries">Marine and Shipbuilding</a></li>
            <li><a href="#industries">Pharmaceuticals</a></li>
            <li><a href="#industries">Agriculture</a></li>
            <li><a href="#industries">Mining</a></li>
            <li><a href="#industries">Defense</a></li>
        </ul>
        <a class="btn-view-products" href="#industries">Explore Industries</a>
    </div>
</section>

<section class="quality-section" id="quality">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="quality-media">
                    <span class="quality-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-testing.jpg" alt="Quality testing at Western Forge &amp; Flange">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="quality-copy">
                    <h2>Quality You Can Trust</h2>
                    <p>Our services are backed by a variety of certifications, attesting to the quality and precision of our work. Western Forge &amp; Flange is the holder of approvals from ISO, PED, PER, and more, as well as Canadian nuclear and non-nuclear standards, alongside federal and military approvals. Our compliance documentation is downloadable and ready for your inspection.</p>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/quality-certifications.php">View Certifications</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="resources-section" id="resources">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h2>Helpful Resources</h2>
                <p>To make sure your needs perfectly align with our capabilities, we offer a number of technical guides and informative resources. Checking these makes specifying easy for your team.</p>
            </div>
            <div class="col-lg-6">
                <div class="resource-links">
                    <a href="#resources">Flange Dimensions <span aria-hidden="true">&rarr;</span></a>
                    <a href="#resources">Dimensional Tolerances <span aria-hidden="true">&rarr;</span></a>
                    <a href="<?php echo $baseUrl; ?>/forging-101.php">Forging 101 <span aria-hidden="true">&rarr;</span></a>
                    <a href="#resources">See All Resources <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section" id="contact">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="cta-box">
                    <h2>Ready To Get Started?</h2>
                    <p>Once you reach out to Western Forge &amp; Flange, you’ll get the products you need in a hurry. Quick quotes and dependable delivery are part of our promise to you.</p>
                    <a class="btn-view-products" href="#contact">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
