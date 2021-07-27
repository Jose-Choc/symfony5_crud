<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetusertokens
 *
 * @ORM\Table(name="aspnetusertokens", indexes={@ORM\Index(name="IDX_ADE9D668631A48FA", columns={"UserId"})})
 * @ORM\Entity
 */
class Aspnetusertokens
{
    /**
     * @var string
     *
     * @ORM\Column(name="LoginProvider", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loginprovider;

    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Value", type="string", length=100, nullable=true)
     */
    private $value;

    /**
     * @var \Aspnetusers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Aspnetusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     * })
     */
    private $userid;

    public function getLoginprovider(): ?string
    {
        return $this->loginprovider;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(?string $value): self
    {
        $this->value = $value;

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
