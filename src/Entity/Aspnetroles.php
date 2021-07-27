<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Aspnetroles
 *
 * @ORM\Table(name="aspnetroles", uniqueConstraints={@ORM\UniqueConstraint(name="RoleNameIndex", columns={"NormalizedName"})})
 * @ORM\Entity
 */
class Aspnetroles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Name", type="string", length=256, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="NormalizedName", type="string", length=256, nullable=true)
     */
    private $normalizedname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ConcurrencyStamp", type="string", length=100, nullable=true)
     */
    private $concurrencystamp;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Aspnetusers", mappedBy="roleid")
     */
    private $userid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNormalizedname(): ?string
    {
        return $this->normalizedname;
    }

    public function setNormalizedname(?string $normalizedname): self
    {
        $this->normalizedname = $normalizedname;

        return $this;
    }

    public function getConcurrencystamp(): ?string
    {
        return $this->concurrencystamp;
    }

    public function setConcurrencystamp(?string $concurrencystamp): self
    {
        $this->concurrencystamp = $concurrencystamp;

        return $this;
    }

    /**
     * @return Collection|Aspnetusers[]
     */
    public function getUserid(): Collection
    {
        return $this->userid;
    }

    public function addUserid(Aspnetusers $userid): self
    {
        if (!$this->userid->contains($userid)) {
            $this->userid[] = $userid;
            $userid->addRoleid($this);
        }

        return $this;
    }

    public function removeUserid(Aspnetusers $userid): self
    {
        if ($this->userid->removeElement($userid)) {
            $userid->removeRoleid($this);
        }

        return $this;
    }

}
