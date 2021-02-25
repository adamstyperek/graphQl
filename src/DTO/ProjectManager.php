<?php


namespace App\DTO;


class ProjectManager
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var string
     */
    private $firstName;
    /**
     * @var string
     */
    private $lastName;
    /**
     * @var string
     */
    private $emailAddress;

    /**
     * ProjectManager constructor.
     * @param string $id
     * @param string $firstName
     * @param string $lastName
     * @param string $emailAddress
     */
    public function __construct(string $id, string $firstName, string $lastName, string $emailAddress)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}