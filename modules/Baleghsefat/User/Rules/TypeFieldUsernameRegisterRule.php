<?php

namespace Baleghsefat\User\Rules;

use Baleghsefat\User\Models\User;
use Illuminate\Contracts\Validation\Rule;

class TypeFieldUsernameRegisterRule implements Rule
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
     * email validated in RegisterController, so do not check here.
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->fieldName == 'email') return true;

        $mobileRegex = '~^(\+?98|0098|0)9\d{9}$~';
        preg_match($mobileRegex, $value, $matches);
        return !empty($matches);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'ایمیل و یا شماره همراه خود را به درستی وارد کنید.';
    }
}
