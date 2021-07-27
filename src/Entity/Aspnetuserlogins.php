<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetuserlogins
 *
 * @ORM\Table(name="aspnetuserlogins", indexes={@ORM\Index(name="IX_UserLogins_UserId", columns={"UserId"})})
 * @ORM\Entity
 */
class Aspnetuserlogins
{
    /**
     * @var string
     *
     * @ORM\Column(name="LoginProvider", type="string", length=128, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $loginprovider;

    /**
     * @var string
     *
     * @ORM\Column(name="ProviderKey", type="string", length=128, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $providerkey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ProviderDisplayName", type="string", length=100, nullable=true)
     */
    private $providerdisplayname;

    /**
     * @var \Aspnetusers
     *
     * @ORM\ManyToOne(targetEntity="Aspnetusers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="UserId", referencedColumnName="Id")
     * })
     */
    private $userid;

    public function getLoginprovider(): ?string
    {
        return $this->loginprovider;
    }

    public function getProviderkey(): ?string
    {
        return $this->providerkey;
    }

    public function getProviderdisplayname(): ?string
    {
        return $this->providerdisplayname;
    }

    public function setProviderdisplayname(?string $providerdisplayname): self
    {
        $this->providerdisplayname = $providerdisplayname;

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
