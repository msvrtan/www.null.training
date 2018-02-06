<?php

declare(strict_types=1);

namespace WorkshopSession\Core;

use Ramsey\Uuid\Uuid;

/**
 * @see \spec\WorkshopSession\Core\WorkshopSessionIdSpec
 * @see \Tests\WorkshopSession\Core\WorkshopSessionIdTest
 */
class WorkshopSessionId
{
    /** @var string */
    private $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function __toString(): string
    {
        return $this->id;
    }

    public static function create(): self
    {
        $id = Uuid::uuid4()->toString();

        return new self($id);
    }

    public function serialize(): string
    {
        return $this->id;
    }

    public static function deserialize(string $id): self
    {
        return new self($id);
    }
}
