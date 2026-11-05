<?php

use App\Support\TileServices;

it('renders the home page', function () {
    $this->get(route('home'))
        ->assertOk()
        ->assertSee('Ervin Tile Company')
        ->assertSee('Get a Free Quote');
});

it('renders the services page with every service', function () {
    $response = $this->get(route('services'))->assertOk();

    foreach (TileServices::all() as $service) {
        $response->assertSee($service['title']);
    }
});

it('renders the gallery page', function () {
    $this->get(route('gallery'))
        ->assertOk()
        ->assertSee('Our Work');
});

it('renders the about page', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('Craftsmanship You Can Trust');
});

it('renders the contact page', function () {
    $this->get(route('contact'))
        ->assertOk()
        ->assertSee('Get a Free Quote');
});
