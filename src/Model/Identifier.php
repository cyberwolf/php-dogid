<?php

namespace BSBV\DogID\Model;

class Identifier
{
    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $identifierType;

    /**
     * @var string
     */
    private $identifierLocation;

    /**
     * @return string
     */
    public function getIdentifier(): string
    {
        return $this->identifier;
    }

    /**
     * @param string $identifier
     */
    public function setIdentifier(string $identifier): void
    {
        $this->identifier = $identifier;
    }

    /**
     * @return string
     */
    public function getIdentifierType(): string
    {
        return $this->identifierType;
    }

    /**
     * @param string $identifierType
     */
    public function setIdentifierType(string $identifierType): void
    {
        $this->identifierType = $identifierType;
    }

    /**
     * @return string
     */
    public function getIdentifierLocation(): string
    {
        return $this->identifierLocation;
    }

    /**
     * @param string $identifierLocation
     */
    public function setIdentifierLocation(string $identifierLocation): void
    {
        $this->identifierLocation = $identifierLocation;
    }
}