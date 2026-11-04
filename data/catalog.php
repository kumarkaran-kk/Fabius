<?php
function fabius_catalog(): array
{
    $base = 'assets/images/shoot/';
    $home = $base . 'home/';
    $products = $base . 'products/';
    $commonResoluteSpecs = [
        'Case' => ['Shape' => 'Round', 'Dimension' => 'Ø 42.00 mm', 'Water Resistance' => '5ATM', 'Lug distance' => '21mm', 'Lug-to-lug' => '48.00 mm', 'Thickness' => '11.20 mm'],
        'Dial & Hands' => ['Dial type' => 'Skeleton', 'Hands' => 'Polished steel', 'Hour markers' => 'Applied indices'],
        'Movement & Functions' => ['Movement Type' => 'Automatic', 'Functions' => 'Hours, minutes, seconds', 'Caliber' => 'Seagull Automatic'],
        'Strap' => ['Material' => 'Genuine leather', 'Buckle' => 'Stainless steel pin buckle'],
    ];
    $commonLuminaSpecs = [
        'Case' => ['Shape' => 'Round', 'Dimension' => 'Ø 30.00 mm', 'Water Resistance' => '5ATM', 'Glass' => 'Flat sapphire crystal'],
        'Dial & Hands' => ['Dial type' => 'Mother of pearl', 'Hands' => 'Polished', 'Hour markers' => 'Crystal indices'],
        'Movement & Functions' => ['Movement Type' => 'Quartz Slim', 'Functions' => 'Hours and minutes'],
        'Bracelet' => ['Material' => 'Stainless steel', 'Buckle' => 'Folding clasp'],
    ];

    return [
        'resolute-black' => [
            'name' => 'Resolute Black', 'collection' => 'Resolute', 'tone' => 'Black', 'audience' => 'men', 'price' => '₹1,15,479',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/24',
            'subtitle' => 'Automatic · 42mm · Leather', 'search' => 'resolute black automatic skeleton leather stainless steel men',
            'description' => 'Bold 42mm skeleton watch with exposed mechanics, sapphire crystal, and black leather strap — built for strength, precision, and the man who thrives under pressure.',
            'model_image' => $home . 'model-black.webp', 'collection_image' => $home . 'collection-black.webp', 'hero_image' => $home . 'hero-03.webp',
            'gallery' => [$products . 'resolute-black-01.webp', $products . 'resolute-black-02.webp', $products . 'resolute-black-03.webp', $products . 'resolute-black-04.webp', $products . 'resolute-black-05.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Black'], 'Strap' => ['Color' => 'Black']]),
        ],
        'resolute-blue' => [
            'name' => 'Resolute Blue', 'collection' => 'Resolute', 'tone' => 'Blue', 'audience' => 'men', 'price' => '₹1,15,479',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/26',
            'subtitle' => 'Automatic · 42mm · Leather', 'search' => 'resolute blue automatic skeleton leather stainless steel men nautical',
            'description' => 'A bold 42mm skeleton watch with nautical blue accents, exposed mechanics, and textured leather strap — made for strength, precision, and adventure.',
            'model_image' => $home . 'model-blue.webp', 'collection_image' => $home . 'collection-blue.webp', 'hero_image' => $home . 'hero-01.webp',
            'gallery' => [$products . 'resolute-blue-05.webp', $products . 'resolute-blue-01.webp', $products . 'resolute-blue-02.webp', $products . 'resolute-blue-03.webp', $products . 'resolute-blue-04.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Blue'], 'Strap' => ['Color' => 'Blue']]),
        ],
        'resolute-brown' => [
            'name' => 'Resolute Brown', 'collection' => 'Resolute', 'tone' => 'Brown', 'audience' => 'men', 'price' => '₹1,17,453',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/25',
            'subtitle' => 'Automatic · 42mm · Gold Plated', 'search' => 'resolute brown automatic skeleton leather gold plated men',
            'description' => 'A vintage-inspired 42mm skeleton watch with golden bezel, exposed movement, and rich brown leather strap — built for endurance and timeless style.',
            'model_image' => $home . 'model-brown.webp', 'collection_image' => $home . 'collection-brown.webp', 'hero_image' => $home . 'hero-02.webp',
            'gallery' => [$products . 'resolute-brown-04.webp', $products . 'resolute-brown-01.webp', $products . 'resolute-brown-02.webp', $products . 'resolute-brown-03.webp', $products . 'resolute-brown-05.webp'],
            'product_data' => ['Movement' => 'Automatic', 'Case Size' => '42mm', 'Strap Material' => 'Leather', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonResoluteSpecs, ['Dial & Hands' => ['Dial color' => 'Silver and gold'], 'Strap' => ['Color' => 'Brown']]),
        ],
        'lumina-gold' => [
            'name' => 'Lumina Gold', 'collection' => 'Lumina', 'tone' => 'Gold', 'audience' => 'women', 'price' => '₹90,804',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/23',
            'subtitle' => 'Quartz Slim · 30mm', 'search' => 'lumina gold quartz slim 30mm women mother pearl bracelet',
            'description' => 'A luminous gold-plated 30mm timepiece with a mother-of-pearl dial, crystal hour markers, and refined integrated bracelet.',
            'model_image' => $home . 'model-gold.webp', 'collection_image' => $home . 'model-gold.webp', 'hero_image' => $products . 'lumina-gold-01.webp',
            'gallery' => [$products . 'lumina-gold-01.webp', $products . 'lumina-gold-02.webp', $products . 'lumina-gold-03.webp', $products . 'lumina-gold-04.webp', $products . 'lumina-gold-05.webp'], 'product_data' => ['Movement' => 'Quartz Slim', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonLuminaSpecs, ['Dial & Hands' => ['Dial color' => 'Pink mother of pearl'], 'Bracelet' => ['Color' => 'Gold plated']]),
        ],
        'lumina-rose-gold' => [
            'name' => 'Lumina Rose Gold', 'collection' => 'Lumina', 'tone' => 'Rose Gold', 'audience' => 'women', 'price' => '₹90,804',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/21',
            'subtitle' => 'Quartz Slim · 30mm', 'search' => 'lumina rose gold quartz slim 30mm women mother pearl bracelet',
            'description' => 'Warm rose-gold tones frame a radiant mother-of-pearl dial in an elegant 30mm silhouette designed for modern refinement.',
            'model_image' => $home . 'model-rose-gold.webp', 'collection_image' => $home . 'category-women.webp', 'hero_image' => $products . 'lumina-rose-gold-05.webp',
            'gallery' => [$products . 'lumina-rose-gold-01.webp', $products . 'lumina-rose-gold-02.webp', $products . 'lumina-rose-gold-03.webp', $products . 'lumina-rose-gold-04.webp', $products . 'lumina-rose-gold-05.webp'], 'product_data' => ['Movement' => 'Quartz Slim', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
            'specs' => array_replace_recursive($commonLuminaSpecs, ['Dial & Hands' => ['Dial color' => 'Pink mother of pearl'], 'Bracelet' => ['Color' => 'Rose gold']]),
        ],
        'lumina-silver' => [
            'name' => 'Lumina Steel', 'collection' => 'Lumina', 'tone' => 'Steel', 'audience' => 'women', 'price' => '₹89,817',
            'retail_url' => 'https://www.indiekonnect.com/shop/product/22',
            'subtitle' => 'Quartz Slim · 30mm', 'search' => 'lumina steel stainless silver quartz slim 30mm women mother pearl bracelet',
            'description' => 'Cool stainless steel surrounds an iridescent mother-of-pearl dial for a composed, contemporary expression of elegance.',
            'model_image' => $home . 'model-steel.webp', 'collection_image' => $home . 'model-steel.webp', 'hero_image' => $products . 'lumina-steel-03.webp',
            'gallery' => [$products . 'lumina-steel-01.webp', $products . 'lumina-steel-02.webp', $products . 'lumina-steel-03.webp', $products . 'lumina-steel-04.webp', $products . 'lumina-steel-05.webp'], 'product_data' => ['Movement' => 'Quartz Slim', 'Case Size' => '30mm', 'Bracelet' => 'Stainless Steel', 'Water Resistance' => '5ATM', 'Glass' => 'Flat Sapphire Crystal'],
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

function fabius_products_by_movement(string $movement): array
{
    $items = [];
    foreach (fabius_catalog() as $slug => $product) {
        $productMovement = $product['product_data']['Movement'] ?? '';
        if (stripos($productMovement, $movement) !== false) $items[] = ['slug' => $slug] + $product;
    }
    return $items;
}

function fabius_all_products(): array
{
    $items = [];
    foreach (fabius_catalog() as $slug => $product) $items[] = ['slug' => $slug] + $product;
    return $items;
}
