<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * AclObjectIdentities
 *
 * @ORM\Table(name="acl_object_identities", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_9407e5494b12ad6ea000b10", columns={"object_identifier", "class_id"})}, indexes={@ORM\Index(name="idx_9407e54977fa751a", columns={"parent_object_identity_id"})})
 * @ORM\Entity
 */
class AclObjectIdentities
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acl_object_identities_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="class_id", type="integer", nullable=false)
     */
    private $classId;

    /**
     * @var string
     *
     * @ORM\Column(name="object_identifier", type="string", length=100, nullable=false)
     */
    private $objectIdentifier;

    /**
     * @var bool
     *
     * @ORM\Column(name="entries_inheriting", type="boolean", nullable=false)
     */
    private $entriesInheriting;

    /**
     * @var \AclObjectIdentities
     *
     * @ORM\ManyToOne(targetEntity="AclObjectIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="parent_object_identity_id", referencedColumnName="id")
     * })
     */
    private $parentObjectentity;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AclObjectIdentities", inversedBy="objectentity")
     * @ORM\JoinTable(name="acl_object_identity_ancestors",
     *   joinColumns={
     *     @ORM\JoinColumn(name="object_identity_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="ancestor_id", referencedColumnName="id")
     *   }
     * )
     */
    private $ancestor;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ancestor = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClassId(): ?int
    {
        return $this->classId;
    }

    public function setClassId(int $classId): self
    {
        $this->classId = $classId;

        return $this;
    }

    public function getObjectIdentifier(): ?string
    {
        return $this->objectIdentifier;
    }

    public function setObjectIdentifier(string $objectIdentifier): self
    {
        $this->objectIdentifier = $objectIdentifier;

        return $this;
    }

    public function getEntriesInheriting(): ?bool
    {
        return $this->entriesInheriting;
    }

    public function setEntriesInheriting(bool $entriesInheriting): self
    {
        $this->entriesInheriting = $entriesInheriting;

        return $this;
    }

    public function getParentObjectentity(): ?self
    {
        return $this->parentObjectentity;
    }

    public function setParentObjectentity(?self $parentObjectentity): self
    {
        $this->parentObjectentity = $parentObjectentity;

        return $this;
    }

    /**
     * @return Collection|AclObjectIdentities[]
     */
    public function getAncestor(): Collection
    {
        return $this->ancestor;
    }

    public function addAncestor(AclObjectIdentities $ancestor): self
    {
        if (!$this->ancestor->contains($ancestor)) {
            $this->ancestor[] = $ancestor;
        }

        return $this;
    }

    public function removeAncestor(AclObjectIdentities $ancestor): self
    {
        if ($this->ancestor->contains($ancestor)) {
            $this->ancestor->removeElement($ancestor);
        }

        return $this;
    }

}
