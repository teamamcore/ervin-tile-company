<?php

use App\Support\TileServices;

it('renders the home page', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Ervin Tile Company')
        ->assertSee('Material first.');
});

it('renders the services page with every service', function () {
    $response = $this->get(route('services'))->assertOk();

    foreach (TileServices::all() as $service) {
        $response->assertSee($service['title']);
    }
});

it('renders the how it works page', function () {
    $this->get(route('how-it-works'))
        ->assertOk()
        ->assertSee('Consultation')
        ->assertSee('Final walkthrough');
});

it('renders the gallery page', function () {
    $this->get(route('gallery'))
        ->assertOk()
        ->assertSee('One room at a time.');
});

it('renders the about page', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('Craftsmanship you can trust.');
});

it('renders the faq page', function () {
    $this->get(route('faq'))
        ->assertOk()
        ->assertSee('Common questions.');
});

it('renders the contact page', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertSee('Tell us about the room.');
});
