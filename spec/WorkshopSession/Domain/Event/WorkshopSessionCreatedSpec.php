<?php

declare(strict_types=1);

namespace spec\WorkshopSession\Domain\Event;

use Broadway\Serializer\Serializable;
use DateTime;
use Money\Money;
use PhpSpec\ObjectBehavior;
use WorkshopSession\Core\WorkshopSessionId;
use WorkshopSession\Domain\Event\WorkshopSessionCreated;

class WorkshopSessionCreatedSpec extends ObjectBehavior
{
    public function let(
        WorkshopSessionId $id,
        DateTime $startDate,
        DateTime $endDate,
        DateTime $startTime,
        DateTime $endTime,
        DateTime $createdAt
    ) {
        $this->beConstructedWith(
            $id,
            $workshopId = 1,
            $venueId = 'venueId',
            $startDate,
            $endDate,
            $startTime,
            $endTime,
            $language = 'HR',
            Money::HRK(12500),
            $createdAt
        );
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(WorkshopSessionCreated::class);
        $this->shouldImplement(Serializable::class);
    }

    public function it_has_a_helper_factory_method(
        WorkshopSessionId $id,
        DateTime $startDate,
        DateTime $endDate,
        DateTime $startTime,
        DateTime $endTime,
        Money $price
    ) {
        $this->create($id, 1, 'venue-id', $startDate, $endDate, $startTime, $endTime, 'HR', $price)->shouldReturnAnInstanceOf(
            WorkshopSessionCreated::class
        );
    }

    public function it_exposes_id(WorkshopSessionId $id)
    {
        $this->getId()->shouldReturn($id);
    }

    public function it_exposes_workshop_id()
    {
        $this->getWorkshopId()->shouldReturn(1);
    }

    public function it_exposes_venue_id()
    {
        $this->getVenueId()->shouldReturn('venueId');
    }

    public function it_exposes_start_date(DateTime $startDate)
    {
        $this->getStartDate()->shouldReturn($startDate);
    }

    public function it_exposes_end_date(DateTime $endDate)
    {
        $this->getEndDate()->shouldReturn($endDate);
    }

    public function it_exposes_start_time(DateTime $startTime)
    {
        $this->getStartTime()->shouldReturn($startTime);
    }

    public function it_exposes_end_time(DateTime $endTime)
    {
        $this->getEndTime()->shouldReturn($endTime);
    }

    public function it_exposes_language()
    {
        $this->getLanguage()->shouldReturn('language');
    }

    public function it_exposes_price(Money $price)
    {
        $this->getPrice()->shouldReturn($price);
    }

    public function it_exposes_created_at(DateTime $createdAt)
    {
        $this->getCreatedAt()->shouldReturn($createdAt);
    }

    public function it_can_be_serialized(
        WorkshopSessionId $id,
        DateTime $startDate,
        DateTime $endDate,
        DateTime $startTime,
        DateTime $endTime,
        DateTime $createdAt
    ) {
        $id->serialize()->shouldBeCalled()->willReturn('id');
        $startDate->format('c')->shouldBeCalled()->willReturn('2018-01-01T00:01:00+00:00');
        $endDate->format('c')->shouldBeCalled()->willReturn('2018-01-01T00:01:00+00:00');
        $startTime->format('c')->shouldBeCalled()->willReturn('2018-01-01T00:01:00+00:00');
        $endTime->format('c')->shouldBeCalled()->willReturn('2018-01-01T00:01:00+00:00');
        $price->serialize()->shouldBeCalled()->willReturn(['amount'=>'amount', 'currency'=>'code']);
        $createdAt->format('c')->shouldBeCalled()->willReturn('2018-01-01T00:01:00+00:00');
        $this->serialize()->shouldReturn(
            [
                'id'         => 'id',
                'workshopId' => 1,
                'venueId'    => 'venueId',
                'startDate'  => '2018-01-01T00:01:00+00:00',
                'endDate'    => '2018-01-01T00:01:00+00:00',
                'startTime'  => '2018-01-01T00:01:00+00:00',
                'endTime'    => '2018-01-01T00:01:00+00:00',
                'language'   => 'HR',
                'price'      => ['amount' => '12500', 'currency' => 'HRK'],
                'createdAt'  => '2018-01-01T00:01:00+00:00',
            ]
        );
    }

    public function it_can_be_deserialized()
    {
        $input = [
            'id'         => 'id',
            'workshopId' => 1,
            'venueId'    => 'venueId',
            'startDate'  => '2018-01-01T00:01:00+00:00',
            'endDate'    => '2018-01-01T00:01:00+00:00',
            'startTime'  => '2018-01-01T00:01:00+00:00',
            'endTime'    => '2018-01-01T00:01:00+00:00',
            'language'   => 'HR',
            'price'      => ['amount' => '12500', 'currency' => 'HRK'],
            'createdAt'  => '2018-01-01T00:01:00+00:00',
        ];

        $this->deserialize($input)->shouldReturnAnInstanceOf(WorkshopSessionCreated::class);
    }
}
