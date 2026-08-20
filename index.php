<?php
$pageTitle = 'Forged Flanges & Custom Forgings | STELVERA FORGE';
$pageDescription = 'STELVERA FORGE S.p.A. manufactures high-integrity flanges and forged components for critical industrial applications, with a focus on precision, quality and strength in every connection.';
include __DIR__ . '/header.php';
?>

<section class="hero">
    <video class="hero-media" autoplay muted loop playsinline poster="<?php echo $baseUrl; ?>/images/hero.png">
        <source src="<?php echo $baseUrl; ?>/images/hero-video.mp4" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">High-Quality Flanges and Custom Forgings</h1>
            <p class="hero-subtitle">Precision in manufacturing. Confidence in service. Strength in every connection.</p>
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
            <p>STELVERA FORGE S.p.A. manufactures high-integrity flanges and forged components for critical industrial applications. Our approach combines advanced forging expertise, precision machining and controlled manufacturing processes to deliver consistent quality across every production stage.</p>
            <p>Our manufacturing range includes Weld Neck, Blind, Slip-On, Socket Weld, Threaded, Lap Joint, Long Weld Neck, Orifice and special flanges, together with engineered forgings produced to customer drawings and project specifications.</p>
            <p>From material selection to final inspection, each component is manufactured with a clear focus on dimensional accuracy, traceability and reliable performance.</p>
            <p class="section-tagline">Precision in manufacturing. Confidence in service. Strength in every connection.</p>
            <h3>Flanges</h3>
        </div>

        <div class="row g-4 product-card-grid">
            <?php
            $productCards = [
                ['label' => 'Weld Neck Flanges', 'file' => 'flange-weld-neck.webp', 'slug' => 'weld-neck-flanges'],
                ['label' => 'Blind Flanges', 'file' => 'flange-blind.webp', 'slug' => 'blind-flanges'],
                ['label' => 'Slip-on Flanges', 'file' => 'flange-slip-on.webp', 'slug' => 'slip-on-flanges'],
                ['label' => 'Socket Weld Flanges', 'file' => 'flange-socket-weld.webp', 'slug' => 'socket-weld-flanges'],
                ['label' => 'Threaded Flanges', 'file' => 'flange-threaded.png', 'slug' => 'threaded-flanges'],
                ['label' => 'Lap Joint Flanges', 'file' => 'flange-lap-joint.webp', 'slug' => 'lap-joint-flanges'],
                ['label' => 'Long Weld Neck Flanges', 'file' => 'flange-long-weld-neck.webp', 'slug' => 'long-weld-neck-flanges'],
                ['label' => 'Orifice Sets', 'file' => 'flange-orifice.png', 'slug' => 'orifice-set-flanges'],
                ['label' => 'Special Flanges', 'file' => 'flange-studding-outlet.png', 'slug' => 'other-flanges'],
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
                <h2>Why Customers Choose STELVERA</h2>
                <p class="trust-lead">Across demanding industrial sectors, customers choose STELVERA FORGE S.p.A. for our commitment to precision, material integrity and dependable manufacturing. From standard flanges to complex custom forgings, every component is produced with careful attention to specification, quality and performance.</p>
                <h3>Our strengths include:</h3>
                <ul class="trust-list">
                    <li><strong>Engineering Expertise</strong> Technical know-how for standard, special and project-specific forged components.</li>
                    <li><strong>Flexible Manufacturing</strong> Capability to support both individual requirements and larger production quantities.</li>
                    <li><strong>Material Versatility</strong> Manufacturing across carbon, alloy, stainless, duplex and special alloy grades.</li>
                    <li><strong>Precision &amp; Quality</strong> Controlled manufacturing, machining and inspection processes focused on consistent product quality.</li>
                    <li><strong>Full Traceability</strong> Structured material identification and documentation throughout the manufacturing process.</li>
                    <li><strong>Custom Solutions</strong> Components manufactured to customer drawings, dimensions and technical specifications.</li>
                    <li><strong>Reliable Service</strong> Responsive technical support from enquiry through production and final delivery.</li>
                </ul>
                <p class="section-tagline trust-tagline">Precision Forged. Quality Assured. Strength in Every Connection.</p>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9 trust-video">
                    <iframe src="https://www.youtube.com/embed/aiH00reL7mc" title="STELVERA FORGE S.p.A. - High Nickel Alloys" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="forging-section" id="custom-forging">
    <div class="container">
        <div class="forging-intro">
            <h2>Custom Forging Solutions</h2>
            <p class="section-kicker">Precision Forged to Your Specifications.</p>
            <p>STELVERA FORGE S.p.A. manufactures custom forged components in carbon, alloy, stainless and special steels, engineered for demanding industrial applications.</p>
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
                    <p class="forging-note">Custom sizes and special forgings available to customer drawings and specifications.</p>
                    <h3>Explore Custom Forgings</h3>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/custom-forging.php">Explore Custom Forgings</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="materials-section" id="materials">
    <div class="container">
         <h2>Material Grades</h2>
        <div class="row g-5 align-items-start">
            <div class="col-lg-5">
               
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
        <h2>Industries We Serve</h2>
        <p class="section-kicker industries-kicker">Forged Solutions for Critical Industries</p>
        <p class="industries-lead">STELVERA FORGE S.p.A. delivers precision-engineered flanges and forged components for demanding applications across global industries.</p>
        <ul class="industries-list">
            <?php
            $homeIndustries = [
                ['label' => 'Oil & Gas', 'slug' => 'oil-gas'],
                ['label' => 'Petrochemical & Chemical', 'slug' => 'chemical-petrochemical'],
                ['label' => 'LNG', 'slug' => 'lng'],
                ['label' => 'Power Generation', 'slug' => 'power-generation'],
                ['label' => 'Renewable Energy', 'slug' => 'renewable-fuels'],
                ['label' => 'Marine & Shipbuilding', 'slug' => 'marine-shipbuilding'],
                ['label' => 'Nuclear', 'slug' => 'nuclear'],
                ['label' => 'Mining', 'slug' => 'mining'],
                ['label' => 'Pulp & Paper', 'slug' => 'pulp-paper'],
                ['label' => 'Pharmaceutical', 'slug' => 'pharmaceuticals'],
                ['label' => 'Water Treatment', 'slug' => ''],
                ['label' => 'Industrial Engineering', 'slug' => ''],
            ];
            foreach ($homeIndustries as $item):
                $industryHref = $item['slug'] !== ''
                    ? wf_industry_url($item['slug'], $baseUrl)
                    : wf_industries_listing_url($baseUrl);
            ?>
            <li><a href="<?php echo $industryHref; ?>"><?php echo htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <a class="btn-view-products" href="<?php echo wf_industries_listing_url($baseUrl); ?>">Explore Industries</a>
    </div>
</section>

<section class="quality-section" id="quality">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="quality-media">
                    <span class="quality-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-testing.jpg" alt="Quality testing at STELVERA FORGE S.p.A.">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="quality-copy">
                    <h2>Quality Without Compromise</h2>
                    <p>Quality is integrated into every stage of manufacturing at STELVERA FORGE S.p.A. Our controlled processes, inspection procedures and material traceability ensure consistent compliance with applicable international standards and customer specifications.</p>
                    <p class="section-spec-line">ISO &middot; PED &middot; EN &middot; ASME &middot; ASTM</p>
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
                <h2>Technical Resources</h2>
                <p>Access essential technical information to simplify material selection, specifications and project requirements.</p>
                <p class="section-spec-line">Standards &middot; Materials &middot; Dimensions &middot; Pressure Ratings &middot; Technical Data</p>
            </div>
            <div class="col-lg-6">
                <div class="resource-links">
                    <a href="<?php echo $baseUrl; ?>/quality-certifications.php">Standards <span aria-hidden="true">&rarr;</span></a>
                    <a href="#materials">Materials <span aria-hidden="true">&rarr;</span></a>
                    <a href="<?php echo $baseUrl; ?>/forging-101.php">Dimensions <span aria-hidden="true">&rarr;</span></a>
                    <a href="<?php echo $baseUrl; ?>/forging-101.php">Pressure Ratings <span aria-hidden="true">&rarr;</span></a>
                    <a href="<?php echo $baseUrl; ?>/forging-101.php">Technical Data <span aria-hidden="true">&rarr;</span></a>
                 </div>
                <a class="btn-view-products resource-explore-btn" href="<?php echo $baseUrl; ?>/forging-101.php">Explore Resources</a>
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
                    <p>Once you reach out to STELVERA FORGE S.p.A., you’ll get the products you need in a hurry. Quick quotes and dependable delivery are part of our promise to you.</p>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
