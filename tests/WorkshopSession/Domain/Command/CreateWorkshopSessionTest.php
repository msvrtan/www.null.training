<?php

declare(strict_types=1);

namespace Tests\WorkshopSession\Domain\Command;

use DateTime;
use Money\Currency;
use Money\Money;
use PHPUnit\Framework\TestCase;
use WorkshopSession\Core\WorkshopSessionId;
use WorkshopSession\Domain\Command\CreateWorkshopSession;

/**
 * @covers \WorkshopSession\Domain\Command\CreateWorkshopSession
 * @group  todo
 */
class CreateWorkshopSessionTest extends TestCase
{
    /** @var WorkshopSessionId */
    private $id;

    /** @var int */
    private $workshopId;

    /** @var string */
    private $venueId;

    /** @var DateTime */
    private $startDate;

    /** @var DateTime */
    private $endDate;

    /** @var DateTime */
    private $startTime;

    /** @var DateTime */
    private $endTime;

    /** @var string */
    private $language;

    /** @var Money */
    private $price;

    /** @var CreateWorkshopSession */
    private $sut;

    public function setUp()
    {
        $this->id         = new WorkshopSessionId('id');
        $this->workshopId = 1;
        $this->venueId    = 'venueId';
        $this->startDate  = new DateTime('2018-01-01T00:01:00+00:00');
        $this->endDate    = new DateTime('2018-02-02T00:01:00+00:00');
        $this->startTime  = new DateTime('2018-03-03T00:01:00+00:00');
        $this->endTime    = new DateTime('2018-04-04T00:01:00+00:00');
        $this->language   = 'language';
        $this->price      = Money::HRK(12500);
        $this->sut        = new CreateWorkshopSession(
            $this->id,
            $this->workshopId,
            $this->venueId,
            $this->startDate,
            $this->endDate,
            $this->startTime,
            $this->endTime,
            $this->language,
            $this->price
        );
    }

    public function testGetId()
    {
        self::assertSame($this->id, $this->sut->getId());
    }

    public function testGetWorkshopId()
    {
        self::assertSame($this->workshopId, $this->sut->getWorkshopId());
    }

    public function testGetVenueId()
    {
        self::assertSame($this->venueId, $this->sut->getVenueId());
    }

    public function testGetStartDate()
    {
        self::assertSame($this->startDate, $this->sut->getStartDate());
    }

    public function testGetEndDate()
    {
        self::assertSame($this->endDate, $this->sut->getEndDate());
    }

    public function testGetStartTime()
    {
        self::assertSame($this->startTime, $this->sut->getStartTime());
    }

    public function testGetEndTime()
    {
        self::assertSame($this->endTime, $this->sut->getEndTime());
    }

    public function testGetLanguage()
    {
        self::assertSame($this->language, $this->sut->getLanguage());
    }

    public function testGetPrice()
    {
        self::assertSame($this->price, $this->sut->getPrice());
    }

    public function testSerialize()
    {
        $expected = [
            'id'         => 'id',
            'workshopId' => 1,
            'venueId'    => 'venueId',
            'startDate'  => '2018-01-01T00:01:00+00:00',
            'endDate'    => '2018-02-02T00:01:00+00:00',
            'startTime'  => '2018-03-03T00:01:00+00:00',
            'endTime'    => '2018-04-04T00:01:00+00:00',
            'language'   => 'language',
            'price'      => ['amount' => '12500', 'currency' => 'HRK'],
        ];

        self::assertSame($expected, $this->sut->serialize());
    }

    public function testDeserialize()
    {
        $serialized = json_encode($this->sut->serialize());
        self::assertEquals($this->sut, CreateWorkshopSession::deserialize(json_decode($serialized, true)));
    }
}
