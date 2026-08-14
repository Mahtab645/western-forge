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

<section class="mfr-list">
    <div class="container">
        <p class="mfr-list-kicker">Approved</p>
        <h2>Manufacturer List</h2>
    </div>
    <div class="mfr-slider" aria-label="Approved manufacturer logos">
        <div class="mfr-track">
            <?php
            $manufacturers = [
                ['file' => 'exxon.png', 'name' => 'ExxonMobil'],
                ['file' => 'shell.png', 'name' => 'Shell'],
                ['file' => 'marathon.png', 'name' => 'Marathon'],
                ['file' => 'valero.png', 'name' => 'Valero'],
                ['file' => 'phillips66.png', 'name' => 'Phillips 66'],
                ['file' => 'chevron.png', 'name' => 'Chevron'],
                ['file' => 'flinthills.png', 'name' => 'Flint Hills'],
                ['file' => 'tesoro.png', 'name' => 'Tesoro'],
                ['file' => 'sasol.png', 'name' => 'Sasol'],
                ['file' => 'cbi.png', 'name' => 'CBI'],
                ['file' => 'bp.png', 'name' => 'bp'],
                ['file' => 'cimarex.png', 'name' => 'Cimarex'],
                ['file' => 'citgo.png', 'name' => 'CITGO'],
                ['file' => 'epic.png', 'name' => 'EPIC Piping'],
                ['file' => 'invista.png', 'name' => 'INVISTA'],
                ['file' => 'kbr.png', 'name' => 'KBR'],
                ['file' => 'koch.png', 'name' => 'Koch'],
                ['file' => 'cameron.png', 'name' => 'Cameron'],
                ['file' => 'kiewit.png', 'name' => 'Kiewit'],
                ['file' => 'axiall.png', 'name' => 'Axiall'],
                ['file' => 'thai.png', 'name' => 'Thai'],
                ['file' => 'total.png', 'name' => 'Total'],
            ];
            for ($loop = 0; $loop < 2; $loop++):
                foreach ($manufacturers as $mfr):
            ?>
            <div class="mfr-slide">
                <img src="<?php echo $baseUrl; ?>/images/mfr/<?php echo htmlspecialchars($mfr['file'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($mfr['name'], ENT_QUOTES, 'UTF-8'); ?>">
            </div>
            <?php
                endforeach;
            endfor;
            ?>
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
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M5.86 7.01c-.068 0-.133-.008-.198-.025l-.567-.158c-.093-.025-.283-.03-.378-.01l-.572.128c-.305.067-.658-.07-.835-.328L3.0 6.135c-.055-.08-.198-.205-.283-.25L2.17 5.612c-.278-.145-.458-.475-.428-.787l.055-.585c.01-.095-.02-.285-.057-.372L1.515 3.325c-.12-.29-.045-.657.178-.877L2.11 2.035c.068-.067.168-.23.195-.32L2.483 1.152C2.575.855 2.87.62 3.183.592l.587-.048c.095-.007.275-.067.358-.12L4.623.11c.265-.17.64-.16.897.022L6 .472c.078.055.255.125.353.138l.582.075c.31.04.593.29.673.592l.148.568c.025.092.115.26.18.33l.397.432c.213.23.268.605.133.888l-.252.53c-.043.087-.08.272-.075.37l.025.587c.015.313-.182.635-.467.765l-.535.245c-.087.04-.235.158-.295.235L6.508 6.692C6.358 6.887 6.103 7.005 5.855 7.005L5.86 7.01zM4.88 6.055c.148 0 .298.017.415.05l.568.155c.012 0 .047-.013.06-.023l.352-.462c.135-.178.378-.37.578-.46l.535-.245c0 0 .027-.037.03-.055l-.028-.582c-.01-.223.052-.528.148-.725l.252-.53c0 0-.002-.047-.012-.062L7.383 2.685c-.15-.163-.298-.438-.355-.65L6.88 1.467c0 0-.032-.035-.05-.04L6.253 1.352C6.033 1.325 5.743 1.21 5.565 1.082L5.085.742c0 0-.045-.005-.06 0L4.533 1.057C4.348 1.177 4.053 1.275 3.833 1.292l-.585.048c0 0-.04.027-.048.042L3.025 1.937c-.065.21-.227.475-.385.63L2.22 2.98c0 0-.012.045-.01.062l.223.538c.085.205.13.512.11.73l-.055.585c0 0 .02.045.032.055l.518.267c.195.1.427.308.555.488l.335.485c0 0 .05.022.06.02l.567-.128c.095-.02.208-.032.323-.032l.002.005z" fill="#F7F7F8"/><path d="M3.055 10.008c-.015 0-.027 0-.042 0-.158-.018-.285-.13-.323-.283L2.4 8.543l-1.105.492c-.145.065-.313.03-.423-.082-.11-.113-.137-.283-.067-.425L2.05 5.973l.675.328-.795 1.63.575-.255c.103-.045.218-.042.318.005.1.05.172.14.2.248l.152.625.703-1.413.672.335-1.16 2.33c-.065.128-.195.208-.335.208v-.005z" fill="#F7F7F8"/><path d="M6.945 10.008c-.14 0-.273-.08-.335-.208L5.45 7.47l.673-.335.705 1.413.152-.625c.028-.108.1-.198.2-.248.1-.05.215-.052.318.0l.575.255-.795-1.63.675-.327 1.245 2.555c.07.142.042.312-.068.425-.11.112-.277.145-.422.082L7.603 8.538l-.29 1.182c-.038.153-.168.265-.323.283-.015 0-.027 0-.042 0h-.003z" fill="#F7F7F8"/><path d="M5 5.428c-1.045 0-1.895-.85-1.895-1.895S3.955 1.638 5 1.638s1.895.85 1.895 1.895S6.045 5.428 5 5.428zm0-3.038c-.63 0-1.145.513-1.145 1.145S4.368 4.68 5 4.68s1.145-.513 1.145-1.145S5.633 2.39 5 2.39z" fill="#F7F7F8"/></svg>',
                ],
                [
                    'title' => 'Quality',
                    'lines' => ['Reliable Every Time', 'Meet or Exceed Requirements / Expectations'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M4.918 7.218H4.9c-.115-.005-.22-.063-.288-.153L2.625 4.355l.608-.445 1.71 2.333L9.435 1.133 10 1.63 5.2 7.088c-.073.082-.175.127-.282.127v.003z" fill="#F7F7F8"/><path d="M4.98 9.98C2.235 9.98 0 7.748 0 5S2.235.02 4.98.02c.923 0 1.823.252 2.603.732l-.395.643A4.21 4.21 0 0 0 4.98.772C2.65.772.753 2.67.753 5s1.897 4.228 4.228 4.228S9.208 7.33 9.208 5c0-.275-.026-.548-.078-.813l.74-.145c.06.313.093.635.093.958 0 2.748-2.235 4.98-4.98 4.98H4.98z" fill="#F7F7F8"/></svg>',
                ],
                [
                    'title' => 'People',
                    'lines' => ['Positive', 'Determined', 'Professional'],
                    'icon' => '<svg width="39" height="39" viewBox="0 0 10 10" fill="none" aria-hidden="true"><path d="M8.002.5H1.996C1.171.5.5 1.143.5 1.933v3.841c0 .79.671 1.433 1.496 1.433h.205v1.954c0 .142.092.269.231.318a.5.5 0 0 0 .122.02c.102 0 .2-.04.269-.117L4.781 7.207h3.223c.825 0 1.496-.643 1.496-1.433V1.933C9.5 1.143 8.829.5 8.004.5h-.002zm.791 5.274c0 .418-.353.756-.79.756H4.618a.48.48 0 0 0-.268.117L2.908 8.25V6.869c0-.188-.158-.339-.354-.339H1.996c-.436 0-.79-.338-.79-.756V1.933c0-.417.354-.756.79-.756h6.006c.436 0 .789.339.789.756v3.841h.002z" fill="#F7F7F8"/><path d="M3.5 4a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM5.5 4a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM7.5 4a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" fill="#F7F7F8"/></svg>',
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

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
