<?php

declare(strict_types=1);

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Nette\Utils\Strings;

/**
 * @see WorkshopFixtures
 *
 * @ORM\Entity(repositoryClass="App\Repository\WorkshopRepository")
 */
class Workshop
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $enTitle;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $enShortIntroduction;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $enDescription;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $enSlug;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $hrTitle;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $hrShortIntroduction;

    /**
     * @ORM\Column(type="text")
     *
     * @var string
     */
    private $hrDescription;

    /**
     * @ORM\Column(type="string",length=200)
     *
     * @var string
     */
    private $hrSlug;

    /**
     * @ORM\Column(type="boolean")
     *
     * @var bool
     */
    private $active = false;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(string $lang): string
    {
        switch ($lang) {
            case 'hr':
                return $this->hrTitle;
            case 'en':
                return $this->enTitle;
        }
    }

    public function getShortIntroduction(string $lang): string
    {
        switch ($lang) {
            case 'hr':
                return $this->hrShortIntroduction;
            case 'en':
                return $this->enShortIntroduction;
        }
    }

    public function getDescription(string $lang): string
    {
        switch ($lang) {
            case 'hr':
                return $this->hrDescription;
            case 'en':
                return $this->enDescription;
        }
    }

    public function getSlug(string $lang): string
    {
        switch ($lang) {
            case 'hr':
                return $this->hrSlug;
            case 'en':
                return $this->enSlug;
        }

        return 'aaa';
    }

    public function getEnTitle(): ?string
    {
        return $this->enTitle;
    }

    public function setEnTitle(string $enTitle)
    {
        $this->enTitle = $enTitle;
        $this->enSlug  = Strings::webalize($enTitle);
    }

    public function getEnShortIntroduction(): ?string
    {
        return $this->enShortIntroduction;
    }

    public function setEnShortIntroduction(string $enShortIntroduction)
    {
        $this->enShortIntroduction = $enShortIntroduction;
    }

    public function getEnDescription(): ?string
    {
        return $this->enDescription;
    }

    public function setEnDescription(string $enDescription)
    {
        $this->enDescription = $enDescription;
    }

    public function getHrTitle(): ?string
    {
        return $this->hrTitle;
    }

    public function setHrTitle(string $hrTitle)
    {
        $this->hrTitle = $hrTitle;
        $this->hrSlug  = Strings::webalize($hrTitle);
    }

    public function getHrShortIntroduction(): ?string
    {
        return $this->hrShortIntroduction;
    }

    public function setHrShortIntroduction(string $hrShortIntroduction)
    {
        $this->hrShortIntroduction = $hrShortIntroduction;
    }

    public function getHrDescription(): ?string
    {
        return $this->hrDescription;
    }

    public function setHrDescription(string $hrDescription)
    {
        $this->hrDescription = $hrDescription;
    }

    public function setActive(bool $active)
    {
        $this->active = $active;
    }

    public function isActive(): bool
    {
        return $this->active;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}
