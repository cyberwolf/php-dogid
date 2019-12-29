<?php

namespace BSBV\DogID\Model;

class Dog
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var \BSBV\DogID\Model\Owner
     */
    private $owner;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string|null
     */
    private $passportNumber;

    /**
     * @var string|null
     */
    private $statusDate;

    /**
     * @var string
     */
    private $breed;

    /**
     * @var string|null
     */
    private $coat;

    /**
     * @var string
     */
    private $sex;

    /**
     * @var string
     */
    private $birthDate;

    /**
     * @var string
     */
    private $registrationDate;

    /**
     * @var Identifier
     */
    private $identifier1;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return \BSBV\DogID\Model\Owner
     */
    public function getOwner(): \BSBV\DogID\Model\Owner
    {
        return $this->owner;
    }

    /**
     * @param \BSBV\DogID\Model\Owner $owner
     */
    public function setOwner(\BSBV\DogID\Model\Owner $owner): void
    {
        $this->owner = $owner;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getPassportNumber(): ?string
    {
        return $this->passportNumber;
    }

    /**
     * @param string|null $passportNumber
     */
    public function setPassportNumber(?string $passportNumber): void
    {
        $this->passportNumber = $passportNumber;
    }

    /**
     * @return string|null
     */
    public function getStatusDate(): ?string
    {
        return $this->statusDate;
    }

    /**
     * @param string|null $statusDate
     */
    public function setStatusDate(?string $statusDate): void
    {
        $this->statusDate = $statusDate;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    /**
     * @return string|null
     */
    public function getCoat(): ?string
    {
        return $this->coat;
    }

    /**
     * @param string|null $coat
     */
    public function setCoat(?string $coat): void
    {
        $this->coat = $coat;
    }

    /**
     * @return string
     */
    public function getSex(): string
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     */
    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate(string $birthDate): void
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return string
     */
    public function getRegistrationDate(): string
    {
        return $this->registrationDate;
    }

    /**
     * @param string $registrationDate
     */
    public function setRegistrationDate(string $registrationDate): void
    {
        $this->registrationDate = $registrationDate;
    }

    /**
     * @return \BSBV\DogID\Model\Identifier
     */
    public function getIdentifier1(): \BSBV\DogID\Model\Identifier
    {
        return $this->identifier1;
    }

    /**
     * @param \BSBV\DogID\Model\Identifier $identifier1
     */
    public function setIdentifier1(\BSBV\DogID\Model\Identifier $identifier1
    ): void {
        $this->identifier1 = $identifier1;
    }

    /**
     * @return \BSBV\DogID\Model\Identifier|null
     */
    public function getIdentifier2(): ?\BSBV\DogID\Model\Identifier
    {
        return $this->identifier2;
    }

    /**
     * @param \BSBV\DogID\Model\Identifier|null $identifier2
     */
    public function setIdentifier2(?\BSBV\DogID\Model\Identifier $identifier2
    ): void {
        $this->identifier2 = $identifier2;
    }

    /**
     * @var \BSBV\DogID\Model\Identifier|null
     */
    private $identifier2;


}