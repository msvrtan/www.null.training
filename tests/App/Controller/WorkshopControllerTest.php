<?php

declare(strict_types=1);

namespace Tests\App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class WorkshopControllerTest extends WebTestCase
{
    public function testWorkshopDetailsPageInEnglish()
    {
        // Arrange
        $url = '/en/workshop/xxxx-1';

        // Act
        $content = $this->getContent($url);

        // Assert
        self::assertContains('Cooking 101', $content);
    }

    public function testWorkshopDetailsPageInCroatian()
    {
        // Arrange
        $url = '/hr/radionica/xxxx-1';

        // Act
        $content = $this->getContent($url);

        // Assert
        self::assertContains('Uvod u kuhanje', $content);
    }

    private function getContent(string $url): string
    {
        $client = self::createClient();

        $client->request('GET', $url);

        return $client->getResponse()->getContent();
    }
}
