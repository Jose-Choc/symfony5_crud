<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetroleclaims
 *
 * @ORM\Table(name="aspnetroleclaims", indexes={@ORM\Index(name="IX_RoleClaims_RoleId", columns={"RoleId"})})
 * @ORM\Entity
 */
class Aspnetroleclaims
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaimType", type="string", length=100, nullable=true)
     */
    private $claimtype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ClaimValue", type="string", length=100, nullable=true)
     */
    private $claimvalue;

    /**
     * @var \Aspnetroles
     *
     * @ORM\ManyToOne(targetEntity="Aspnetroles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="RoleId", referencedColumnName="Id")
     * })
     */
    private $roleid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClaimtype(): ?string
    {
        return $this->claimtype;
    }

    public function setClaimtype(?string $claimtype): self
    {
        $this->claimtype = $claimtype;

        return $this;
    }

    public function getClaimvalue(): ?string
    {
        return $this->claimvalue;
    }

    public function setClaimvalue(?string $claimvalue): self
    {
        $this->claimvalue = $claimvalue;

        return $this;
    }

    public function getRoleid(): ?Aspnetroles
    {
        return $this->roleid;
    }

    public function setRoleid(?Aspnetroles $roleid): self
    {
        $this->roleid = $roleid;

        return $this;
    }


}
