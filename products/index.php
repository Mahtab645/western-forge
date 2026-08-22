<?php
$pageTitle = 'Forged Flanges & Products | STELVERA FORGE';
$pageDescription = 'Explore forged flanges and engineered components manufactured for demanding oil & gas, petrochemical, power, marine and industrial applications.';
$isProductsListing = true;
include dirname(__DIR__) . '/header.php';
$h = static function ($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
};
?>

<section class="products-hero">
    <div class="products-hero-overlay"></div>
    <div class="container">
        <div class="row align-items-end g-4 products-hero-row">
            <div class="col-lg-6">
                <div class="products-hero-copy">
                    <h1>Quality Forged Products</h1>
                    <p>Engineered Quality. Reliable Performance.</p>
                    <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="products-hero-media">
                    <img src="<?php echo $baseUrl; ?>/images/products-hero-flange.png" alt="Forged industrial flange">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="products-listing">
    <div class="container">
        <div class="products-listing-intro">
            <h2>Quality Forged Products</h2>
            <p class="section-kicker">Engineered Quality. Reliable Performance.</p>
            <p>STELVERA FORGE S.p.A. manufactures high-integrity forged flanges and custom components for demanding applications across the oil &amp; gas, petrochemical, LNG, power, marine and process industries.</p>
            <p>Our manufacturing approach combines carefully selected materials, controlled forging, precision machining and rigorous inspection to ensure consistent quality and full material traceability.</p>
            <p>With capabilities across carbon, alloy, stainless, duplex and special steels, we deliver standard and custom-engineered products in accordance with applicable ASTM, ASME, EN and customer specifications.</p>
            <p class="section-tagline">Precision Forged. Quality Assured.</p>
        </div>

        <div class="row g-4 product-card-grid">
            <?php
            $listingSlugs = [
                'weld-neck-flanges',
                'slip-on-flanges',
                'blind-flanges',
                'socket-weld-flanges',
                'lap-joint-flanges',
                'threaded-flanges',
                'stub-end-flanges',
                'studding-outlet-flanges',
                'long-weld-neck-flanges',
                'orifice-set-flanges',
                'other-flanges',
            ];
            $allProducts = wf_products();
            $listingLabels = [
                'orifice-set-flanges' => 'Orifice Sets',
            ];
            foreach ($listingSlugs as $slug):
                $item = $allProducts[$slug] ?? null;
                if (!$item) {
                    continue;
                }
                $cardLabel = $listingLabels[$slug] ?? $item['heading'];
            ?>
            <div class="col-md-6 col-lg-4">
                <a class="product-card" href="<?php echo wf_product_url($item['slug'], $baseUrl); ?>">
                    <span class="product-card-arrow" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17 17 7M9 7h8v8" stroke="#e0393e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div class="product-card-inner">
                        <img src="<?php echo $h(wf_product_image($item['image'], $baseUrl)); ?>" alt="<?php echo $h($cardLabel); ?>">
                        <h4><?php echo $h($cardLabel); ?></h4>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="trust-section products-standout">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <h2>Why Our Products Stand Out</h2>
                <p class="section-kicker">Precision, Quality &amp; Engineering You Can Rely On</p>
                <p class="trust-lead">STELVERA FORGE S.p.A. combines modern manufacturing expertise with rigorous quality control to deliver forged products for demanding industrial applications.</p>
                <h3>What sets us apart:</h3>
                <ul class="trust-list">
                    <li><strong>Precision Manufacturing</strong> Engineered for dimensional accuracy and consistent performance.</li>
                    <li><strong>Material Expertise</strong> Carbon, alloy, stainless, duplex and special steel grades.</li>
                    <li><strong>Quality Control</strong> Controlled inspection and complete material traceability.</li>
                    <li><strong>International Standards</strong> Manufacturing in accordance with applicable ASTM, ASME, EN and project specifications.</li>
                    <li><strong>Custom Capability</strong> Special flanges and forgings manufactured to customer drawings.</li>
                    <li><strong>Reliable Support</strong> Responsive service from enquiry through production and delivery.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-forge.jpg" alt="Forging production at STELVERA FORGE S.p.A.">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="split-cta">
    <div class="split-cta-media">
        <img src="<?php echo $baseUrl; ?>/images/qc-forging.jpg" alt="Custom forging press working hot metal">
    </div>
    <div class="split-cta-copy">
        <h2>Need Custom Forging?</h2>
        <p class="section-kicker">Your Design. Our Forging Expertise.</p>
        <p>STELVERA FORGE S.p.A. manufactures custom forged components in a wide range of materials, shapes and dimensions, engineered to customer drawings and project specifications.</p>
        <p>From special flanges to rings, blocks, discs and engineered forgings, we deliver solutions for demanding industrial applications.</p>
        <a class="btn-view-products" href="<?php echo $baseUrl; ?>/custom-forging.php">Explore Custom Forging</a>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="cta-box">
                    <h2>Request a Quote</h2>
                    <p>If you’re ready to launch your next project with forged flanges or custom products from STELVERA FORGE S.p.A., request a quote today for a fast response and reliable delivery.</p>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/footer.php'; ?>
</body>
</html>
