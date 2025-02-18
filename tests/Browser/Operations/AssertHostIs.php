<?php

declare(strict_types=1);

test('assert host is', function () {
    $this->visit('http://localhost:9357')
        ->assertHostIs('localhost:9357');
});
// autoload
// bindable
// cachable
// chunkable
// configurable
// deferred
// dereference
// deserializable
// downloadable
// extensible
// fluent
// immutable
// invisible
// iterable
// reusable
// serializable
// subscribable
