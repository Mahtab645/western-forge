<?php
$pageTitle = 'Quality and Certifications | Western Forge & Flange';
include __DIR__ . '/header.php';
?>

<section class="page-hero quality-hero">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1>Quality Management and Certifications</h1>
            <p>Certified forging excellence, backed by testing, safety, and traceability.</p>
            <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/contact.php">Request Document</a>
        </div>
    </div>
</section>

<section class="about-who quality-intro">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Quality</h2>
                    <p>With over 75 years of forging and manufacturing experience, Western Forge &amp; Flange has developed one of the most efficient Quality management system in today’s forge and flange industry. Our Quality team consists of a Quality Director, Metallurgist, Quality Assurance Technicians, Quality Control Inspectors, Nondestructive Testing inspectors, and final Inspectors, who work day in and day out to ensure the integrity and quality of our products. Our manufacturing processes are designed around the operational excellence of our people, pragmatic systems and preventative and continual improvement.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-forge.jpg" alt="Hot forging at Western Forge &amp; Flange">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quality-standards">
    <div class="container">
        <h2>Western Forge &amp; Flanges’ Quality Management system complies with the following standards:</h2>
        <ul class="quality-standards-list">
            <li>ISO 9001:2015 Standard</li>
            <li>PED 2014/68/EU, Annex I, Section 4.3</li>
            <li>PER Schedule 1A and Schedule 2 Part 4-31 (6) (7) (8)</li>
            <li>NCA3800/4200 ASME SECTION-III (Nuclear)</li>
            <li>NQA-1 (Nuclear)</li>
            <li>CSA N285.0 (Canadian Nuclear)</li>
            <li>CSA B51 (Canadian Non-Nuclear)</li>
            <li>MIL-I-45208A (Military Standard)</li>
            <li>10CFR50 APP-B (Code for Federal Regulation – Nuclear)</li>
            <li>10CFR21 (NRC Regulation)</li>
            <li>DFARS regulatory and statutory requirements</li>
            <li>ITAR</li>
            <li>CFSI</li>
        </ul>
        <div class="quality-standards-cta">
            <a class="btn-hero btn-hero-primary" href="#certificates">View Certifications</a>
        </div>
    </div>
</section>

<section class="quality-certs" id="certificates">
    <div class="container">
        <h2>Compliance Certificates</h2>
        <div class="row quality-certs-grid">
            <?php
            $certificates = [
                ['title' => 'ISO 9001 2015', 'file' => 'ISO-9001_2015.pdf'],
                ['title' => 'PED Certificate', 'file' => 'PED-Certificate.pdf'],
                ['title' => 'PER Certificate', 'file' => 'PER-Certificate.pdf'],
                ['title' => 'TSSA Certificate (Nuclear)', 'file' => 'TSSA-Certificate-Nuclear.pdf'],
                ['title' => 'TSSA Certificate (Non-Nuclear)', 'file' => 'TSSA-Certificate-Non-Nuclear.pdf'],
            ];
            $certIcon = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="9" r="5.25" stroke="#fff" stroke-width="1.8"/><circle cx="12" cy="9" r="2.4" stroke="#fff" stroke-width="1.8"/><path d="M9.2 13.8 7.5 21l4.5-2.4L16.5 21l-1.7-7.2" stroke="#fff" stroke-width="1.8" stroke-linejoin="round"/></svg>';
            foreach ($certificates as $cert):
            ?>
            <div class="col-md-6 col-lg-4">
                <div class="quality-cert-card">
                    <span class="quality-cert-icon"><?php echo $certIcon; ?></span>
                    <h3><?php echo htmlspecialchars($cert['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                    <a class="quality-cert-download" href="<?php echo $baseUrl; ?>/certificates/<?php echo htmlspecialchars($cert['file'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener noreferrer">Download</a>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="col-md-6 col-lg-4">
                <div class="quality-cert-card quality-cert-card-cta">
                    <a class="btn-hero btn-hero-primary btn-hero-ne" href="<?php echo $baseUrl; ?>/index.php#products">View Products</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-who quality-intro">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Quality Policy</h2>
                    <p>Western Forge will maintain its distinction in providing world class “Quality Forging Solutions” with its unique capabilities and quality standards maintained for decades.</p>
                    <p>Western Forge regards it as its duty to manufacture products in the most economically viable way that meets or exceeds the requirement and expectations of our customers. Western Forge’s management is committed to put constant effort to improve the organization, the quality of the products and the working environment.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-policy.jpg" alt="Quality inspection of a forged flange">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
