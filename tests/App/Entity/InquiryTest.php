<?php

declare(strict_types=1);

namespace Tests\App\Entity;

use App\Entity\Inquiry;
use PHPUnit\Framework\TestCase;

class InquiryTest extends TestCase
{
    /** @var Inquiry */
    private $entity;

    public function setUp()
    {
        $this->entity = new Inquiry();
    }

    public function testItHasCreatedAtSetByDefault()
    {
        self::assertNotNull($this->entity->getCreatedAt());
        self::assertInstanceOf(\DateTime::class, $this->entity->getCreatedAt());
    }

    public function testItHasNoIdByDefault()
    {
        self::assertNull($this->entity->getId());
    }

    public function testItHasNoNameByDefault()
    {
        self::assertNull($this->entity->getName());
    }

    public function testItHasNoEmailAddressByDefault()
    {
        self::assertNull($this->entity->getEmailAddress());
    }

    public function testItHasNoBodyByDefault()
    {
        self::assertNull($this->entity->getBody());
    }
}
