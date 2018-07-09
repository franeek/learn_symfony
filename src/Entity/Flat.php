<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Flat
 *
 * @ORM\Table(name="flat")
 * @ORM\Entity
 */
class Flat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="flat_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="room_no", type="smallint", nullable=false)
     */
    private $roomNo;

    /**
     * @var int
     *
     * @ORM\Column(name="area", type="integer", nullable=false)
     */
    private $area ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="slot_no", type="smallint", nullable=true)
     */
    private $slotNo;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="text", nullable=false)
     */
    private $adress;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomNo(): ?int
    {
        return $this->roomNo;
    }

    public function setRoomNo(int $roomNo): self
    {
        $this->roomNo = $roomNo;

        return $this;
    }

    public function getArea(): ?int
    {
        return $this->area;
    }

    public function setArea(int $area): self
    {
        $this->area = $area;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getSlotNo(): ?int
    {
        return $this->slotNo;
    }

    public function setSlotNo(?int $slotNo): self
    {
        $this->slotNo = $slotNo;

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


}
