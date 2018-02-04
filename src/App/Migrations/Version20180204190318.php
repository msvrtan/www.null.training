<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180204190318 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE workshop_session (id VARCHAR(40) NOT NULL, workshop INT DEFAULT NULL, venue VARCHAR(40) DEFAULT NULL, city VARCHAR(40) DEFAULT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, start_time TIME NOT NULL, end_time TIME NOT NULL, language VARCHAR(5) NOT NULL, price_amount INT DEFAULT NULL, price_currency VARCHAR(5) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_920BC7C39B6F02C4 (workshop), INDEX IDX_920BC7C391911B0D (venue), INDEX IDX_920BC7C32D5B0234 (city), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE workshop_session ADD CONSTRAINT FK_920BC7C39B6F02C4 FOREIGN KEY (workshop) REFERENCES workshop (id)');
        $this->addSql('ALTER TABLE workshop_session ADD CONSTRAINT FK_920BC7C391911B0D FOREIGN KEY (venue) REFERENCES venue (id)');
        $this->addSql('ALTER TABLE workshop_session ADD CONSTRAINT FK_920BC7C32D5B0234 FOREIGN KEY (city) REFERENCES city (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE workshop_session');
    }
}
