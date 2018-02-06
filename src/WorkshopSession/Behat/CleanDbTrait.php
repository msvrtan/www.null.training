<?php

declare(strict_types=1);

namespace WorkshopSession\Behat;

use Behat\Behat\Hook\Scope\BeforeScenarioScope;

trait CleanDbTrait
{
    /**
     * @BeforeScenario
     *
     * @param BeforeScenarioScope $scope
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function cleanDatabase(BeforeScenarioScope $scope)
    {
        $this->cleanDb(
            [
                'BroadwayEventStore',
            ]
        );
    }

    protected function cleanDb(array $tables)
    {
        $em = $this->getEntityManager();

        $em->getConnection()->executeUpdate('SET foreign_key_checks = 0;');
        $platform = $em->getConnection()->getDatabasePlatform();
        foreach ($tables as $tbl) {
            $em->getConnection()->executeUpdate($platform->getTruncateTableSQL($tbl, true));
        }
        $em->getConnection()->executeUpdate('SET foreign_key_checks = 1;');
    }
}
