<?php

return [
    'features' => [
        ['icon' => 'beans', 'title' => 'A coffee for your palate', 'description' => 'Stay with a comforting blend or explore a seasonal rotation. Find the flavor you look forward to.'],
        ['icon' => 'truck', 'title' => 'One less thing to remember', 'description' => 'A monthly subscription keeps your coffee routine going, with delivery arranged through the official store.'],
        ['icon' => 'refresh', 'title' => 'Room for a change of plans', 'description' => 'Going away or working through a full shelf? Use your subscription email to skip a month or cancel.'],
        ['icon' => 'coffee', 'title' => 'Brew it your way', 'description' => 'Choose the grind option that suits your equipment on the product page, from whole beans to a ready-to-brew grind.'],
        ['icon' => 'people', 'title' => 'More than a bag of beans', 'description' => 'Coffee subscriptions include Yardstick Coffee Club membership, with access to member perks and the coffee community.'],
        ['icon' => 'gift', 'title' => 'A thoughtful kind of gift', 'description' => 'Make someone’s morning. Add the recipient’s details at the official checkout to send a subscription their way.'],
    ],

    'plans' => [
        [
            'name' => 'Golden Ticket',
            'price' => 1250,
            'quantity' => '2 × 250g bags, every month',
            'description' => 'For the everyday cup. Chocolate sweetness with a little citrus brightness.',
            'features' => ['Dark chocolate, mandarin & toffee', 'Choose your grind at checkout', 'Coffee Club membership', 'Skip or cancel by email'],
            'href' => 'https://store.yardstickcoffee.com/products/monthly-subscription-golden-ticket-250g-x-2-bags-or-1kg-x-1-bag',
            'highlight' => false,
        ],
        [
            'name' => 'Legazpi',
            'price' => 1350,
            'quantity' => '2 × 250g bags, every month',
            'description' => 'For a fruit-forward morning. A balanced blend named for the neighborhood.',
            'features' => ['Roasted almonds, cherries & grapes', 'Choose your grind at checkout', 'Coffee Club membership', 'Skip or cancel by email'],
            'href' => 'https://store.yardstickcoffee.com/products/monthly-subscription-legazpi-250g-x-2-bags-or-1kg-x1-bag',
            'highlight' => true,
        ],
        [
            'name' => 'Home Brew',
            'price' => 1650,
            'quantity' => '2 × 200g bags, every month',
            'description' => 'For the curious brewer. A changing selection to keep your routine interesting.',
            'features' => ['Rotating seasonal filter coffees', 'Two coffees to discover', 'Coffee Club membership', 'Skip or cancel by email'],
            'href' => 'https://store.yardstickcoffee.com/collections/subscriptions',
            'highlight' => false,
        ],
    ],

    'testimonials' => [
        ['name' => 'Ana Reyes', 'position' => 'Designer & home brewer', 'photo' => 'reviewer-ana.jpg', 'review' => 'My ideal morning is a quiet kitchen and a coffee I already know I’ll enjoy. A monthly delivery would make that little routine easier.'],
        ['name' => 'Miguel Santos', 'position' => 'Small business owner', 'photo' => 'reviewer-miguel.jpg', 'review' => 'I like a coffee that works just as well on a busy Monday as it does on a slow Sunday. Golden Ticket would be my first pick.'],
        ['name' => 'Bea Cruz', 'position' => 'Coffee enthusiast', 'photo' => 'reviewer-bea.jpg', 'review' => 'Trying a different filter coffee is my favorite part of brewing at home. The rotating selection is the plan I’d explore.'],
    ],

    'questions' => [
        ['question' => 'How do I start a subscription?', 'answer' => 'Choose a plan below and follow the Subscribe link to Yardstick’s official store. You can review available options, current prices, payment terms, and delivery details before purchasing.'],
        ['question' => 'Can I skip a month or cancel?', 'answer' => 'Yardstick’s subscription FAQ explains how to skip or cancel using the links in your subscription email. Check the official terms for already-paid orders.'],
        ['question' => 'Do I need a coffee grinder?', 'answer' => 'Not necessarily. Check the grind-size options on your chosen product. Golden Ticket and Legazpi offer several grind options for different brewing methods.'],
        ['question' => 'Is this the official Yardstick website?', 'answer' => 'No. This is an independent educational landing-page concept for ITST 302. Purchases, account registration, and subscription management take place on Yardstick’s official website. The dashboard and customer stories here are illustrative.'],
    ],
];
