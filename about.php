<?php
$pageTitle = 'About STELVERA FORGE | European Forging Manufacturer';
$pageDescription = 'Discover STELVERA FORGE S.p.A., a manufacturer focused on precision forging, engineered flanges, quality and reliable industrial solutions.';
include __DIR__ . '/header.php';
?>

<section class="page-hero">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1>About STELVERA FORGE</h1>
            <p>European Engineering. Global Perspective.</p>
            <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
        </div>
    </div>
</section>

<section class="about-who">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/about-who-we-are.png" alt="STELVERA FORGE S.p.A. manufacturing team">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Who We Are</h2>
                    <p class="section-kicker">European Engineering. Global Perspective.</p>
                    <p>STELVERA FORGE S.p.A. is a manufacturer of forged flanges and custom-engineered components, serving demanding industrial applications across global markets.</p>
                    <p>Our expertise combines forging, precision machining, material knowledge and controlled quality processes to manufacture products in accordance with international standards and customer specifications.</p>
                    <p>From standard flanges to complex custom forgings, we focus on quality, traceability, technical precision and reliable service at every stage.</p>
                    <p class="section-tagline">STELVERA FORGE S.p.A. â€” Strength in Every Connection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-apart">
    <div class="container">
        <div class="about-apart-intro">
            <h2>What Sets Us Apart</h2>
            <p class="section-kicker">Precision. Flexibility. Reliability.</p>
            <p>STELVERA FORGE S.p.A. is built around the requirements of modern industry, combining technical expertise, responsive manufacturing and controlled quality.</p>
        </div>

        <div class="row g-4">
            <?php
            $apartCards = [
                [
                    'title' => 'Responsive Service',
                    'text' => 'Efficient quotation and production support for time-critical requirements.',
                    'icon' => '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M13 2 4 14h7l-1 8 10-13h-7l0-7Z" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
                [
                    'title' => 'Industry Expertise',
                    'text' => 'Solutions for oil & gas, petrochemical, LNG, power, marine and industrial applications.',
                    'icon' => '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M3 21h18M5 21V10l4-2v13M13 21V8l6 3v10M9 13h.01M9 16h.01M16 14h.01M16 17h.01" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
                [
                    'title' => 'Custom Capability',
                    'text' => 'Standard and special forgings manufactured to drawings and project specifications.',
                    'icon' => '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 3H7a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8l-5-5Z" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M14 3v5h5M8 13h8M8 17h5" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
                [
                    'title' => 'Quality Focus',
                    'text' => 'Controlled processes, inspection and material traceability throughout production.',
                    'icon' => '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 3 4.5 6.5v5.2c0 4.4 3.1 7.7 7.5 9.3 4.4-1.6 7.5-4.9 7.5-9.3V6.5L12 3Z" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/><path d="m8.5 12 2.3 2.3 4.7-4.8" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
                [
                    'title' => 'Reliable Partnership',
                    'text' => 'Professional support from initial enquiry through final delivery.',
                    'icon' => '<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M16 21v-2a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2M9.5 11a4 4 0 1 0 0-8 4 4 0 0 0 0 8ZM20 8v6M17 11h6" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                ],
            ];
            foreach ($apartCards as $card):
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="about-apart-card">
                    <span class="about-apart-icon" aria-hidden="true"><?php echo $card['icon']; ?></span>
                    <h3><?php echo htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <p><?php echo htmlspecialchars($card['text'], ENT_QUOTES, 'UTF-8'); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <p class="section-tagline about-apart-tagline">Engineered to Perform. Built on Quality.</p>
    </div>
</section>

<section class="about-journey">
    <div class="row g-0 align-items-stretch">
        <div class="col-lg-6 d-flex">
            <div class="about-journey-copy">
                <h2>Our Journey</h2>
                <p class="section-kicker">Built on Engineering. Focused on the Future.</p>
                <p>STELVERA FORGE S.p.A. was established with a clear vision: to deliver precision-forged components with consistent quality, technical reliability and responsive service.</p>
                <p>From our foundation, we have focused on developing capabilities in forging, machining, material expertise and quality control to meet the evolving requirements of modern industry.</p>
                <p>Today, STELVERA serves customers across oil &amp; gas, petrochemical, LNG, power, marine and industrial sectors, providing both standard products and custom-engineered forging solutions.</p>
                <p>As we continue to grow, our direction remains clear â€” invest in capability, strengthen quality and build long-term partnerships across global markets.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-journey-media">
                <img src="<?php echo $baseUrl; ?>/images/about-journey.png" alt="STELVERA FORGE S.p.A. manufacturing facility">
            </div>
        </div>
    </div>
</section>

<section class="about-community">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>People &amp; Commitment</h2>
                    <p class="section-kicker">Strong Relationships. Shared Responsibility.</p>
                    <p>At STELVERA FORGE S.p.A., our strength comes from the people, expertise and partnerships behind every product we manufacture.</p>
                    <p>We are committed to developing technical knowledge, maintaining a strong quality culture and creating a responsible working environment where precision, safety and continuous improvement are part of everyday operations.</p>
                    <p>Beyond manufacturing, we believe in building long-term relationships with customers, suppliers and industry partners based on trust, transparency and dependable service.</p>
                    <p class="section-tagline">Committed to People. Dedicated to Quality.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/about-community.png" alt="STELVERA FORGE S.p.A. team">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="cta-box">
                    <h2>Partner With STELVERA</h2>
                    <p>If your organization requires reliable forged flanges or custom parts, STELVERA FORGE S.p.A. is your ideal partner, no matter how demanding your requirements. Request a quote or contact our team directly to move forward with your project.</p>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
