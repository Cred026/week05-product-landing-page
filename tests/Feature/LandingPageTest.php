<?php

test('visitors can explore all landing page sections and subscription plans', function () {
    $response = $this->get(route('home'));

    $response->assertSeeTextInOrder([
        'Good coffee.',
        'Your morning ritual.',
        'Less reordering.',
        'Find your kind of coffee.',
        'Golden Ticket',
        '₱1,250',
        'Legazpi',
        '₱1,350',
        'Home Brew',
        '₱1,650',
        'A place in your everyday.',
        'Before the first cup.',
        'Tomorrow starts',
    ]);
});

test('visitors are directed to the real business for subscriptions and contact', function () {
    $response = $this->get(route('home'));

    $response
        ->assertSee('href="https://store.yardstickcoffee.com/products/monthly-subscription-golden-ticket-250g-x-2-bags-or-1kg-x-1-bag"', false)
        ->assertSee('href="https://store.yardstickcoffee.com/products/monthly-subscription-legazpi-250g-x-2-bags-or-1kg-x1-bag"', false)
        ->assertSee('href="https://store.yardstickcoffee.com/account/login"', false)
        ->assertSee('href="https://store.yardstickcoffee.com/account/register"', false)
        ->assertSee('href="mailto:sales@yardstickcoffee.com"', false)
        ->assertSeeText('Independent educational concept.')
        ->assertSeeText('Names, reviews, and roles are fictional;')
        ->assertSeeText('Illustrative dashboard preview');
});

test('landing page escapes editable customer story content', function () {
    config()->set('landing.testimonials', [[
        'name' => '<script>alert("unsafe")</script>',
        'position' => 'Home brewer',
        'photo' => 'reviewer-ana.jpg',
        'review' => '<img src=x onerror=alert(1)>',
    ]]);

    $response = $this->get(route('home'));

    $response
        ->assertSee('<script>alert("unsafe")</script>')
        ->assertDontSee('<script>alert("unsafe")</script>', false)
        ->assertSee('<img src=x onerror=alert(1)>')
        ->assertDontSee('<img src=x onerror=alert(1)>', false);
});
