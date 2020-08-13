<?php

namespace Baleghsefat\User\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxCharacterRegisterUserRule implements Rule
{
    private $maxEmail = 100;
    private $maxMobile = 15;
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
        return $this->fieldName == 'email' ?
            strlen($this->fieldName) <= $this->maxEmail :
            strlen($this->fieldName) <= $this->maxMobile;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        $maxCharacter = $this->fieldName == 'email' ? $this->maxEmail : $this->maxMobile;
        return 'حداکثر تعداد کاراکتر برای ' . $this->fieldName . $maxCharacter . 'می‌باشد';
    }
}
