<?php
$pageTitle = 'Quality & Certifications | STELVERA FORGE';
$pageDescription = 'Discover STELVERA FORGE quality standards, inspection processes, material traceability and certifications for forged industrial components.';
include __DIR__ . '/header.php';
?>

<section class="page-hero quality-hero">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1>Quality</h1>
            <p>Quality Built Into Every Process.</p>
            <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/contact.php">Request a Quote</a>
        </div>
    </div>
</section>

<section class="about-who quality-intro">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Quality</h2>
                    <p class="section-kicker">Quality Built Into Every Process.</p>
                    <p>At STELVERA FORGE S.p.A., quality is integrated throughout the manufacturing process — from material verification and forging to machining, testing and final inspection.</p>
                    <p>Our quality system focuses on material integrity, dimensional accuracy, full traceability and consistent compliance with applicable international standards and customer specifications.</p>
                    <p>Through controlled processes, qualified inspection and continuous improvement, we ensure every forged component meets the required level of performance, reliability and quality.</p>
                    <p class="section-tagline">Precision Controlled. Quality Assured.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/quality-forge.jpg" alt="Quality manufacturing at STELVERA FORGE S.p.A.">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="quality-standards">
    <div class="container">
        <h2>Quality Standards</h2>
        <p class="quality-standards-lead">STELVERA FORGE S.p.A. operates under an ISO-certified Quality Management System focused on consistent manufacturing, traceability and continual improvement.</p>
        <p class="quality-standards-lead">Our quality approach includes:</p>
        <ul class="quality-standards-list">
            <li>ISO Quality Management System</li>
            <li>Material Identification &amp; Traceability</li>
            <li>Incoming Material Inspection</li>
            <li>Dimensional &amp; Visual Inspection</li>
            <li>Mechanical &amp; Chemical Verification</li>
            <li>Non-Destructive Testing, where required</li>
            <li>Heat Treatment Control</li>
            <li>Inspection &amp; Test Documentation</li>
            <li>Calibration of Measuring Equipment</li>
            <li>Final Inspection &amp; Release</li>
            <li>Customer-Specific Quality Requirements</li>
            <li>Continuous Process Improvement</li>
        </ul>
        <p class="quality-standards-lead">Products can be manufactured and inspected in accordance with applicable ASTM, ASME, EN and customer/project specifications.</p>
        <p class="section-tagline quality-standards-tagline">Controlled Processes. Documented Quality. Reliable Performance.</p>
    </div>
</section>

<section class="about-who quality-intro">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Quality Policy</h2>
                    <p class="section-kicker">Committed to Quality. Driven by Continuous Improvement.</p>
                    <p>STELVERA FORGE S.p.A. is committed to manufacturing reliable, high-quality forged products that consistently meet customer requirements, applicable standards and agreed specifications.</p>
                    <p>Our Quality Policy is built around:</p>
                    <ul class="trust-list">
                        <li>Consistent product quality and manufacturing control</li>
                        <li>Customer satisfaction and reliable service</li>
                        <li>Compliance with applicable requirements</li>
                        <li>Continuous improvement of processes and performance</li>
                        <li>Development of our people and manufacturing capabilities</li>
                        <li>Efficient and responsible use of resources</li>
                    </ul>
                    <p>We continuously strengthen our quality systems, manufacturing processes and working practices to deliver dependable forged solutions for demanding industrial applications.</p>
                    <p class="section-tagline">Quality in Every Process. Confidence in Every Product.</p>
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
            <p>STELVERA FORGE S.p.A. provides testing in accordance with applicable material
specifications, international standards and customer-specific requirements.
Testing may include chemical analysis, mechanical testing, hardness testing, impact
testing, PMI and non-destructive examination (NDE), as required by the product or
project specification.</p>
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
                    <a class="btn-hero btn-hero-primary btn-hero-ne" href="<?php echo wf_industries_listing_url($baseUrl); ?>">View Industries</a>
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
                    <img src="<?php echo $baseUrl; ?>/images/conflict-minerals.jpg" alt="Responsible manufacturing at STELVERA FORGE S.p.A.">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>Conflict Minerals Policy</h2>
                    <p class="section-kicker">Responsible Sourcing. Ethical Supply Chain.</p>
                    <p>STELVERA FORGE S.p.A. is committed to responsible and ethical sourcing practices throughout its supply chain and supports international efforts to prevent the trade of minerals associated with conflict, human rights violations and unlawful practices.</p>
                    <p>We recognize tin, tantalum, tungsten and gold (3TG) as conflict minerals and encourage our suppliers to maintain responsible sourcing practices and appropriate supply-chain transparency.</p>
                    <p>Where applicable, STELVERA FORGE S.p.A. works with its suppliers to obtain relevant material and sourcing information in support of customer and regulatory requirements.</p>
                    <p>Our objective is to promote a supply chain founded on integrity, transparency and responsible business practices.</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center g-5 conflict-minerals-row">
            <div class="col-lg-6">
                <div class="about-who-copy">
                    <h3>Our Commitment</h3>
                    <p>STELVERA FORGE S.p.A. is committed to maintaining a responsible, transparent and ethical supply chain.</p>
                    <ol class="conflict-minerals-list">
                        <li>Support internationally recognized principles for the responsible sourcing of tin, tantalum, tungsten and gold (3TG).</li>
                        <li>Avoid knowingly sourcing materials associated with conflict, human rights abuses or unlawful practices.</li>
                        <li>Encourage suppliers to conduct appropriate due diligence within their supply chains and provide relevant sourcing information when required.</li>
                        <li>Review identified sourcing concerns and take appropriate corrective action where necessary.</li>
                        <li>Continuously promote responsible procurement and supply-chain transparency.</li>
                    </ol>
                    <p>Where a sourcing risk is identified, STELVERA FORGE S.p.A. will work with the relevant supplier to evaluate the issue and take appropriate measures in accordance with applicable requirements.</p>
                    <p>For Conflict Minerals Reporting Template (CMRT) information or related documentation, please <a href="<?php echo $baseUrl; ?>/contact.php">contact our Quality Department</a>.</p>
                    <p>Quality Department<br>STELVERA FORGE S.p.A.</p>
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

<section class="philosophy">
    <div class="container">
        <h2>Our Philosophy</h2>
        <div class="row philosophy-grid">
            <?php
            $philosophyCards = [
                [
                    'title' => 'Safety',
                    'lines' => ['Responsible', 'Aware', 'Vigilant'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M5.86 7.00999C5.7925 7.00999 5.7275 7.00249 5.6625 6.98499L5.095 6.82749C5.0025 6.80249 4.8125 6.79749 4.7175 6.81749L4.145 6.94499C3.84 7.01249 3.4875 6.87499 3.31 6.61749L2.975 6.13499C2.92 6.05499 2.7775 5.92999 2.6925 5.88499L2.17 5.61249C1.8925 5.46749 1.7125 5.13749 1.7425 4.82499L1.7975 4.23999C1.8075 4.14499 1.7775 3.95499 1.74 3.86749L1.515 3.32499C1.395 3.03499 1.47 2.66749 1.6925 2.44749L2.11 2.03499C2.1775 1.96749 2.2775 1.80499 2.305 1.71499L2.4825 1.15249C2.575 0.854988 2.87 0.619988 3.1825 0.592488L3.77 0.544988C3.865 0.537488 4.045 0.477488 4.1275 0.424988L4.6225 0.109988C4.8875 -0.0600121 5.2625 -0.0500121 5.52 0.132488L6 0.472488C6.0775 0.527488 6.255 0.597488 6.3525 0.609988L6.935 0.684988C7.245 0.724988 7.5275 0.974988 7.6075 1.27749L7.755 1.84499C7.78 1.93749 7.87 2.10499 7.935 2.17499L8.3325 2.60749C8.545 2.83749 8.6 3.21249 8.465 3.49499L8.2125 4.02499C8.17 4.11249 8.1325 4.29749 8.1375 4.39499L8.1625 4.98249C8.1775 5.29499 7.98 5.61749 7.695 5.74749L7.16 5.99249C7.0725 6.03249 6.925 6.14999 6.865 6.22749L6.5075 6.69249C6.3575 6.88749 6.1025 7.00499 5.855 7.00499L5.86 7.00999ZM4.88 6.05499C5.0275 6.05499 5.1775 6.07249 5.295 6.10499L5.8625 6.25999C5.875 6.25999 5.91 6.24749 5.9225 6.23749L6.275 5.77499C6.41 5.59749 6.6525 5.40499 6.8525 5.31499L7.3875 5.06999C7.3875 5.06999 7.415 5.03249 7.4175 5.01499L7.39 4.43249C7.38 4.20999 7.4425 3.90499 7.5375 3.70749L7.79 3.17749C7.79 3.17749 7.7875 3.12999 7.7775 3.11499L7.3825 2.68499C7.2325 2.52249 7.085 2.24749 7.0275 2.03499L6.88 1.46749C6.88 1.46749 6.8475 1.43249 6.83 1.42749L6.2525 1.35249C6.0325 1.32499 5.7425 1.20999 5.565 1.08249L5.085 0.742488C5.085 0.742488 5.04 0.737488 5.025 0.742488L4.5325 1.05749C4.3475 1.17749 4.0525 1.27499 3.8325 1.29249L3.2475 1.33999C3.2475 1.33999 3.2075 1.36749 3.2 1.38249L3.025 1.93749C2.96 2.14749 2.7975 2.41249 2.64 2.56749L2.22 2.97999C2.22 2.97999 2.2075 3.02499 2.21 3.04249L2.4325 3.57999C2.5175 3.78499 2.5625 4.09249 2.5425 4.30999L2.4875 4.89499C2.4875 4.89499 2.5075 4.93999 2.52 4.94999L3.0375 5.21749C3.2325 5.31749 3.465 5.52499 3.5925 5.70499L3.9275 6.18999C3.9275 6.18999 3.9775 6.21249 3.9875 6.20999L4.555 6.08249C4.65 6.06249 4.7625 6.04999 4.8775 6.04999L4.88 6.05499Z" fill="#F7F7F8"/><path d="M3.055 10.0075C3.04 10.0075 3.0275 10.0075 3.0125 10.0075C2.855 9.99 2.7275 9.8775 2.69 9.725L2.4 8.5425L1.295 9.035C1.15 9.1 0.982503 9.065 0.872503 8.9525C0.762503 8.84 0.735003 8.67 0.805003 8.5275L2.05 5.9725L2.725 6.3L1.93 7.93L2.505 7.675C2.6075 7.63 2.7225 7.6325 2.8225 7.68C2.9225 7.73 2.995 7.82 3.0225 7.9275L3.175 8.5525L3.8775 7.14L4.55 7.475L3.39 9.805C3.325 9.9325 3.195 10.0125 3.055 10.0125V10.0075Z" fill="#F7F7F8"/><path d="M6.945 10.0075C6.805 10.0075 6.6725 9.9275 6.61 9.8L5.45 7.47L6.1225 7.135L6.8275 8.5475L6.98 7.9225C7.0075 7.815 7.08 7.725 7.18 7.675C7.28 7.625 7.395 7.6225 7.4975 7.67L8.0725 7.925L7.2775 6.295L7.9525 5.9675L9.1975 8.5225C9.2675 8.665 9.24 8.835 9.13 8.9475C9.02 9.06 8.8525 9.0925 8.7075 9.03L7.6025 8.5375L7.3125 9.72C7.275 9.8725 7.145 9.985 6.99 10.0025C6.975 10.0025 6.9625 10.0025 6.9475 10.0025L6.945 10.0075Z" fill="#F7F7F8"/><path d="M5.00001 5.42751C3.95501 5.42751 3.10501 4.57751 3.10501 3.53251C3.10501 2.48751 3.95501 1.63751 5.00001 1.63751C6.04501 1.63751 6.89501 2.48751 6.89501 3.53251C6.89501 4.57751 6.04501 5.42751 5.00001 5.42751ZM5.00001 2.39001C4.37001 2.39001 3.85501 2.90251 3.85501 3.53501C3.85501 4.16751 4.36751 4.68001 5.00001 4.68001C5.63251 4.68001 6.14501 4.16751 6.14501 3.53501C6.14501 2.90251 5.63251 2.39001 5.00001 2.39001Z" fill="#F7F7F8"/></svg>',
                ],
                [
                    'title' => 'Quality',
                    'lines' => ['Reliable Every Time', 'Meet or Exceed Requirements / Expectations'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M4.9175 7.2175C4.9175 7.2175 4.9075 7.2175 4.9 7.2175C4.785 7.2125 4.68 7.155 4.6125 7.065L2.625 4.355L3.2325 3.91L4.9425 6.2425L9.435 1.1325L10 1.63L5.2 7.0875C5.1275 7.17 5.025 7.215 4.9175 7.215V7.2175Z" fill="#F7F7F8"/><path d="M4.98 9.98C2.235 9.98 0 7.7475 0 5C0 2.2525 2.235 0.0199966 4.98 0.0199966C5.9025 0.0199966 6.8025 0.272497 7.5825 0.752497L7.1875 1.395C6.525 0.987497 5.76 0.772497 4.98 0.772497C2.65 0.772497 0.7525 2.67 0.7525 5C0.7525 7.33 2.65 9.2275 4.98 9.2275C7.31 9.2275 9.2075 7.33 9.2075 5C9.2075 4.725 9.1825 4.4525 9.13 4.1875L9.87 4.0425C9.93 4.355 9.9625 4.6775 9.9625 5C9.9625 7.7475 7.7275 9.98 4.9825 9.98H4.98Z" fill="#F7F7F8"/></svg>',
                ],
                [
                    'title' => 'People',
                    'lines' => ['Positive', 'Determined', 'Professional'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M8.00157 0.5H1.99607C1.17147 0.5 0.5 1.14318 0.5 1.93305V5.77407C0.5 6.56394 1.17147 7.20712 1.99607 7.20712H2.20105V9.16148C2.20105 9.30366 2.29293 9.43004 2.43194 9.47969C2.47199 9.49323 2.5144 9.5 2.55445 9.5C2.65576 9.5 2.75471 9.45938 2.82304 9.38265L4.78089 7.20712H8.00393C8.82853 7.20712 9.5 6.56394 9.5 5.77407V1.93305C9.5 1.14318 8.82853 0.5 8.00393 0.5H8.00157ZM8.79319 5.77407C8.79319 6.19158 8.43979 6.53009 8.00393 6.53009H4.61832C4.51466 6.53009 4.41806 6.57297 4.34974 6.64744L2.90785 8.24975V6.86861C2.90785 6.68129 2.75 6.53009 2.55445 6.53009H1.99607C1.56021 6.53009 1.20681 6.19158 1.20681 5.77407V1.93305C1.20681 1.51555 1.56021 1.17703 1.99607 1.17703H8.00157C8.43743 1.17703 8.79084 1.51555 8.79084 1.93305V5.77407H8.79319Z" fill="#F7F7F8"/><path d="M3.5 4C3.5 4.27644 3.27458 4.5 2.9988 4.5C2.72302 4.5 2.5 4.27644 2.5 4C2.5 3.72356 2.72302 3.5 2.9988 3.5C3.27458 3.5 3.5 3.72356 3.5 4Z" fill="#F7F7F8"/><path d="M5.5 4C5.5 4.27644 5.27698 4.5 5.0012 4.5C4.72542 4.5 4.5 4.27644 4.5 4C4.5 3.72356 4.72542 3.5 5.0012 3.5C5.27698 3.5 5.5 3.72356 5.5 4Z" fill="#F7F7F8"/><path d="M7.5 4C7.5 4.27644 7.27458 4.5 6.9988 4.5C6.72302 4.5 6.5 4.27644 6.5 4C6.5 3.72356 6.72302 3.5 6.9988 3.5C7.27458 3.5 7.5 3.72356 7.5 4Z" fill="#F7F7F8"/></svg>',
                ],
                [
                    'title' => 'Growth',
                    'lines' => ['Sustainable', 'Performance', 'Satisfied Customer'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 39 39" fill="none" aria-hidden="true"><path d="M34.683 0H4.317C1.934 0 0 1.934 0 4.317v30.366C0 37.066 1.934 39 4.317 39h30.366C37.066 39 39 37.066 39 34.683V4.317C39 1.934 37.066 0 34.683 0zm1.326 34.683c0 .728-.598 1.326-1.326 1.326H4.317c-.728 0-1.326-.598-1.326-1.326V4.317c0-.728.598-1.326 1.326-1.326h30.366c.728 0 1.326.598 1.326 1.326v30.366z" fill="#F7F7F8"/><path d="M18.419 10.86V7.8H9.33c-.847 0-1.53.683-1.53 1.53v9.089h3.06v-5.396L17.337 19.5l2.163-2.163-6.477-6.477h5.396z" fill="#F7F7F8"/><path d="M28.14 25.977 21.663 19.5 19.5 21.663l6.477 6.477H20.58V31.2h9.09c.847 0 1.53-.683 1.53-1.53v-9.089H28.14v5.396z" fill="#F7F7F8"/></svg>',
                ],
            ];
            foreach ($philosophyCards as $card):
            ?>
            <div class="col-md-6 col-lg-4">
                <article class="philosophy-card">
                    <span class="philosophy-card-arrow" aria-hidden="true">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M7 17 17 7M9 7h8v8" stroke="#e0393e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </span>
                    <div class="philosophy-card-inner">
                        <span class="philosophy-icon"><?php echo $card['icon']; ?></span>
                        <h3><?php echo htmlspecialchars($card['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                        <p><?php echo implode('<br>', array_map(static function ($line) {
                            return htmlspecialchars($line, ENT_QUOTES, 'UTF-8');
                        }, $card['lines'])); ?></p>
                    </div>
                </article>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-section">
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
