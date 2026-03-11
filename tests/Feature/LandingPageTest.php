<?php

test('landing page renders core sections', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('MARK CLEO CALBANG')
        ->assertSee('BSIT - Internship Trainee')
        ->assertSee('Central Visayas Information Sharing Network (CVISNET) Foundation, Inc.')
        ->assertSee('Partners')
        ->assertSee('History')
        ->assertSee('Organizational Chart')
        ->assertSee('Nature of Business / Products')
        ->assertSee('Processes Involved')
        ->assertSee('Activities')
        ->assertSee('Skills')
        ->assertSee('Reflection')
        ->assertSee('Recommendations')
        ->assertSee('Appendices')
        ->assertSee('About')
        ->assertSee('Toggle dark mode');
});

test('landing page includes navigation anchors', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('href="#home"', false)
        ->assertSee('href="#company"', false)
        ->assertSee('href="#activities"', false)
        ->assertSee('href="#skills"', false)
        ->assertSee('href="#reflection"', false)
        ->assertSee('href="#recommendations"', false)
        ->assertSee('href="#appendices"', false)
        ->assertSee('href="#about"', false);
});

test('landing page includes mobile navigation shell', function () {
    $response = $this->get('/');

    $response
        ->assertOk()
        ->assertSee('x-data="{ mobileNavOpen:false }"', false)
        ->assertSee('x-show="mobileNavOpen"', false)
        ->assertSee('Menu');
});
