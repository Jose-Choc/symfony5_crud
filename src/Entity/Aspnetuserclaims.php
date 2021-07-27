<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetuserclaims
 *
 * @ORM\Table(name="aspnetuserclaims", indexes={@ORM\Index(name="IX_UserClaims_UserId", columns={"UserId"})})
 * @ORM\Entity
 */
class Aspnetuserclaims
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
     * @var \Aspnetusers
     *
     * @ORM\ManyToOne(targetEntity="Aspnetusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     * })
     */
    private $userid;

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

    public function getUserid(): ?Aspnetusers
    {
        return $this->userid;
    }

    public function setUserid(?Aspnetusers $userid): self
    {
        $this->userid = $userid;

        return $this;
    }


}
