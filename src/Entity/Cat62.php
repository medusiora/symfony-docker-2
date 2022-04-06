<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;

use Doctrine\ORM\Mapping as ORM;


#[ApiResource]
class Cat62
{

    /**
     * Hook timestampable behavior
     * updates createdAt, updatedAt fields
     */
    use \App\Entity\Traits\EntityTimestampableTrait;

    /**
     * Hook timestampable behavior
     * updates createdBy, updatedBy fields
     */
    use \App\Entity\Traits\EntityBlameableTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $name;

    #[ORM\Column(type: 'smallint', nullable: true)]
    private $lvl;

    #[ORM\Column(type: 'text')]
    private $detail;

    #[ORM\Column(type: 'string', length: 255)]
    private $note;

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

    public function getLvl(): ?int
    {
        return $this->lvl;
    }

    public function setLvl(?int $lvl): self
    {
        $this->lvl = $lvl;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(string $note): self
    {
        $this->note = $note;

        return $this;
    }
}
