<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180204122106 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE venue (id VARCHAR(40) NOT NULL, city VARCHAR(40) DEFAULT NULL, name VARCHAR(200) NOT NULL, address VARCHAR(200) NOT NULL, description LONGTEXT DEFAULT NULL, additional_information LONGTEXT DEFAULT NULL, priority INT NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_91911B0D2D5B0234 (city), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE venue ADD CONSTRAINT FK_91911B0D2D5B0234 FOREIGN KEY (city) REFERENCES city (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE venue');
    }
}
