<?php

declare(strict_types=1);

namespace WorkshopSession\Behat;

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use Broadway\CommandHandling\CommandBus;
use Money\Money;
use NullDev\TheaterBundle\Repository\BroadwayEventStoreRepository;
use Symfony\Component\HttpKernel\KernelInterface;
use WorkshopSession\Core\WorkshopSessionId;
use WorkshopSession\Domain\Command\CreateWorkshopSession;

class WorkshopSessionDomainContext implements Context
{
    use CleanDbTrait;
    use SymfonyTrait;

    /** @var KernelInterface */
    private $kernel;
    /** @var CommandBus */
    private $commandBus;

    /** @var int */
    private $workshopId;
    /** @var string */
    private $venueId;
    /** @var WorkshopSessionId */
    private $workshopSessionId;

    public function __construct(KernelInterface $kernel, CommandBus $commandBus)
    {
        $this->kernel     = $kernel;
        $this->commandBus = $commandBus;
    }

    /**
     * @Given there is a :workshopTitle workshop
     */
    public function thereIsAWorkshop(string $workshopTitle)
    {
        $this->workshopId = 1;
    }

    /**
     * @Given there is a :venueName venue
     */
    public function thereIsAVenue(string $venueName)
    {
        $this->venueId = 'b2119e05-7520-4c94-aca2-27107fdb2e2a';
    }

    /**
     * @When I create public session for tomorrow
     */
    public function iCreatePublicSessionForTomorrow()
    {
        $this->workshopSessionId = WorkshopSessionId::create();

        $startDate = new \DateTime('tomorrow 00:00');
        $endDate   = new \DateTime('tomorrow 00:00');
        $startTime = new \DateTime('tomorrow 09:00');
        $endTime   = new \DateTime('tomorrow 17:00');

        $command = new CreateWorkshopSession(
            $this->workshopSessionId,
            $this->workshopId,
            $this->venueId,
            $startDate,
            $endDate,
            $startTime,
            $endTime,
            'EN',
            Money::HRK(12500)
        );

        $this->commandBus->dispatch($command);
    }

    /**
     * @Then workshop has a session defined
     */
    public function workshopHasASessionDefined()
    {
        throw new PendingException();
    }

    private function getAllStoredEvents(): array
    {
        $eventStore = $this->getService(BroadwayEventStoreRepository::class);

        return $eventStore->findAll();
    }
}
