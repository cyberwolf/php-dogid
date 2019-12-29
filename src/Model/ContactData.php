<?php

namespace BSBV\DogID\Model;

class ContactData
{
    /**
     * @var string
     */
    private $value;

    /**
     * @var string
     */
    private $contactType;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getContactType(): string
    {
        return $this->contactType;
    }

    /**
     * @param string $contactType
     */
    public function setContactType(string $contactType): void
    {
        $this->contactType = $contactType;
    }

    public function isMobile(): bool
    {
        return $this->contactType === 'mobile';
    }
}