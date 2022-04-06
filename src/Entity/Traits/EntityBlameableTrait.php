<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

trait EntityBlameableTrait
{
    /**
     * @var string
     * @Gedmo\Blameable(on="create")
     * @ORM\Column(nullable=true)
     */
    #[Groups([
        'member:collection', 'member:item', 
        'publisher:collection', 'publisher:item', 
        'player:collection', 'player:item', 
        'member-user:collection', 'member-user:item',
        'publisher-user:collection', 'publisher-user:item',
        'volunteer:collection', 'volunteer:item',
        'subteam:collection', 'subteam:item'
    ])]
    protected $createdBy;

    /**
     * @var string
     * @Gedmo\Blameable(on="update")
     * @ORM\Column(nullable=true)
     */
    #[Groups([
        'member:collection', 'member:item', 
        'publisher:collection', 'publisher:item', 
        'player:collection', 'player:item', 
        'member-user:collection', 'member-user:item',
        'publisher-user:collection', 'publisher-user:item',
        'volunteer:collection', 'volunteer:item',
        'subteam:collection', 'subteam:item'
    ])]
    protected $updatedBy;

    /**
     * Sets createdBy.
     *
     * @param string $createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Returns createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Sets updatedBy.
     *
     * @param string $updatedBy
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Returns updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
