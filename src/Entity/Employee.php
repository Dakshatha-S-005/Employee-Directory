<?php

namespace App\Entity;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM; 
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EmployeeRepository::class)] //marks it as db entity and links it with emprep
class Employee
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    
    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "First name is required")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "First name must be at least 2 characters",
        maxMessage: "First name cannot exceed 50 characters"
    )]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Last name is required")]
    #[Assert\Length(
        min: 2,
        max: 50,
        minMessage: "Last name must be at least 2 characters",
        maxMessage: "Last name cannot exceed 50 characters"
    )]
    private ?string $lastName = null;


    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Email is required")]
    #[Assert\Email(message: "Please enter a valid email address")]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Department is required")]
    private ?string $department = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: "Salary is required")]
    #[Assert\Type(type: "numeric", message: "Salary must be a number")]
    #[Assert\GreaterThan(value: 0, message: "Salary must be greater than 0")]
    private ?string $salary = null;
   

    #[ORM\Column(type: 'datetime')]
    #[Assert\NotBlank(message: "Join date is required")]
    #[Assert\Type(\DateTimeInterface::class, message: "Invalid date format")]
    private ?\DateTime $joinedAt = null;


    public function getId(): ?int 
    {
        return $this->id; 
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName; 
        return $this; 
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(string $department): static
    {
        $this->department = $department;
        return $this;
    }

    public function getSalary(): ?string
    {
        return $this->salary;
    }

    public function setSalary(string $salary): static
    {
        $this->salary = $salary;
        return $this;
    }

    public function getJoinedAt(): ?\DateTime
    {
        return $this->joinedAt;
    }

    public function setJoinedAt(\DateTime $joinedAt): static
    {
        $this->joinedAt = $joinedAt;
        return $this;
    }
}