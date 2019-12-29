<?php

namespace BSBV\DogID\Model;

class Owner
{
    /**
     * @var string|null
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var \BSBV\DogID\Model\Address
     */
    private $address;

    /**
     * @var string|null
     */
    private $accreditationNumber;

    /**
     * @var bool
     */
    private $confidential;

    /**
     * @var \BSBV\DogID\Model\ContactData[]
     */
    private $contactData;

    /**
     * @return string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * @param string|null $firstname
     */
    public function setFirstname(?string $firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    /**
     * @return \BSBV\DogID\Model\Address
     */
    public function getAddress(): \BSBV\DogID\Model\Address
    {
        return $this->address;
    }

    /**
     * @param \BSBV\DogID\Model\Address $address
     */
    public function setAddress(\BSBV\DogID\Model\Address $address): void
    {
        $this->address = $address;
    }

    /**
     * @return string|null
     */
    public function getAccreditationNumber(): ?string
    {
        return $this->accreditationNumber;
    }

    /**
     * @param string|null $accreditationNumber
     */
    public function setAccreditationNumber(?string $accreditationNumber): void
    {
        $this->accreditationNumber = $accreditationNumber;
    }

    /**
     * @return bool
     */
    public function isConfidential(): bool
    {
        return $this->confidential;
    }

    /**
     * @param bool $confidential
     */
    public function setConfidential(bool $confidential): void
    {
        $this->confidential = $confidential;
    }

    /**
     * @return \BSBV\DogID\Model\ContactData[]
     */
    public function getContactData(): array
    {
        return $this->contactData;
    }

    public function getMobile(): ?string
    {
        foreach ($this->contactData as $contactData) {
            if ($contactData->isMobile()) {
                return $contactData->getValue();
            }
        }

        return null;
    }

    public function addContactData(ContactData $contactData): void
    {
        $this->contactData[] = $contactData;
    }

    public function hasContactData(): bool
    {
        return count($this->contactData) > 0;
    }

    /**
     * @param \BSBV\DogID\Model\ContactData[] $contactData
     */
    public function setContactData(array $contactData): void
    {
        $this->contactData = $contactData;
    }
}