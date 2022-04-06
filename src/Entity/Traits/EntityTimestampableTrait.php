<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

trait EntityTimestampableTrait
{
    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    #[Groups([
        'member:collection', 'member:item',
        'publisher:collection', 'publisher:item',
        'player:collection', 'player:item',
        'member-user:collection', 'member-user:item',
        'publisher-user:collection', 'publisher-user:item',
        'volunteer:collection', 'volunteer:item',
        'subteam:collection', 'subteam:item',
        'email-log:collection', 'email-log:item'
    ])]
    protected $createdAt;

    /**
     * @var \DateTime
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    #[Groups([
        'member:collection', 'member:item',
        'publisher:collection', 'publisher:item',
        'player:collection', 'player:item',
        'member-user:collection', 'member-user:item',
        'publisher-user:collection', 'publisher-user:item',
        'volunteer:collection', 'volunteer:item',
        'subteam:collection', 'subteam:item',
        'email-log:collection', 'email-log:item'
    ])]
    protected $updatedAt;

    /**
     * Sets createdAt.
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Returns createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Sets updatedAt.
     *
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Returns updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
