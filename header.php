<?php
if (!isset($pageTitle)) {
    $pageTitle = 'Western Forge & Flange';
}
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
$baseUrl = rtrim($scriptDir, '/');
if ($baseUrl === '.' || $baseUrl === '\\') {
    $baseUrl = '';
}
$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? 'index.php');
$contactHref = $baseUrl . '/contact.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container header-inner">
        <a class="header-logo" href="<?php echo $baseUrl; ?>/index.php">
            <img src="<?php echo $baseUrl; ?>/images/logo.png" alt="Western Forge &amp; Flange">
        </a>

        <nav class="header-nav-wrap navbar navbar-expand-lg p-0">
            <div class="header-topbar">
                <a class="header-linkedin" href="https://www.linkedin.com/company/western-forge-&amp;-flange/" target="_blank" rel="noopener noreferrer" title="LinkedIn">
                    <img src="<?php echo $baseUrl; ?>/images/linkedin.svg" alt="LinkedIn">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="header-menu navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Weld Neck</a></li>
                            <li><a class="dropdown-item" href="#">Slip-On</a></li>
                            <li><a class="dropdown-item" href="#">Blind</a></li>
                            <li><a class="dropdown-item" href="#">Socket Weld</a></li>
                            <li><a class="dropdown-item" href="#">Threaded</a></li>
                            <li><a class="dropdown-item" href="#">Lap Joint</a></li>
                            <li><a class="dropdown-item" href="#">Stub End</a></li>
                            <li><a class="dropdown-item" href="#">Studding Outlet</a></li>
                            <li><a class="dropdown-item" href="#">Long Weld Neck</a></li>
                            <li><a class="dropdown-item" href="#">Orifice Set</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Custom Forging</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?php echo $currentPage === 'quality-certifications.php' ? ' active' : ''; ?>" href="<?php echo $baseUrl; ?>/quality-certifications.php">Quality &amp; Certifications</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Industries</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Chemical &amp; Petrochemical</a></li>
                            <li><a class="dropdown-item" href="#">LNG</a></li>
                            <li><a class="dropdown-item" href="#">Oil &amp; Gas</a></li>
                            <li><a class="dropdown-item" href="#">Renewable Fuels</a></li>
                            <li><a class="dropdown-item" href="#">Nuclear</a></li>
                            <li><a class="dropdown-item" href="#">Power Generation</a></li>
                            <li><a class="dropdown-item" href="#">Pulp &amp; Paper</a></li>
                            <li><a class="dropdown-item" href="#">Marine &amp; Shipbuilding</a></li>
                            <li><a class="dropdown-item" href="#">Pharmaceuticals</a></li>
                            <li><a class="dropdown-item" href="#">Agriculture</a></li>
                            <li><a class="dropdown-item" href="#">Mining</a></li>
                            <li><a class="dropdown-item" href="#">Defense</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle<?php echo in_array($currentPage, ['about.php', 'careers.php', 'company-directory.php', 'forging-101.php'], true) ? ' active' : ''; ?>" href="<?php echo $baseUrl; ?>/about.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/about.php">About Us</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/careers.php">Careers</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/company-directory.php">Company Directory</a></li>
                            <li><a class="dropdown-item" href="<?php echo $baseUrl; ?>/forging-101.php">Forging 101</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Resources</a>
                    </li>
                    <li class="nav-item">
                        <button class="header-search-btn" type="button" id="searchToggle" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                <path d="M7.825 15.31C3.605 15.31.17 11.875.17 7.655S3.605 0 7.825 0s7.655 3.435 7.655 7.655-3.435 7.655-7.655 7.655Zm0-13.815c-3.395 0-6.16 2.765-6.16 6.16s2.765 6.16 6.16 6.16 6.16-2.76 6.16-6.16-2.765-6.16-6.16-6.16Z" fill="#171819"/>
                                <path d="m13.279 12.391-1.057 1.057 6.551 6.551 1.057-1.057-6.551-6.551Z" fill="#171819"/>
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item">
                        <a class="btn-contact" href="<?php echo $contactHref; ?>">Contact Us</a>
                    </li>
                </ul>

                <form class="header-search-panel" id="headerSearch" role="search" action="<?php echo $baseUrl; ?>/index.php" method="get">
                    <label class="visually-hidden" for="site-search">Search here</label>
                    <input type="search" id="site-search" name="s" placeholder="Search here...">
                    <button class="btn-search-submit" type="submit">Search</button>
                    <button class="btn-search-close" type="button" id="searchClose" aria-label="Close search">&times;</button>
                </form>
            </div>
        </nav>
    </div>
</header>
