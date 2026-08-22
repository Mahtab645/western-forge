<?php
$pageTitle = 'Custom Forging Manufacturer | STELVERA FORGE';
$pageDescription = 'Custom forged blocks, rings, bars, discs and engineered components manufactured in a wide range of materials to customer specifications.';
include __DIR__ . '/header.php';
?>

<section class="page-hero custom-forging-hero">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1>Custom Forging Solutions</h1>
            <p>Forged Solutions. Engineered Around Your Requirements.</p>
            <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
        </div>
    </div>
</section>

<section class="about-who custom-offer">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/custom-offer.png" alt="Custom forged components from STELVERA FORGE S.p.A.">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>What We Offer</h2>
                    <p class="section-kicker">Forged Solutions. Engineered Around Your Requirements.</p>
                    <p>STELVERA FORGE S.p.A. supports fabricators, distributors and industrial end-users with custom forgings, rough forgings, special components and project-specific solutions.</p>
                    <p>Our capabilities include rings, blocks, bars, discs, special flanges and engineered forgings, manufactured to customer drawings, dimensional requirements and applicable specifications.</p>
                    <p>With a focus on material integrity, precision and quality control, we deliver components engineered for demanding pressure, temperature and mechanical service conditions.</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center g-5 custom-emergency-row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Flexible Production &amp; Project Supply</h2>
                    <p class="section-kicker">From Urgent Requirements to Long-Term Contracts.</p>
                    <p>STELVERA FORGE S.p.A. provides flexible manufacturing support for urgent requirements, project-based orders and large-volume contracts.</p>
                    <p>Our responsive production approach enables us to support critical delivery schedules while maintaining consistent quality, traceability and technical compliance.</p>
                    <p>From a single custom forging to ongoing project supply, we deliver reliable solutions tailored to your requirements.</p>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/custom-emergency.png" alt="Custom forged discs manufactured by STELVERA FORGE S.p.A.">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-apart custom-apps">
    <div class="container">
        <div class="about-apart-intro">
            <h2>Specialized Applications</h2>
            <p class="section-kicker">Engineered for Demanding Environments.</p>
            <p>STELVERA FORGE S.p.A. manufactures specialized forged components for applications requiring strength, precision and reliable performance.</p>
        </div>
        <ul class="trust-list">
            <li><strong>Oil &amp; Gas</strong> Forgings for high-pressure and critical-service applications.</li>
            <li><strong>Petrochemical &amp; Chemical</strong> Components for demanding process environments.</li>
            <li><strong>Power &amp; Energy</strong> Engineered forgings for pressure and temperature-intensive service.</li>
            <li><strong>Marine &amp; Shipbuilding</strong> Durable forged components for marine applications.</li>
            <li><strong>Industrial Engineering</strong> Custom parts manufactured to drawings and project specifications.</li>
        </ul>
        <p class="custom-apps-note">Special materials, dimensions and configurations are available on request.</p>
    </div>
</section>

<section class="custom-shapes">
    <div class="container">
        <?php
        $shapeMaterials = [
            ['label' => 'Hastelloy', 'detail' => 'C276, B3, C22, C-2000, G-30, 230'],
            ['label' => 'Alloy 20', 'detail' => '200/201, 400, 600, 601, 625, 800HT, 825'],
            ['label' => 'AL6XN (N08367)', 'detail' => '904L, 310, 317L, 321, 347'],
            ['label' => 'Duplex Stainless', 'detail' => '2205, 2507, 255'],
            ['label' => 'Titanium', 'detail' => 'Grades 2, 7, and 12'],
            ['label' => 'Aluminum Grades', 'detail' => '1100, 3003, 6061 and 5083'],
            ['label' => 'Chromes-Moly', 'detail' => 'F-5, F-9, F-11 and F-22'],
        ];
        $shapeCerts = 'ISO, PED, ASTM, ASME, EN and customer/project specifications';
        $shapes = [
            ['id' => 'rings', 'title' => 'Rings', 'tab' => 'Custom Rings', 'file' => 'icon-rings.png', 'size' => 'Up to 75″ in Diameter'],
            ['id' => 'discs', 'title' => 'Discs', 'tab' => 'Custom Discs', 'file' => 'icon-discs.png', 'size' => 'Up to 50″ in Diameter'],
            ['id' => 'bars', 'title' => 'Bars', 'tab' => 'Custom Bars', 'file' => 'icon-bars.png', 'size' => 'Up to 48″ in Diameter'],
            ['id' => 'blocks', 'title' => 'Blocks', 'tab' => 'Custom Blocks', 'file' => 'icon-blocks.png', 'size' => 'Up to 2,500 lbs', 'extra' => ['label' => 'Copper Nickel', 'detail' => '70/30, 90/10']],
        ];
        foreach ($shapes as $shape):
            $materials = $shapeMaterials;
            if (!empty($shape['extra'])) {
                array_splice($materials, -1, 0, [$shape['extra']]);
            }
        ?>
        <div class="custom-shape-panel" id="custom-<?php echo htmlspecialchars($shape['id'], ENT_QUOTES, 'UTF-8'); ?>">
            <div class="row custom-shapes-row">
                <div class="col-lg-5">
                    <div class="custom-shape-intro">
                        <h2><?php echo htmlspecialchars($shape['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <img src="<?php echo $baseUrl; ?>/images/<?php echo htmlspecialchars($shape['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($shape['title'], ENT_QUOTES, 'UTF-8'); ?>">
                        <p class="custom-shape-size"><?php echo htmlspecialchars($shape['size'], ENT_QUOTES, 'UTF-8'); ?></p>
                        <p class="custom-shape-note">Sizes are dependent on alloy selection and thickness</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <p class="custom-shape-tab"><span><?php echo htmlspecialchars($shape['tab'], ENT_QUOTES, 'UTF-8'); ?></span></p>
                    <div class="custom-shape-box">
                        <div class="custom-shape-row">
                            <h3>Primary Materials Inventoried</h3>
                            <div class="custom-shape-body">
                                <ul>
                                    <?php foreach ($materials as $mat): ?>
                                    <li><strong><?php echo htmlspecialchars($mat['label'], ENT_QUOTES, 'UTF-8'); ?></strong> – <?php echo htmlspecialchars($mat['detail'], ENT_QUOTES, 'UTF-8'); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                                <p><em>Other material available upon request</em></p>
                            </div>
                        </div>
                        <div class="custom-shape-row">
                            <h3><a href="<?php echo $baseUrl; ?>/quality-certifications.php">Compliance and Certifications</a></h3>
                            <div class="custom-shape-body">
                                <p><?php echo htmlspecialchars($shapeCerts, ENT_QUOTES, 'UTF-8'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="about-journey custom-materials">
    <div class="row g-0 align-items-stretch">
        <div class="col-lg-6 d-flex">
            <div class="about-journey-copy">
                <h2>Materials &amp; Quality Standards</h2>
                <p class="section-kicker">Material Expertise. Controlled Quality.</p>
                <p>STELVERA FORGE S.p.A. manufactures forged components in a broad range of carbon steels, alloy steels, stainless steels, duplex, super duplex, nickel alloys and special grades.</p>
                <p>Our manufacturing and inspection processes are designed to meet applicable ASTM, ASME, EN, ISO, PED and customer-specific requirements, with a strong focus on material traceability and documented quality.</p>
                <p>From material verification to final inspection, every stage is carefully controlled to ensure consistency, dimensional accuracy and reliable performance.</p>
                <a class="btn-view-products" href="<?php echo $baseUrl; ?>/quality-certifications.php">View Materials &amp; Quality Standards</a>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-journey-media">
                <img src="<?php echo $baseUrl; ?>/images/custom-materials.jpg" alt="Forging operations at STELVERA FORGE S.p.A.">
            </div>
        </div>
    </div>
</section>

<section class="materials-section custom-grades">
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

<section class="about-who custom-why">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/custom-why.jpg" alt="STELVERA FORGE S.p.A. manufacturing team">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Why Work With Us?</h2>
                    <p class="section-kicker">A Reliable Partner for Forged Solutions.</p>
                    <p>STELVERA FORGE S.p.A. combines engineering expertise, manufacturing flexibility and controlled quality to support demanding industrial requirements.</p>
                    <ul class="trust-list">
                        <li><strong>Forging Expertise</strong> Standard and custom-engineered forged components.</li>
                        <li><strong>Flexible Production</strong> From individual special parts to large-volume project orders.</li>
                        <li><strong>Material Capability</strong> Carbon, alloy, stainless, duplex and special alloy grades.</li>
                        <li><strong>Quality &amp; Traceability</strong> Controlled manufacturing, inspection and documented material traceability.</li>
                        <li><strong>Responsive Service</strong> Efficient support from enquiry through production and delivery.</li>
                        <li><strong>Global Industries</strong> Solutions for oil &amp; gas, petrochemical, power, marine and industrial applications.</li>
                    </ul>
                    <p class="section-tagline">Precision. Flexibility. Reliability.</p>
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
                    <h2>Start Your Project</h2>
                    <p>If you’re ready to turn your next custom forging project into a reality, request a quote or speak directly to our team to discuss your order.</p>
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
