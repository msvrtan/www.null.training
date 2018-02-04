<?php

declare(strict_types=1);

namespace NullDev\TheaterBundle\Entity;

use Broadway\Serializer\SimpleInterfaceSerializer;
use Doctrine\ORM\Mapping as ORM;

/**
 * BroadwayEventStore.
 *
 * @ORM\Table(
 *     name="BroadwayEventStore",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_C428DBE1D17F50A634B91FA9", columns={"uuid", "playhead"})}
 * )
 * @ORM\Entity(repositoryClass="NullDev\TheaterBundle\Repository\BroadwayEventStoreRepository")
 */
class BroadwayEventStore
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=50, nullable=false)
     */
    private $uuid;

    /**
     * @var int
     *
     * @ORM\Column(name="playhead", type="integer", nullable=false)
     */
    private $playhead;

    /**
     * @var string
     *
     * @ORM\Column(name="payload", type="text", nullable=false)
     */
    private $payload;

    /**
     * @var string
     *
     * @ORM\Column(name="metadata", type="text", nullable=false)
     */
    private $metadata;

    /**
     * @var string
     *
     * @ORM\Column(name="recorded_on", type="string", length=32, nullable=false)
     */
    private $recordedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="text", nullable=false)
     */
    private $type;

    /** @var SimpleInterfaceSerializer|null */
    private $serializer;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function getPlayhead(): int
    {
        return $this->playhead;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getDeserializedPayload()
    {
        $decoded = json_decode($this->getPayload(), true);

        return $this->getSerializer()->deserialize($decoded);
    }

    public function getMetadata(): string
    {
        return $this->metadata;
    }

    public function getRecordedOn(): string
    {
        return $this->recordedOn;
    }

    public function getType(): string
    {
        return $this->type;
    }

    private function getSerializer()
    {
        if (null === $this->serializer) {
            $this->serializer = new SimpleInterfaceSerializer();
        }

        return $this->serializer;
    }
}
