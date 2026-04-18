<?php
declare(strict_types=1);

namespace Sirius\Validation\Rule;

class AlphaNumeric extends AbstractRule
{
    const MESSAGE = 'This input must contain only letters and digits';

    const LABELED_MESSAGE = '{label} must contain only letters and digits';

    public function validate(mixed $value, ?string $valueIdentifier = null): bool
    {
        $this->value = $value;
        // Coerce to string first so str_replace doesn't receive a non-string value under strict_types
        $this->success = (bool)ctype_alnum(str_replace(' ', '', (string)$value));

        return $this->success;
    }
}
