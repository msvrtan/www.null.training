<?php

declare(strict_types=1);

namespace Tests\WorkshopSession\Core;

use PHPUnit\Framework\TestCase;
use WorkshopSession\Core\WorkshopSessionId;

/**
 * @covers \WorkshopSession\Core\WorkshopSessionId
 * @group  todo
 */
class WorkshopSessionIdTest extends TestCase
{
    /** @var string */
    private $id;

    /** @var WorkshopSessionId */
    private $sut;

    public function setUp()
    {
        $this->id  = 'id';
        $this->sut = new WorkshopSessionId($this->id);
    }

    public function testGetId()
    {
        self::assertSame($this->id, $this->sut->getId());
    }

    public function testToString()
    {
        self::assertSame($this->id, $this->sut->__toString());
    }

    public function testSerialize()
    {
        self::assertEquals($this->id, $this->sut->serialize());
    }

    public function testDeserialize()
    {
        self::assertEquals($this->sut, $this->sut->deserialize($this->id));
    }
}
