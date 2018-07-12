<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AclEntries
 *
 * @ORM\Table(name="acl_entries", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_46c8b806ea000b103d9ab4a64def17bce4289bf4", columns={"class_id", "object_identity_id", "field_name", "ace_order"})}, indexes={@ORM\Index(name="idx_46c8b806ea000b103d9ab4a6df9183c9", columns={"class_id", "object_identity_id", "security_identity_id"}), @ORM\Index(name="idx_46c8b8063d9ab4a6", columns={"object_identity_id"}), @ORM\Index(name="idx_46c8b806df9183c9", columns={"security_identity_id"}), @ORM\Index(name="idx_46c8b806ea000b10", columns={"class_id"})})
 * @ORM\Entity
 */
class AclEntries
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="acl_entries_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="field_name", type="string", length=50, nullable=true)
     */
    private $fieldName;

    /**
     * @var int
     *
     * @ORM\Column(name="ace_order", type="smallint", nullable=false)
     */
    private $aceOrder;

    /**
     * @var int
     *
     * @ORM\Column(name="mask", type="integer", nullable=false)
     */
    private $mask;

    /**
     * @var bool
     *
     * @ORM\Column(name="granting", type="boolean", nullable=false)
     */
    private $granting;

    /**
     * @var string
     *
     * @ORM\Column(name="granting_strategy", type="string", length=30, nullable=false)
     */
    private $grantingStrategy;

    /**
     * @var bool
     *
     * @ORM\Column(name="audit_success", type="boolean", nullable=false)
     */
    private $auditSuccess;

    /**
     * @var bool
     *
     * @ORM\Column(name="audit_failure", type="boolean", nullable=false)
     */
    private $auditFailure;

    /**
     * @var \AclClasses
     *
     * @ORM\ManyToOne(targetEntity="AclClasses")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     * })
     */
    private $class;

    /**
     * @var \AclObjectIdentities
     *
     * @ORM\ManyToOne(targetEntity="AclObjectIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="object_identity_id", referencedColumnName="id")
     * })
     */
    private $objectentity;

    /**
     * @var \AclSecurityIdentities
     *
     * @ORM\ManyToOne(targetEntity="AclSecurityIdentities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="security_identity_id", referencedColumnName="id")
     * })
     */
    private $securityentity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    public function getAceOrder(): ?int
    {
        return $this->aceOrder;
    }

    public function setAceOrder(int $aceOrder): self
    {
        $this->aceOrder = $aceOrder;

        return $this;
    }

    public function getMask(): ?int
    {
        return $this->mask;
    }

    public function setMask(int $mask): self
    {
        $this->mask = $mask;

        return $this;
    }

    public function getGranting(): ?bool
    {
        return $this->granting;
    }

    public function setGranting(bool $granting): self
    {
        $this->granting = $granting;

        return $this;
    }

    public function getGrantingStrategy(): ?string
    {
        return $this->grantingStrategy;
    }

    public function setGrantingStrategy(string $grantingStrategy): self
    {
        $this->grantingStrategy = $grantingStrategy;

        return $this;
    }

    public function getAuditSuccess(): ?bool
    {
        return $this->auditSuccess;
    }

    public function setAuditSuccess(bool $auditSuccess): self
    {
        $this->auditSuccess = $auditSuccess;

        return $this;
    }

    public function getAuditFailure(): ?bool
    {
        return $this->auditFailure;
    }

    public function setAuditFailure(bool $auditFailure): self
    {
        $this->auditFailure = $auditFailure;

        return $this;
    }

    public function getClass(): ?AclClasses
    {
        return $this->class;
    }

    public function setClass(?AclClasses $class): self
    {
        $this->class = $class;

        return $this;
    }

    public function getObjectentity(): ?AclObjectIdentities
    {
        return $this->objectentity;
    }

    public function setObjectentity(?AclObjectIdentities $objectentity): self
    {
        $this->objectentity = $objectentity;

        return $this;
    }

    public function getSecurityentity(): ?AclSecurityIdentities
    {
        return $this->securityentity;
    }

    public function setSecurityentity(?AclSecurityIdentities $securityentity): self
    {
        $this->securityentity = $securityentity;

        return $this;
    }


}
