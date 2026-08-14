<?php
$pageTitle = 'Forging 101 | Western Forge & Flange';
include __DIR__ . '/header.php';
?>

<section class="page-hero forging-hero">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1>Forging 101</h1>
            <p>Forging is a manufacturing process involving the shaping of metal using localized compressive forces. These forces are delivered with a power hammer or press. No other process for working metal can equal forging results in strength and toughness.</p>
            <p>To allow easy functionality and interchangeability, flanges are designed to have standardized dimensions. Common world standards include ASA/ASME (USA), PN/DIN (European), BS10 (British/Australian), and JIS/KS (Japanese/Korean).</p>
            <a class="btn-hero btn-hero-primary" href="<?php echo $baseUrl; ?>/index.php#industries">Explore Industries</a>
        </div>
    </div>
</section>

<section class="forging-flange">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-who-copy forging-flange-copy">
                    <h2>What is a Pipe Flange</h2>
                    <p>A pipe flange functions as a joining mechanism to connect a system of pipes or tubing to various equipment and valves. Typically, two flanges are joined by bolts using a gasket between them for a seal leaving the opposite ends open for welding connections (Figure one). Flanges offer numerous advantages for joining pipe in highly corrosive or maintenance prone facilities. For instance, pipe systems that need to be regularly inspected or are prone to repair can be joined with flanges for quick disassembly. Flanged connections also allow for modifications to be made to the system without needing major fabrication.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-who-media forging-flange-media">
                    <span class="about-who-media-accent" aria-hidden="true"></span>
                    <img src="<?php echo $baseUrl; ?>/images/forging-101-flange.jpg" alt="Pipe flange">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="forging-quote">
    <div class="container">
        <div class="forging-quote-intro">
            <h2>How to Request a Quotation</h2>
            <h3>Quotation Example</h3>
            <p class="forging-quote-example"><strong>( 6&quot;&nbsp; 150#&nbsp; WN&nbsp; RF&nbsp; Sch160&nbsp; SA182&nbsp; UNS&nbsp; S32205 )</strong></p>
        </div>
        <div class="row forging-quote-grid">
            <div class="col-md-4">
                <div class="forging-quote-card forging-quote-lead">
                    <p>A flange is specified by identifying the following information:</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Size (NPS)</h3>
                    <p>The flange size (NPS) is a designation to define the nominal pipe size of the connecting pipe. The number is not necessarily the same as the flange inside diameter. B16.5 covers &frac12;&quot;-<strong>24&Prime;</strong> NPS flanges, and B16.47 covers <strong>26&Prime;</strong>&ndash;<strong>60&Prime;</strong> flanges.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Type</h3>
                    <p>The type of flange is decided based on the application, with the most common being a Weld Neck <strong>(WN)</strong>, Slip On <strong>(SO)</strong>, Threaded <strong>(Thd)</strong>, Socket Weld <strong>(SW)</strong> or Lap Joint <strong>(LJ)</strong>. A few others include Reducing Flanges <strong>(RED)</strong>, Long Weld Necks <strong>(LWN)</strong> and Stub Ends <strong>(SE)</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Pipe Schedule</h3>
                    <p>This is only for Weld Necks, Socket Welds, Stub Ends, Orifices, and various non-standard flanges where the flange bore must meet that of the pipe. Pipe Schedules range from <strong>SCH 5S</strong> to <strong>XX HVY</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Material</h3>
                    <p>Materials are often called out by their proprietary names (Ex &ndash; Haynes 230). However, UNS numbers are the most common and most universal way to specify a material <strong>(Ex. UNS S32205)</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Pressure Class</h3>
                    <p>This designates the pressure-temperature rating of the flange, which is required for all flanges and covered by ASME B16.5. Examples include classes <strong>150#, 300#, 600#, 900#, 1500#, and 2500#</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Facing</h3>
                    <p>The flange face is the contact surface and used to seat the sealing gasket. ASME B16.5 and B16.47 define various types of flange facing and surface finishes (RMS). Common Facings include Raised Face <strong>(RF)</strong>, Ring-type Joints <strong>(RTJ)</strong>, Flat Face <strong>(FF)</strong> Large Male <strong>(LM)</strong>, Large Female <strong>(LF)</strong>, Large Tongue <strong>(LT)</strong>, and Large Groove <strong>(LG)</strong>.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-card">
                    <h3>Standard</h3>
                    <p>The &ldquo;standard&rdquo; or &ldquo;specification&rdquo; refers to a group of common requirements written by a professional association such as the American Society of American Engineers (ASME) or the American Society for Testing and Materials (ASTM). These bodies lay out the material requirements for groups of material grades such as <strong>A182 (ASTM) / SA182 (ASME) or B564 (ASTM) / SB564 (ASME).</strong></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="forging-quote-cta">
                    <a class="btn-view-products" href="<?php echo $baseUrl; ?>/contact.php">Get a Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include __DIR__ . '/footer.php'; ?>
</body>
</html>
