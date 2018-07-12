<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclClasses
 *
 * @ORM\Table(name="acl_classes", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_69dd750638a36066", columns={"class_type"})})
 * @ORM\Entity
 */
class AclClasses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acl_classes_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="class_type", type="string", length=200, nullable=false)
     */
    private $classType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassType(): ?string
    {
        return $this->classType;
    }

    public function setClassType(string $classType): self
    {
        $this->classType = $classType;

        return $this;
    }


}
