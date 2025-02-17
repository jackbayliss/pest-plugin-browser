<?php

declare(strict_types=1);

test('assert query string has a giving query param with value', function () {
    $this->visit('/?q=test')
        ->assertQueryStringHas('q', 'test');
});

test('assert query string has a giving only the query param', function () {
    $this->visit('/?q=test')
        ->assertQueryStringHas('q');
});
