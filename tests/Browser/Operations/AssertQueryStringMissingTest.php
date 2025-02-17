<?php

declare(strict_types=1);

test('assert query string does not have the given query param with value', function () {
    $this->visit('/?q=test')
        ->assertQueryStringMissing('q', 'test-1');
});

test('assert query string does not have the only given the query param', function () {
    $this->visit('/?q=test')
        ->assertQueryStringMissing('s');
});
