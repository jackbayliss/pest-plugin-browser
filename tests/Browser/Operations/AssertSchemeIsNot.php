<?php

declare(strict_types=1);

test('assert scheme is not', function () {
    $this->visit('http://localhost')
        ->assertSchemeIsNot('https');
});
