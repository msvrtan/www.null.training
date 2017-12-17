<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class HomepageControllerTest extends WebTestCase
{
    public function testRootRedirectsEnglishUsersToEnglishHomepage()
    {
        // Arrange
        $client = self::createClient([], ['HTTP_ACCEPT_LANGUAGE' => 'en_US']);

        // Act
        $client->request('GET', '/');
        $location = $client->getResponse()->headers->get('location');

        // Assert
        self::assertTrue($client->getResponse() instanceof RedirectResponse);
        self::assertEquals('/en/', $location);
    }

    public function testRootRedirectsCroatianUsersToCroatianHomepage()
    {
        // Arrange
        $client = self::createClient([], ['HTTP_ACCEPT_LANGUAGE' => 'hr']);

        // Act
        $client->request('GET', '/');
        $location = $client->getResponse()->headers->get('location');

        // Assert
        self::assertTrue($client->getResponse() instanceof RedirectResponse);
        self::assertEquals('/hr/', $location);
    }

    /**
     * @dataProvider provideLocales
     */
    public function testRootRedirectsAllOtherLanguagesToEnglishHomepage(string $locale)
    {
        // Arrange
        $client = self::createClient([], ['HTTP_ACCEPT_LANGUAGE' => $locale]);

        // Act
        $client->request('GET', '/');
        $location = $client->getResponse()->headers->get('location');

        // Assert
        self::assertTrue($client->getResponse() instanceof RedirectResponse);
        self::assertEquals('/en/', $location);
    }

    public function provideLocales(): array
    {
        return [
            ['de'],
            ['fr'],
            ['bs_BA'],
            ['sr_RS'],
        ];
    }

    public function testHomepageInEnglish()
    {
        // Arrange
        $url = '/en/';

        // Act
        $content = $this->getContent($url);

        // Assert
        self::assertContains('Training & mentoring PHP developers', $content);
    }

    public function testHomepageInCroatian()
    {
        // Arrange
        $url = '/hr/';

        // Act
        $content = $this->getContent($url);

        // Assert
        self::assertContains('Treniranje & mentoriranje PHP developera', $content);
    }

    private function getContent(string $url): string
    {
        $client = self::createClient();

        $client->request('GET', $url);

        return $client->getResponse()->getContent();
    }
}
