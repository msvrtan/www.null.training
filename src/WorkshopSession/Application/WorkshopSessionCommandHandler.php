<?php

declare(strict_types=1);

namespace WorkshopSession\Application;

use Broadway\CommandHandling\SimpleCommandHandler;
use WorkshopSession\Core\WorkshopSessionId;
use WorkshopSession\Domain\Command\CreateWorkshopSession;
use WorkshopSession\Domain\WorkshopSessionModel;

/**
 * @see \spec\WorkshopSession\Application\WorkshopSessionCommandHandlerSpec
 * @see \Tests\WorkshopSession\Application\WorkshopSessionCommandHandlerTest
 */
class WorkshopSessionCommandHandler extends SimpleCommandHandler
{
    /** @var WorkshopSessionRepository */
    private $repository;

    public function __construct(WorkshopSessionRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handleCreateWorkshopSession(CreateWorkshopSession $command)
    {
        $model = WorkshopSessionModel::create(
            $command->getId(),
            $command->getWorkshopId(),
            $command->getVenueId(),
            $command->getStartDate(),
            $command->getEndDate(),
            $command->getStartTime(),
            $command->getEndTime(),
            $command->getLanguage(),
            $command->getPrice()
        );

        $this->save($model);
    }

    protected function load(WorkshopSessionId $id): WorkshopSessionModel
    {
        return $this->repository->load($id);
    }

    protected function save(WorkshopSessionModel $model)
    {
        $this->repository->save($model);
    }
}
