<?php

use Asciito\Browser\Browser;

it('browse simple page', function () {
    $browser = app(Browser::class);

    $browser->visit('https://laravel.com')
        ->assertTitle('Laravel - The PHP Framework For Web Artisans')
        ->assertDontSee('The PHP Framework for Web Artisans');
});
