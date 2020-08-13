<?php

namespace Baleghsefat\User\Rules;

use Baleghsefat\User\Models\User;
use Illuminate\Contracts\Validation\Rule;

class UniqueInUsersRule implements Rule
{
    /**
     * @var string
     */
    private $fieldName;

    public function __construct(string $fieldName)
    {
        $this->fieldName = $fieldName;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return User::where($this->fieldName, $value)->count() == 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return ' وارد شده قبلا در سیستم ثبت شده است.' . $this->fieldName;
    }
}
