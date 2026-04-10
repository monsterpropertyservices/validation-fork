<?php

use Sirius\Validation\Rule\AlphaNumeric as Rule;

beforeEach(function () {
    $this->rule = new Rule();
});

test('validation', function () {
    expect($this->rule->validate('abc123'))->toBeTrue();
    expect($this->rule->validate('abc 123'))->toBeTrue();
    expect($this->rule->validate(0))->toBeTrue();
    expect($this->rule->validate('abc-123'))->toBeFalse();
    expect($this->rule->validate('abc!'))->toBeFalse();
});
