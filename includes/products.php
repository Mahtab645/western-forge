<?php

function wf_product_url($slug, $baseUrl = '')
{
    return rtrim((string) $baseUrl, '/') . '/products/' . rawurlencode($slug) . '/';
}

function wf_products_listing_url($baseUrl = '')
{
    return rtrim((string) $baseUrl, '/') . '/products/';
}

function wf_request_product_slug()
{
    if (!empty($_GET['slug'])) {
        return strtolower(trim((string) $_GET['slug']));
    }

    $path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
    if (is_string($path) && preg_match('#/products/([a-z0-9-]+)/?$#', $path, $matches)) {
        return strtolower($matches[1]);
    }

    return '';
}

function wf_product_image($file, $baseUrl = '')
{
    return rtrim((string) $baseUrl, '/') . '/images/products/' . ltrim($file, '/');
}

function wf_shared_alloys()
{
    return [
        'Hastelloy – C276, B3, C22, C-2000, G-30, 230',
        'Alloy 20, 200/201, 400, 600, 601, 625, 800HT, 825',
        'AL6XN (N08367), 904L, 310, 317L, 321, 347',
        'Duplex Stainless – 2205, 2507, 255',
        'Titanium – Grades 2, 7, and 12',
        'Aluminum Grades – 1100, 3003, 6061 and 5083',
        'Chromes-Moly – F-5, F-9, F-11 and F-22',
    ];
}

function wf_shared_certs()
{
    return [
        'ISO 9001:2015, PED 2014/68/EU, Canadian Registration Numbers (CRN’s: Nuclear and Non-Nuclear), AIS, NCA3800, 10CFR50, 10CFR21, CSA N285.0, CSA B51, NQA-1, EB2678, MIL-I-45208A, DFARS, NACE, EN 10204 3.1',
    ];
}

function wf_products()
{
    $alloys = wf_shared_alloys();
    $certs = wf_shared_certs();

    return [
        'weld-neck-flanges' => [
            'slug' => 'weld-neck-flanges',
            'nav' => 'Weld Neck',
            'category' => 'Flange',
            'hero_title' => 'Weld Neck',
            'heading' => 'Weld Neck Flanges',
            'spec_title' => 'Weld Neck Flange',
            'page_title' => 'Weld Neck Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'High-quality weld neck flanges engineered for high-pressure, high-temperature and critical piping applications in multiple materials and classes.',
            'image' => 'weld-neck.png',
            'kicker' => 'Engineered for High-Pressure & Critical Service',
            'paragraphs' => [
                'Weld Neck Flanges feature a long tapered hub and are connected to the pipe by butt welding, providing excellent strength and stress distribution.',
                'Designed for high-pressure, high-temperature and low-temperature applications, the tapered hub provides a smooth transition between flange and pipe. The matching bore helps maintain unrestricted flow while reducing turbulence and erosion.',
                'STELVERA FORGE S.p.A. manufactures Weld Neck Flanges in a wide range of sizes, pressure classes and material grades, with special dimensions available to project specifications.',
            ],
            'dimensions' => ['B16.5 / B16.47', '½” – 36″', '150# – 2500#', 'Series A & Series B'],
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'slip-on-flanges' => [
            'slug' => 'slip-on-flanges',
            'nav' => 'Slip-On',
            'category' => 'Flange',
            'hero_title' => 'Slip-On',
            'heading' => 'Slip-On Flanges',
            'spec_title' => 'Slip-On Flange',
            'page_title' => 'Slip-On Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Precision-manufactured slip-on flanges for reliable pipe connections, available in multiple sizes, pressure classes and material grades.',
            'image' => 'slip-on.png',
            'kicker' => 'Simple. Reliable. Efficient.',
            'paragraphs' => [
                'Slip-On Flanges are designed to slide over the pipe and are typically welded on both the inside and outside to provide a secure and reliable connection.',
                'Offering easy alignment and installation, they provide a practical solution for low to moderate pressure and temperature applications where high-stress service is not required.',
                'STELVERA FORGE S.p.A. manufactures Slip-On Flanges in a wide range of materials, sizes and pressure classes, including special configurations to customer specifications.',
                'Series B available on request.',
            ],
            'dimensions' => ['B16.5 / B16.47', '½” – 36″', '150# – 2500#', 'Series A & Series B'],
            'dimension_note' => 'Series B available per customer specifications.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'blind-flanges' => [
            'slug' => 'blind-flanges',
            'nav' => 'Blind',
            'category' => 'Flange',
            'hero_title' => 'Blind',
            'heading' => 'Blind Flanges',
            'spec_title' => 'Blind Flange',
            'page_title' => 'Blind Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Forged blind flanges for secure closure of piping systems and pressure vessels, available in various materials, sizes and pressure classes.',
            'image' => 'blind.png',
            'kicker' => 'Secure Closure for Piping Systems',
            'paragraphs' => [
                'Blind Flanges are solid flanges without a bore, designed to close the end of piping systems, valves or pressure vessel openings while allowing convenient access for inspection and maintenance.',
                'Engineered to withstand internal pressure and bolting loads, they provide a strong and dependable solution for demanding industrial applications.',
                'STELVERA FORGE S.p.A. manufactures Blind Flanges in a wide range of materials, sizes and pressure classes, with special dimensions available on request.',
            ],
            'dimensions' => ['B16.5 / B16.47', '½” – 36″', '150# – 2500#', 'Series A & Series B'],
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'socket-weld-flanges' => [
            'slug' => 'socket-weld-flanges',
            'nav' => 'Socket Weld',
            'category' => 'Flange',
            'hero_title' => 'Socket Weld',
            'heading' => 'Socket Weld Flanges',
            'spec_title' => 'Socket Weld Flange',
            'page_title' => 'Socket Weld Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Socket weld flanges engineered for small-bore, high-pressure piping systems, available in multiple materials, sizes and pressure classes.',
            'image' => 'socket-weld.png',
            'kicker' => 'Compact Design for High-Pressure Service',
            'paragraphs' => [
                'Socket Weld Flanges feature a recessed socket that allows the pipe to be inserted and secured with an external fillet weld, providing accurate alignment and a strong connection.',
                'Primarily used in small-bore, high-pressure piping systems, they are well suited for hydraulic, steam and process applications.',
                'STELVERA FORGE S.p.A. manufactures Socket Weld Flanges in a wide range of materials, sizes and pressure classes, with special requirements available on request.',
            ],
            'dimensions' => ['B16.5', '½” – 12″', '150# – 2500#'],
            'dimension_note' => '12″ and larger available per customer specifications.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'threaded-flanges' => [
            'slug' => 'threaded-flanges',
            'nav' => 'Threaded',
            'category' => 'Flange',
            'hero_title' => 'Threaded',
            'heading' => 'Threaded Flanges',
            'spec_title' => 'Threaded Flange',
            'page_title' => 'Threaded Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Precision threaded flanges for reliable connections without welding, manufactured in various materials, sizes and pressure classes.',
            'image' => 'threaded.png',
            'kicker' => 'Reliable Connection Without Welding',
            'paragraphs' => [
                'Threaded Flanges connect directly to externally threaded pipe, providing a practical solution where welding is not required or permitted.',
                'Typically used in small-bore piping systems, they are suitable for a variety of industrial applications and are available in different materials, sizes and pressure classes.',
                'STELVERA FORGE S.p.A. manufactures Threaded Flanges to applicable international standards, with special requirements available on request.',
            ],
            'dimensions' => ['B16.5', '½” – 8″', '150# – 2500#'],
            'dimension_note' => '6″ and larger available per customer specifications.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'lap-joint-flanges' => [
            'slug' => 'lap-joint-flanges',
            'nav' => 'Lap Joint',
            'category' => 'Flange',
            'hero_title' => 'Lap Joint',
            'heading' => 'Lap Joint Flanges',
            'spec_title' => 'Lap Joint Flange',
            'page_title' => 'Lap Joint Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Lap joint flanges designed for use with stub ends, providing easy alignment, installation and maintenance across industrial piping systems.',
            'image' => 'lap-joint.png',
            'kicker' => 'Flexible Connection. Easy Maintenance.',
            'paragraphs' => [
                'Lap Joint Flanges are designed for use with stub ends, allowing the flange to rotate freely for easier bolt alignment and installation.',
                'Ideal for piping systems requiring frequent dismantling, inspection or maintenance, they provide flexibility without compromising connection reliability.',
                'STELVERA FORGE S.p.A. manufactures Lap Joint Flanges in a wide range of materials, sizes and pressure classes, with special dimensions available on request.',
            ],
            'dimensions' => ['B16.5', '½” – 24″', '150# – 2500#'],
            'dimension_note' => '24″ and larger available per customer specifications.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'stub-end-flanges' => [
            'slug' => 'stub-end-flanges',
            'nav' => 'Stub End',
            'category' => 'Flange',
            'hero_title' => 'Stub End',
            'heading' => 'Lap Joint Stub Ends',
            'spec_title' => 'Stub End',
            'page_title' => 'Lap Joint Stub Ends Manufacturer | STELVERA FORGE',
            'page_description' => 'Precision-manufactured lap joint stub ends available in long and short patterns for flexible, efficient and reliable piping connections.',
            'image' => 'stub-end.png',
            'kicker' => 'Flexible Design. Efficient Installation.',
            'paragraphs' => [
                'Lap Joint Stub Ends are designed for use with rotating backing flanges, allowing easy alignment of bolt holes while reducing the use of higher-grade flange materials.',
                'Available in Long Pattern (ASME B16.9) and Short Pattern (MSS SP-43) configurations, they are widely used in piping systems requiring flexibility, easy assembly and convenient maintenance.',
                'STELVERA FORGE S.p.A. manufactures Stub Ends in a wide range of materials, sizes and wall thicknesses, with special dimensions available on request.',
            ],
            'dimensions' => ['B16.9 – ASA or MSS', '½” – 24″'],
            'dimension_note' => '24″ and larger available per customer specifications.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'studding-outlet-flanges' => [
            'slug' => 'studding-outlet-flanges',
            'nav' => 'Studding Outlet',
            'category' => 'Flange',
            'hero_title' => 'Studding Outlet',
            'heading' => 'Studding Outlet Flanges',
            'spec_title' => 'Studding Outlet Flange',
            'page_title' => 'Studding Outlet Flanges | STELVERA FORGE',
            'page_description' => 'Custom studding outlet flanges for pressure vessels and tanks, available in flat bottom, head-mount and project-specific configurations.',
            'image' => 'studding-outlet.png',
            'kicker' => 'Engineered for Vessel & Tank Connections',
            'paragraphs' => [
                'Studding Outlet Flanges are designed for installation on the inside or outside of pressure vessels and tanks, providing a compact and reliable connection for specialized applications.',
                'Available in Flat Bottom, Head-Mount and custom configurations, they can be manufactured to suit specific vessel geometry and project requirements.',
                'STELVERA FORGE S.p.A. manufactures Studding Outlet Flanges in a wide range of materials, sizes and pressure classes, with custom designs available on request.',
            ],
            'dimensions' => ['B16.5 (unless otherwise stated)', '½” – 24″', '150# – 2500#'],
            'dimension_note' => 'Flat bottom or head mount available. Furnished to B16.5 specifications unless otherwise stated.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'long-weld-neck-flanges' => [
            'slug' => 'long-weld-neck-flanges',
            'nav' => 'Long Weld Neck',
            'category' => 'Flange',
            'hero_title' => 'Long Weld Neck',
            'heading' => 'Long Weld Neck Flanges',
            'spec_title' => 'Long Weld Neck Flange',
            'page_title' => 'Long Weld Neck Flanges Manufacturer | STELVERA FORGE',
            'page_description' => 'Long weld neck flanges engineered for vessels, columns and critical applications involving high pressure, temperature and mechanical stress.',
            'image' => 'long-weld-neck.png',
            'kicker' => 'Extended Strength for Critical Applications',
            'paragraphs' => [
                'Long Weld Neck Flanges feature an extended tapered hub, providing additional reinforcement and a direct connection to vessels, columns and process equipment.',
                'Designed for applications involving high pressure, elevated temperatures and mechanical stress, they are also available in Heavy Barrel (HB) and Equal Barrel (E) configurations for increased wall thickness and structural support.',
                'STELVERA FORGE S.p.A. manufactures Long Weld Neck Flanges in a wide range of materials, sizes and pressure classes, with custom dimensions available on request.',
            ],
            'dimensions' => ['B16.5', '½” – 24″', '150# – 2500#'],
            'dimension_note' => 'Barrel length up to 24″.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'orifice-set-flanges' => [
            'slug' => 'orifice-set-flanges',
            'nav' => 'Orifice Set',
            'category' => 'Flange',
            'hero_title' => 'Orifice Set',
            'heading' => 'Orifice Flange Sets',
            'spec_title' => 'Orifice Flange',
            'page_title' => 'Orifice Flange Sets Manufacturer | STELVERA FORGE',
            'page_description' => 'Precision orifice flange sets for liquid and gas flow measurement, available in weld neck, slip-on, RF and RTJ configurations.',
            'image' => 'orifice-set.png',
            'kicker' => 'Precision Engineered for Flow Measurement',
            'paragraphs' => [
                'Orifice Flange Sets are designed for use with orifice meters to accurately measure the flow of liquids and gases within piping systems.',
                'Integrated pressure tappings provide a compact and efficient measurement connection without requiring separate pipe-wall fittings. Available in Weld Neck and Slip-On configurations, with Raised Face (RF) or Ring Type Joint (RTJ) facings.',
                'STELVERA FORGE S.p.A. manufactures Orifice Flange Sets in a wide range of materials, sizes and pressure classes, with special configurations available on request.',
            ],
            'dimensions' => ['B16.36', '½” – 24″', '150# – 2500#'],
            'dimension_note' => 'Socket weld or threaded taps available.',
            'alloys' => $alloys,
            'certs' => $certs,
        ],
        'other-flanges' => [
            'slug' => 'other-flanges',
            'nav' => 'Other Flanges & Non-Standard Products',
            'category' => 'Flange',
            'hero_title' => 'Other Flanges',
            'heading' => 'Other Flanges and Non-Standard Products',
            'spec_title' => 'Non-Standard Products',
            'page_title' => 'Custom & Non-Standard Flanges | STELVERA FORGE',
            'page_description' => 'Custom and non-standard forged flanges manufactured to customer drawings, dimensions, materials and project-specific requirements.',
            'image' => 'other-flanges.png',
            'kicker' => 'Custom & Non-Standard Flanges',
            'paragraphs' => [
                'Custom and non-standard forged flanges manufactured to customer drawings, dimensions, materials and project-specific requirements.',
            ],
            'groups' => [
                [
                    'title' => 'Flanges',
                    'items' => [
                        'Expanding Flanges',
                        'Reducing Flanges',
                        'Nipolet Flanges',
                        'Lightweight Class Flanges',
                        'Navy Flanges and Military Specifications',
                        'DIN, JIS, and API Flanges',
                        'Custom Forgings and Flanges made to Drawings',
                    ],
                ],
                [
                    'title' => 'Facings',
                    'items' => [
                        'Ring Type Joint (RTJ)',
                        'Male / Female',
                        'Tongue / Groove',
                    ],
                ],
            ],
        ],
    ];
}

function wf_get_product($slug)
{
    $products = wf_products();
    return $products[$slug] ?? null;
}
