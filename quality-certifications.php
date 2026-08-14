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

<section class="qc-inspections">
    <div class="container">
        <h2>Quality Control Inspections</h2>
        <div class="row qc-inspections-grid">
            <?php
            $qcSteps = [
                ['title' => 'Raw Material', 'sub' => '100% Receiving Inspection', 'file' => 'qc-raw-material.jpg'],
                ['title' => 'Sawing', 'sub' => 'In-process QC Inspection', 'file' => 'qc-sawing.jpg'],
                ['title' => 'Forging', 'sub' => '100% In-process QC Inspection', 'file' => 'qc-forging.jpg'],
                ['title' => 'Heat Treated (if required)', 'sub' => '100% In-process QC Inspection', 'file' => 'qc-heat.jpg'],
                ['title' => 'Machining', 'sub' => '100% In-process QC Inspection', 'file' => 'qc-machining.jpg'],
                ['title' => 'Marking', 'sub' => 'First Article Inspection', 'file' => 'qc-marking.jpg'],
                ['title' => 'Final Inspection', 'sub' => '100% Inspection', 'file' => 'qc-final.jpg'],
                ['title' => 'Shipping', 'sub' => 'Job Complete', 'file' => 'qc-shipping.jpg'],
            ];
            foreach ($qcSteps as $step):
            ?>
            <div class="col-lg-6">
                <div class="qc-item">
                    <img src="<?php echo $baseUrl; ?>/images/<?php echo htmlspecialchars($step['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?>">
                    <div class="qc-item-copy">
                        <h3><?php echo htmlspecialchars($step['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo htmlspecialchars($step['sub'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="qc-testing">
    <div class="qc-testing-overlay"></div>
    <div class="container">
        <div class="qc-testing-intro">
            <h2>Testing</h2>
            <p>Western Forge &amp; Flange can accomplish any type of testing as per specification and/or customer specific requirements. Western uses ISO 9001 &amp; ISO 17025 accredited and approved laboratories, whom we audit every year. Our Metallurgist analyzes the results to ensure that our parts meet or exceed all requirements.</p>
        </div>
        <div class="row g-5">
            <div class="col-lg-6">
                <h3>Mechanical Testing</h3>
                <ul class="qc-testing-list">
                    <li>Tensile Testing</li>
                    <li>Hardness Testing</li>
                    <li>Brinell Hardness (HBW) || Rockwell Hardness (HR) || Vickers Micro-hardness (HV)</li>
                    <li>Impact Testing</li>
                    <li>Charpy Impact Testing || Izod Impact Testing</li>
                    <li>Metallography Analysis</li>
                </ul>
                <h3>Metallography Analysis</h3>
                <ul class="qc-testing-list">
                    <li>Microstructure Examination</li>
                    <li>Macrostructure Examination</li>
                    <li>Grain Size Determination</li>
                    <li>Volume Fraction Point Count</li>
                </ul>
                <h3>Non-Destructive Testing</h3>
                <ul class="qc-testing-list">
                    <li>Ultrasonic Testing</li>
                    <li>Liquid Penetrant Testing</li>
                    <li>Magnetic Particle Testing</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <h3>Corrosion Testing</h3>
                <ul class="qc-testing-list">
                    <li>Intergranular Attack in Austenitic Stainless Steels per ASTM A262 – Practice A, B, C, E, F</li>
                    <li>Intergranular Corrosion in Nickel-Rich, Chromium Alloys per ASTM G28 Method A</li>
                    <li>Pitting and Crevice Corrosion Resistance of Stainless Steels in Ferric Chloride Solution per ASTM G48 Method A, B, D</li>
                    <li>Detrimental Intermetallic Phase in Duplex Stainless Steels per ASTM A923 Method A, C</li>
                </ul>
                <h3>Chemistry Analysis</h3>
                <ul class="qc-testing-list">
                    <li>Optical Emission Spectroscopy (OES)</li>
                    <li>Combustion (LECO) Analysis for Carbon, Sulfur, Nitrogen, Oxygen, and Hydrogen</li>
                    <li>X-Ray Fluorescence (XRF) for Positive Material Identification (PMI)</li>
                </ul>
                <div class="qc-testing-cta">
                    <a class="btn-hero btn-hero-primary btn-hero-ne" href="<?php echo $baseUrl; ?>/index.php#industries">View Industries</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="conflict-minerals">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/conflict-minerals.jpg" alt="Western Forge &amp; Flange manufacturing floor">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Conflict Minerals Policy</h2>
                    <p>Western Forge &amp; Flange is committed to ensuring the safety and protection of people worldwide. We support ending the violence and human rights violations in the mining of certain minerals from a location described as the “Conflict Region.”</p>
                    <p>The definition of “conflict minerals” refers to gold, as well as tin, tantalum, and tungsten, regardless of where they are sourced, processed or sold. The U.S. Secretary of State may designate other minerals in the future. The U.S. Securities and Exchange Commission adopted final rules to implement reporting and disclosure requirements related to “conflict minerals,” as directed by the Dodd-Frank Wall Street Reform and Consumer Protection Act of 2010. We support these requirements to further the humanitarian goal of ending violent conflict in designated regions, which has been partially financed by the exploitation and trade of “conflict minerals”.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-5 conflict-minerals-row">
            <div class="col-lg-6">
                <div class="about-who-copy">
                    <h3>Our Commitment</h3>
                    <ol class="conflict-minerals-list">
                        <li>Support the aims and objectives of the U.S. legislation on the supply of “conflict minerals”.</li>
                        <li>Do not knowingly procure specified materials that originate in the “conflict region”.</li>
                        <li>Ensure compliance with these requirements and ask our suppliers to undertake reasonable due diligence with their supply chains to assure that specified metals are not being sourced from conflict regions.</li>
                        <li>If we discover the use of these minerals in products we sell to be “non-conflict free”, in any material, parts or components we procure, we will take appropriate actions to transition products to be “conflict free”.</li>
                    </ol>
                    <p>If you need a copy of Western CMRT, please email: <a href="mailto:quality@western-forge.com">quality@western-forge.com</a></p>
                    <p>Sincerely,<br>Director of Quality</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="conflict-minerals-logo">
                    <img src="<?php echo $baseUrl; ?>/images/rmi-logo.jpg" alt="Responsible Minerals Initiative">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
