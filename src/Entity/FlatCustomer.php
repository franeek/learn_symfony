<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FlatCustomer
 *
 * @ORM\Table(name="flat_customer", indexes={@ORM\Index(name="fki_person_to_flat", columns={"flat"})})
 * @ORM\Entity
 */
class FlatCustomer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="flat_customer_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="surname", type="text", nullable=false)
     */
    private $surname;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text", nullable=false)
     */
    private $adress;

    /**
     * @var \Flat
     *
     * @ORM\ManyToOne(targetEntity="Flat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="flat", referencedColumnName="id")
     * })
     */
    private $flat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getFlat(): ?Flat
    {
        return $this->flat;
    }

    public function setFlat(?Flat $flat): self
    {
        $this->flat = $flat;

        return $this;
    }


}
