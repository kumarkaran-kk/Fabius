<?php
function fabius_catalog(): array
{
    $base = 'assets/new-images/optimized/';
    $price = '₹1,15,479';
    $commonResoluteSpecs = [
        'Case' => ['Shape' => 'Round', 'Dimension' => 'Ø 42.00 mm', 'Water Resistance' => '5ATM', 'Lug distance' => '21mm', 'Lug-to-lug' => '48.00 mm', 'Thickness' => '11.20 mm'],
        'Dial & Hands' => ['Dial type' => 'Skeleton', 'Hands' => 'Polished steel', 'Hour markers' => 'Applied indices'],
        'Movement & Functions' => ['Movement Type' => 'Automatic', 'Functions' => 'Hours, minutes, seconds', 'Caliber' => 'Seagull Automatic'],
        'Strap' => ['Material' => 'Genuine leather', 'Buckle' => 'Stainless steel pin buckle'],
    ];
    $commonLuminaSpecs = [
        'Case' => ['Shape' => 'Round', 'Dimension' => 'Ø 30.00 mm', 'Water Resistance' => '5ATM', 'Glass' => 'Flat sapphire crystal'],
        'Dial & Hands' => ['Dial type' => 'Mother of pearl', 'Hands' => 'Polished', 'Hour markers' => 'Crystal indices'],
        'Movement & Functions' => ['Movement Type' => 'Japanese Quartz', 'Functions' => 'Hours and minutes'],
        'Bracelet' => ['Material' => 'Stainless steel', 'Buckle' => 'Folding clasp'],
    ];

    return [
        'resolute-black' => [
            'name' => 'Resolute Black', 'collection' => 'Resolute', 'tone' => 'Black', 'audience' => 'men', 'price' => $price,
            'subtitle' => 'Automatic · 42mm · Leather', 'search' => 'resolute black automatic skeleton leather stainless steel men',
            'description' => 'Bold 42mm skeleton watch with exposed mechanics, sapphire crystal, and black leather strap — built for strength, precision, and the man who thrives under pressure.',
            'model_image' => $base . 'model-resolute-black.webp', 'collection_image' => $base . 'collection-resolute-black.webp', 'hero_image' => $base . 'hero-resolute-black.webp',
            'gallery' => ['assets/pdp/resolute-black-gallery.webp', $base . 'collection-resolute-black.webp', $base . 'model-resolute-black.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Black'], 'Strap' => ['Color' => 'Black']]),
        ],
        'resolute-blue' => [
            'name' => 'Resolute Blue', 'collection' => 'Resolute', 'tone' => 'Blue', 'audience' => 'men', 'price' => $price,
            'subtitle' => 'Automatic · 42mm · Leather', 'search' => 'resolute blue automatic skeleton leather stainless steel men nautical',
            'description' => 'A bold 42mm skeleton watch with nautical blue accents, exposed mechanics, and textured leather strap — made for strength, precision, and adventure.',
            'model_image' => $base . 'model-resolute-blue.webp', 'collection_image' => $base . 'collection-resolute-blue.webp', 'hero_image' => $base . 'hero-resolute-blue.webp',
            'gallery' => ['assets/pdp/resolute-blue-gallery.webp', $base . 'collection-resolute-blue.webp', $base . 'model-resolute-blue.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Blue'], 'Strap' => ['Color' => 'Blue']]),
        ],
        'resolute-brown' => [
            'name' => 'Resolute Brown', 'collection' => 'Resolute', 'tone' => 'Brown', 'audience' => 'men', 'price' => $price,
            'subtitle' => 'Automatic · 42mm · Gold Plated', 'search' => 'resolute brown automatic skeleton leather gold plated men',
            'description' => 'A vintage-inspired 42mm skeleton watch with golden bezel, exposed movement, and rich brown leather strap — built for endurance and timeless style.',
            'model_image' => $base . 'model-resolute-brown.webp', 'collection_image' => $base . 'collection-resolute-brown.webp', 'hero_image' => $base . 'hero-resolute-brown.webp',
            'gallery' => ['assets/pdp/resolute-brown-gallery.webp', $base . 'collection-resolute-brown.webp', $base . 'model-resolute-brown.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Silver and gold'], 'Strap' => ['Color' => 'Brown']]),
        ],
        'lumina-gold' => [
            'name' => 'Lumina Gold', 'collection' => 'Lumina', 'tone' => 'Gold', 'audience' => 'women', 'price' => $price,
            'subtitle' => 'Japanese Quartz · 30mm', 'search' => 'lumina gold japanese quartz 30mm women mother pearl bracelet',
            'description' => 'A luminous gold-plated 30mm timepiece with a mother-of-pearl dial, crystal hour markers, and refined integrated bracelet.',
            'model_image' => $base . 'model-lumina-gold.webp', 'collection_image' => $base . 'model-lumina-gold.webp', 'hero_image' => $base . 'model-lumina-gold.webp',
            'gallery' => [$base . 'model-lumina-gold.webp'], 'product_data' => ['Movement' => 'Japanese Quartz', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonLuminaSpecs, ['Dial & Hands' => ['Dial color' => 'Pink mother of pearl'], 'Bracelet' => ['Color' => 'Gold plated']]),
        ],
        'lumina-rose-gold' => [
            'name' => 'Lumina Rose Gold', 'collection' => 'Lumina', 'tone' => 'Rose Gold', 'audience' => 'women', 'price' => $price,
            'subtitle' => 'Japanese Quartz · 30mm', 'search' => 'lumina rose gold japanese quartz 30mm women mother pearl bracelet',
            'description' => 'Warm rose-gold tones frame a radiant mother-of-pearl dial in an elegant 30mm silhouette designed for modern refinement.',
            'model_image' => $base . 'model-lumina-rose-gold.webp', 'collection_image' => $base . 'model-lumina-rose-gold.webp', 'hero_image' => $base . 'model-lumina-rose-gold.webp',
            'gallery' => [$base . 'model-lumina-rose-gold.webp'], 'product_data' => ['Movement' => 'Japanese Quartz', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonLuminaSpecs, ['Dial & Hands' => ['Dial color' => 'Pink mother of pearl'], 'Bracelet' => ['Color' => 'Rose gold']]),
        ],
        'lumina-silver' => [
            'name' => 'Lumina Silver', 'collection' => 'Lumina', 'tone' => 'Silver', 'audience' => 'women', 'price' => $price,
            'subtitle' => 'Japanese Quartz · 30mm', 'search' => 'lumina silver japanese quartz 30mm women mother pearl bracelet',
            'description' => 'Cool stainless steel surrounds an iridescent mother-of-pearl dial for a composed, contemporary expression of elegance.',
            'model_image' => $base . 'model-lumina-silver.webp', 'collection_image' => $base . 'model-lumina-silver.webp', 'hero_image' => $base . 'model-lumina-silver.webp',
            'gallery' => [$base . 'model-lumina-silver.webp'], 'product_data' => ['Movement' => 'Japanese Quartz', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonLuminaSpecs, ['Dial & Hands' => ['Dial color' => 'Dark mother of pearl'], 'Bracelet' => ['Color' => 'Silver']]),
        ],
    ];
}

function fabius_product(string $slug): ?array
{
    $catalog = fabius_catalog();
    return isset($catalog[$slug]) ? ['slug' => $slug] + $catalog[$slug] : null;
}

function fabius_products_for(string $audience): array
{
    $items = [];
    foreach (fabius_catalog() as $slug => $product) {
        if ($product['audience'] === $audience) $items[] = ['slug' => $slug] + $product;
    }
    return $items;
}
