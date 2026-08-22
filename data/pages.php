<?php

function fabius_editorial_pages(): array
{
    $assets = 'assets/new-images/optimized/';

    return [
        'house' => [
            'eyebrow' => 'The House of FABIUS',
            'title' => 'Every Legacy<br>Begins With Time',
            'description' => 'Discover the purpose, perspective and quiet confidence behind FABIUS.',
            'hero' => $assets . 'manifesto-watch-background.webp',
            'intro_title' => 'Where Time<br><em>Becomes Legacy</em>',
            'intro' => [
                'Before history was written, time was observed. Across centuries and civilizations, humanity has sought not only to measure time, but to give meaning to it.',
                'That belief inspired FABIUS: a modern Indian watch house shaped by timeless craftsmanship, refined design and an enduring respect for life’s defining moments.',
            ],
            'quote' => 'A watch should remind you of where you have been, celebrate where you are, and inspire where you are going.',
            'sections' => [
                ['number' => '01', 'title' => 'Born With Purpose', 'body' => ['FABIUS was created for individuals who value precision, purpose and enduring style. Each timepiece is conceived as a companion to achievements, celebrations and quiet personal triumphs.', 'Rooted in India’s growing appreciation for luxury and guided by a global design perspective, the house balances contemporary expression with lasting character.']],
                ['number' => '02', 'title' => 'Designed for Generations', 'body' => ['Every curve, dial, movement and finish reflects a commitment to quality, authenticity and considered detail.', 'The ambition is simple: to create watches worthy of being worn today and remembered tomorrow.']],
                ['number' => '03', 'title' => 'Our Promise', 'body' => ['FABIUS speaks with quiet confidence. We believe luxury is found in thoughtful design, reliable performance, transparent practices and attentive support—never in excess for its own sake.']],
            ],
            'links' => [['label' => 'Our Philosophy', 'href' => 'our-philosophy.php'], ['label' => 'Craftsmanship', 'href' => 'craftsmanship.php'], ['label' => 'The Art of Timekeeping', 'href' => 'art-of-timekeeping.php']],
        ],
        'philosophy' => [
            'eyebrow' => 'The House of FABIUS', 'title' => 'Our<br>Philosophy',
            'description' => 'True luxury is measured by the meaning a timepiece carries.',
            'hero' => $assets . 'hero-resolute-brown.webp',
            'intro_title' => 'Time Is Life’s Most<br><em>Valuable Possession</em>',
            'intro' => ['Every second is an opportunity, every milestone tells a story, and every achievement deserves to be remembered.', 'FABIUS exists to transform moments into memories through timepieces designed to accompany journeys and become treasured across generations.'],
            'quote' => 'Luxury is not only the object. It is the emotion it carries, the precision behind its creation and the legacy it leaves.',
            'sections' => [
                ['number' => '01', 'title' => 'Timeless Craftsmanship', 'body' => ['Meticulous attention to proportion, materials and finish gives each watch a composed presence that outlives passing trends.']],
                ['number' => '02', 'title' => 'Elegant Design', 'body' => ['Minimal, versatile aesthetics allow a FABIUS timepiece to move naturally between milestones and everyday moments.']],
                ['number' => '03', 'title' => 'Precision & Trust', 'body' => ['Reliable performance, clear product information and considered after-sales support form the foundation of a lasting relationship.']],
                ['number' => '04', 'title' => 'Legacy', 'body' => ['A meaningful watch gathers stories as it travels—becoming more personal with every year it is worn.']],
            ],
            'links' => [['label' => 'Explore the House', 'href' => 'house-of-fabius.php'], ['label' => 'Discover Craftsmanship', 'href' => 'craftsmanship.php']],
        ],
        'craftsmanship' => [
            'eyebrow' => 'Made With Intention', 'title' => 'The Discipline of<br>Craftsmanship',
            'description' => 'Precision engineering, refined finishing and materials selected for enduring clarity.',
            'hero' => $assets . 'hero-resolute-black.webp',
            'intro_title' => 'Every Detail Has<br><em>A Purpose</em>',
            'intro' => ['Craftsmanship begins with proportion: the relationship between case, dial, movement and the wrist. It continues through the clarity of the crystal, the character of each finish and the way every component works as one.', 'FABIUS pairs expressive design with practical durability, from sapphire crystal and stainless steel architecture to carefully selected automatic and quartz movements.'],
            'sections' => [
                ['number' => '01', 'title' => 'Sapphire Clarity', 'body' => ['Flat sapphire crystal offers exceptional transparency and strong resistance to everyday scratches, preserving a clear view of the dial beneath.']],
                ['number' => '02', 'title' => 'Considered Materials', 'body' => ['Stainless steel cases, tactile leather straps and integrated bracelets are selected to balance visual presence, comfort and longevity.']],
                ['number' => '03', 'title' => 'Refined Finishing', 'body' => ['Polished accents, applied markers and carefully controlled surfaces create contrast without unnecessary ornament.']],
                ['number' => '04', 'title' => 'Purposeful Testing', 'body' => ['Each product specification communicates the movement, water resistance and construction expected of the timepiece. Care and service guidance helps preserve that performance.']],
            ],
            'links' => [['label' => 'Automatic Watches', 'href' => 'automatic-watches.php'], ['label' => 'Quartz Watches', 'href' => 'quartz-watches.php'], ['label' => 'Care Guide', 'href' => 'watch-care-guide.php']],
        ],
        'timekeeping' => [
            'eyebrow' => 'The Art of Timekeeping', 'title' => 'Mechanics,<br>Made Meaningful',
            'description' => 'Two expressions of precision, united by considered design.',
            'hero' => $assets . 'hero-resolute-blue.webp',
            'intro_title' => 'A Movement for<br><em>Every Rhythm</em>',
            'intro' => ['Mechanical and quartz movements express time differently. One reveals energy through an intricate living mechanism; the other delivers composed accuracy through modern engineering.', 'Neither is defined by spectacle alone. The right movement is the one that suits how its wearer lives, values and experiences time.'],
            'sections' => [
                ['number' => '01', 'title' => 'Automatic', 'body' => ['An automatic movement is powered by motion and rewards a close relationship with the watch. In the Resolute collection, skeleton architecture turns its mechanics into a continuously changing display.']],
                ['number' => '02', 'title' => 'Quartz Slim', 'body' => ['Quartz Slim timekeeping offers dependable accuracy and effortless daily ownership. The Lumina collection pairs slim quartz movements with refined 30mm proportions and luminous mother-of-pearl dials.']],
                ['number' => '03', 'title' => 'Beyond Measurement', 'body' => ['A timepiece becomes meaningful through use: the meeting it accompanies, the celebration it marks, and the memories gathered around it.']],
            ],
            'links' => [['label' => 'Explore Automatic', 'href' => 'automatic-watches.php'], ['label' => 'Explore Quartz', 'href' => 'quartz-watches.php']],
        ],
        'care' => [
            'eyebrow' => 'Care & Service', 'title' => 'Watch Care<br>Guide',
            'description' => 'Simple rituals that help preserve the appearance and performance of your timepiece.',
            'hero' => $assets . 'collection-resolute-black.webp',
            'intro_title' => 'Preserve What<br><em>Accompanies You</em>',
            'intro' => ['A fine watch is designed to be worn. Thoughtful everyday care protects its finish, movement, strap and water resistance so it can continue marking meaningful moments.'],
            'sections' => [
                ['number' => '01', 'title' => 'Daily Care', 'body' => ['Wipe the case and crystal with a clean, soft, dry cloth after wear. Avoid abrasive materials, solvents, cosmetics and prolonged exposure to perspiration.']],
                ['number' => '02', 'title' => 'Water & Moisture', 'body' => ['Water resistance is not permanent and may be affected by impact, ageing seals or an unsecured crown. Never operate the crown in water. Leather straps should be kept dry even when the watch case is water resistant.']],
                ['number' => '03', 'title' => 'Magnetism & Impact', 'body' => ['Keep the watch away from strong magnetic fields and avoid shocks, drops or intense vibration. If timekeeping changes unexpectedly, arrange an assessment.']],
                ['number' => '04', 'title' => 'Automatic Ownership', 'body' => ['Wear naturally or wind only as instructed for the specific movement. If the watch has stopped, set it carefully and allow regular motion to restore its reserve.']],
                ['number' => '05', 'title' => 'Quartz Ownership', 'body' => ['Have a depleted battery replaced promptly by an appropriate service professional to reduce the risk of leakage or movement damage.']],
                ['number' => '06', 'title' => 'Storage', 'body' => ['Store the watch separately in its box, away from direct sunlight, humidity and extreme temperature changes. Close the clasp or lay leather straps flat without forcing a tight bend.']],
            ],
            'note' => 'These are general care principles. Always follow the specifications and instructions supplied with your exact FABIUS model.',
            'links' => [['label' => 'Warranty & Service', 'href' => 'warranty-service.php'], ['label' => 'Frequently Asked Questions', 'href' => 'faqs.php']],
        ],
        'warranty' => [
            'eyebrow' => 'Care & Service', 'title' => 'Warranty<br>& Service',
            'description' => 'Clear guidance for ownership, assessment and after-sales support.',
            'hero' => $assets . 'model-resolute-blue.webp',
            'intro_title' => 'Support Beyond<br><em>The First Moment</em>',
            'intro' => ['A lasting timepiece deserves attentive support. Keep your proof of purchase, authentication information and warranty card together, as these may be required when requesting an assessment.'],
            'sections' => [
                ['number' => '01', 'title' => 'Before Requesting Service', 'body' => ['Record the model name, purchase date, retailer and a concise description of the issue. Clear photographs can help the service team understand visible concerns before inspection.']],
                ['number' => '02', 'title' => 'Warranty Assessment', 'body' => ['Warranty eligibility depends on the terms supplied with the watch, proof of purchase and technical inspection. Accidental damage, misuse, normal wear and unauthorized intervention may fall outside coverage.']],
                ['number' => '03', 'title' => 'Purchased via IndieKonnect', 'body' => ['For transaction records, delivery questions or return eligibility, begin with IndieKonnect, the official retail portal through which the purchase was completed. Product assessment and warranty support may require coordination with FABIUS.']],
                ['number' => '04', 'title' => 'Preserving Authenticity', 'body' => ['Use authorized service routes and retain original documentation. Unauthorized repairs or replacement components can affect performance, appearance and warranty eligibility.']],
            ],
            'note' => 'Final warranty duration, exclusions, service addresses and turnaround commitments must be confirmed in the warranty documentation supplied with each product.',
            'links' => [['label' => 'Contact FABIUS', 'href' => 'contact.php'], ['label' => 'Visit IndieKonnect ↗', 'href' => 'https://www.indiekonnect.com/', 'external' => true]],
        ],
        'partner' => [
            'eyebrow' => 'Grow With FABIUS', 'title' => 'Become<br>A Partner',
            'description' => 'For retailers and collaborators who share our commitment to considered luxury.',
            'hero' => $assets . 'promo-mens-watch.webp',
            'intro_title' => 'A Shared Standard<br><em>Of Excellence</em>',
            'intro' => ['FABIUS seeks thoughtful partnerships built on presentation, trust and long-term value. We welcome conversations with established retailers, hospitality partners, corporate gifting teams and aligned luxury businesses.'],
            'sections' => [
                ['number' => '01', 'title' => 'Retail Partnerships', 'body' => ['Introduce FABIUS through an environment that respects product knowledge, brand presentation and attentive client service.']],
                ['number' => '02', 'title' => 'Corporate & Milestone Gifting', 'body' => ['Explore considered programmes for achievements, leadership recognition and meaningful institutional milestones.']],
                ['number' => '03', 'title' => 'Brand Collaborations', 'body' => ['We consider selective collaborations that share our values of craftsmanship, elegance, authenticity and enduring relevance.']],
            ],
            'note' => 'Partnership approval, commercial terms and territory availability are evaluated individually.',
            'links' => [['label' => 'Start a Conversation', 'href' => 'contact.php?topic=partnership']],
        ],
        'contact' => [
            'eyebrow' => 'Contact FABIUS', 'title' => 'Begin A<br>Conversation',
            'description' => 'Product guidance, brand enquiries and partnership conversations.',
            'hero' => $assets . 'feature-story-portrait.webp',
            'intro_title' => 'The Right Route,<br><em>Without Delay</em>',
            'intro' => ['Choose the enquiry route that best matches your request. Purchase, payment, delivery and retailer-return questions should be directed to IndieKonnect, where the transaction is completed.'],
            'sections' => [
                ['number' => '01', 'title' => 'Product Guidance', 'body' => ['Explore specifications on each product page or search the collection by model, movement and colour.']],
                ['number' => '02', 'title' => 'Orders & Delivery', 'body' => ['For an existing purchase, contact IndieKonnect with your order reference so its retail support team can access the transaction.']],
                ['number' => '03', 'title' => 'Warranty & Service', 'body' => ['Review the warranty guidance and prepare your model details, purchase record and photographs before requesting an assessment.']],
                ['number' => '04', 'title' => 'Partnerships', 'body' => ['Retail, corporate gifting and collaboration enquiries can begin through the Become a Partner page.']],
            ],
            'note' => 'FABIUS contact email, telephone number, business address and service locations must be inserted after client confirmation.',
            'links' => [['label' => 'Retail Support ↗', 'href' => 'https://www.indiekonnect.com/', 'external' => true], ['label' => 'Warranty & Service', 'href' => 'warranty-service.php'], ['label' => 'Become a Partner', 'href' => 'become-a-partner.php']],
        ],
        'privacy' => [
            'eyebrow' => 'Legal', 'title' => 'Privacy<br>Policy',
            'description' => 'How information is handled across the FABIUS showcase experience.',
            'hero' => $assets . 'manifesto-watch-background.webp', 'compact' => true,
            'intro_title' => 'Privacy With<br><em>Clarity</em>',
            'intro' => ['This website is designed for brand discovery and product showcasing. Purchases are completed on IndieKonnect, whose privacy practices apply to information submitted during checkout or account activity on that portal.'],
            'sections' => [
                ['title' => 'Information We May Receive', 'body' => ['Information submitted voluntarily through future enquiry or partnership forms may include your name, contact details and message. Basic technical information may also be processed for security, performance and audience measurement when those services are enabled.']],
                ['title' => 'How Information Is Used', 'body' => ['Information may be used to respond to enquiries, provide requested support, maintain website security, understand site performance and comply with applicable obligations. It should not be used for unrelated purposes without an appropriate basis.']],
                ['title' => 'Retail Portal Data', 'body' => ['FABIUS does not process checkout on this website. Payment, shipping and order information submitted to IndieKonnect is governed by that portal’s own notices and terms.']],
                ['title' => 'Cookies & Analytics', 'body' => ['Essential technologies may support website operation. If non-essential analytics or marketing tools are introduced, the site should provide an appropriate notice and choice mechanism before deployment.']],
                ['title' => 'Your Choices', 'body' => ['You may request information about personal data handled directly by FABIUS, subject to identity verification and applicable law. Confirmed privacy contact details must be published before forms or analytics are activated.']],
            ],
            'note' => 'Draft website copy for client and legal review. Insert the legal entity name, registered address, privacy contact, retention periods, vendors and effective date before publication.',
        ],
        'terms' => [
            'eyebrow' => 'Legal', 'title' => 'Terms &<br>Conditions', 'description' => 'Terms governing use of the FABIUS showcase website.',
            'hero' => $assets . 'hero-resolute-black.webp', 'compact' => true,
            'intro_title' => 'A Clear<br><em>Digital Experience</em>',
            'intro' => ['By using this website, visitors agree to use its content and features lawfully. The website presents FABIUS products and brand information; it does not itself complete retail transactions.'],
            'sections' => [
                ['title' => 'Showcase Scope', 'body' => ['Product pages provide descriptive and technical information. Availability, final pricing, payment and order acceptance are handled through the linked retail portal.']],
                ['title' => 'Accuracy & Availability', 'body' => ['FABIUS aims to keep information accurate but imagery, colour and specifications may appear differently across devices. Product details should be confirmed on the applicable retail listing before purchase.']],
                ['title' => 'Intellectual Property', 'body' => ['Brand names, text, graphics, photography and interface elements are protected materials and may not be reproduced or commercially used without authorization.']],
                ['title' => 'External Services', 'body' => ['Links to IndieKonnect and other third-party services lead to independently operated environments. Their terms, policies and transaction processes apply once you leave this website.']],
                ['title' => 'Acceptable Use', 'body' => ['Visitors must not interfere with website security, attempt unauthorized access, misuse content or use automated systems in a manner that disrupts normal operation.']],
            ],
            'note' => 'Draft website copy for client and legal review. Add legal entity, jurisdiction, contact and effective-date information before launch.',
        ],
        'shipping' => [
            'eyebrow' => 'Client Care', 'title' => 'Shipping<br>Policy', 'description' => 'Understanding how delivery works when purchasing a FABIUS timepiece.',
            'hero' => $assets . 'collection-resolute-brown.webp', 'compact' => true,
            'intro_title' => 'Purchasing Through<br><em>Our Retail Portal</em>',
            'intro' => ['The FABIUS website does not accept or fulfil orders. Selecting an acquisition link takes you to IndieKonnect, where availability, delivery options, charges and estimated timelines are presented.'],
            'sections' => [
                ['title' => 'Order Confirmation', 'body' => ['Your order confirmation and transaction reference are issued by IndieKonnect. Keep those details for delivery questions or support requests.']],
                ['title' => 'Delivery Estimates', 'body' => ['Delivery timing may depend on destination, availability, verification and courier operations. Refer to the estimate displayed by IndieKonnect at purchase.']],
                ['title' => 'Address & Tracking', 'body' => ['Address changes and tracking enquiries should be raised promptly with the retail portal because FABIUS cannot access or alter retailer order records through this showcase site.']],
                ['title' => 'Inspecting Delivery', 'body' => ['Examine the parcel on arrival and retain the packaging, documentation and transaction record. Report visible transit concerns through the retailer’s stated support process without unnecessary delay.']],
            ],
            'note' => 'IndieKonnect’s published checkout and shipping terms govern each purchase. This page must be reconciled with the retailer’s final policy before launch.',
            'links' => [['label' => 'Visit IndieKonnect ↗', 'href' => 'https://www.indiekonnect.com/', 'external' => true], ['label' => 'Returns & Exchanges', 'href' => 'returns-exchanges.php']],
        ],
        'returns' => [
            'eyebrow' => 'Client Care', 'title' => 'Returns &<br>Exchanges', 'description' => 'The correct route for purchase-related return and exchange requests.',
            'hero' => $assets . 'collection-resolute-blue.webp', 'compact' => true,
            'intro_title' => 'Start With The<br><em>Retailer of Record</em>',
            'intro' => ['Because purchases are completed through IndieKonnect, return eligibility, exchange availability, deadlines and refund processing are governed by the terms shown by that portal at the time of purchase.'],
            'sections' => [
                ['title' => 'Before Making a Request', 'body' => ['Keep the watch unworn where required, preserve all packaging and documentation, and locate the original order reference. Do not remove protective elements until you are satisfied with the product.']],
                ['title' => 'Retail Return Requests', 'body' => ['Contact IndieKonnect through its official support route and follow its authorization and shipping instructions. Do not send a product to an address that has not been confirmed for your case.']],
                ['title' => 'Fault or Performance Concern', 'body' => ['A suspected manufacturing or performance issue may require technical assessment rather than a standard return. Review Warranty & Service guidance and provide clear details of the concern.']],
                ['title' => 'Refund Processing', 'body' => ['Where a refund is approved, method and timing are handled by the retailer and payment provider under their applicable process.']],
            ],
            'note' => 'This page explains the FABIUS–IndieKonnect responsibility boundary and does not replace the retailer’s binding return terms.',
            'links' => [['label' => 'Retail Support ↗', 'href' => 'https://www.indiekonnect.com/', 'external' => true], ['label' => 'Warranty & Service', 'href' => 'warranty-service.php']],
        ],
        'faqs' => [
            'eyebrow' => 'Care & Service', 'title' => 'Frequently Asked<br>Questions', 'description' => 'Essential guidance for discovering, purchasing and caring for FABIUS.',
            'hero' => $assets . 'visit-watch-background.webp', 'compact' => true,
            'intro_title' => 'Answers With<br><em>Clarity</em>',
            'intro' => ['Find concise answers to common questions about collections, movements, purchasing and ownership.'],
            'faqs' => [
                ['q' => 'Can I purchase directly from this website?', 'a' => 'No. This is the official FABIUS showcase experience. Product acquisition is completed through IndieKonnect, our linked retail portal.'],
                ['q' => 'What is the difference between automatic and quartz?', 'a' => 'Automatic watches use a mechanical movement powered through motion and stored energy. Quartz watches use an electronic oscillator and battery for dependable, low-maintenance accuracy.'],
                ['q' => 'Where can I find specifications?', 'a' => 'Each product page lists its movement, case size, materials, water resistance, crystal and other available specifications.'],
                ['q' => 'Are FABIUS watches water resistant?', 'a' => 'Current models display their rated water resistance on the product page. Water resistance is not permanent, and leather straps should still be protected from moisture.'],
                ['q' => 'Who handles delivery and returns?', 'a' => 'IndieKonnect handles the retail transaction. Its order, shipping and return process applies to purchases completed there.'],
                ['q' => 'How do I request warranty support?', 'a' => 'Keep your proof of purchase and warranty documentation, then review the Warranty & Service page for the information needed for an assessment.'],
                ['q' => 'How should I care for my watch?', 'a' => 'Clean it with a soft dry cloth, avoid impact, chemicals and strong magnetic fields, respect its water-resistance rating and store it carefully when not worn.'],
                ['q' => 'Can I become a retail or corporate partner?', 'a' => 'Yes. Visit Become a Partner for the types of relationships FABIUS considers and the information to prepare.'],
            ],
            'links' => [['label' => 'Watch Care Guide', 'href' => 'watch-care-guide.php'], ['label' => 'Contact FABIUS', 'href' => 'contact.php']],
        ],
    ];
}

function fabius_editorial_page(string $key): ?array
{
    $pages = fabius_editorial_pages();
    return $pages[$key] ?? null;
}
