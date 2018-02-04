<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180204003354 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            'mysql' !== $this->connection->getDatabasePlatform()->getName(),
            'Migration can only be executed safely on \'mysql\'.'
        );
        $this->addSql('CREATE TABLE country (code VARCHAR(4) NOT NULL, name VARCHAR(200) NOT NULL, priority INT NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(code)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');

        $this->addSql("INSERT INTO `country` VALUES ('HR','Croatia',1,'2018-02-04 00:35:13')");

        $this->addSql("INSERT INTO `country` VALUES ('BA','Bosnia & Herzegovina',2,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ME','Montenegro',2,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('RS','Serbia',2,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SI','Slovenia',2,'2018-02-04 00:35:13')");

        $this->addSql("INSERT INTO `country` VALUES ('AT','Austria',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BE','Belgium',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BG','Bulgaria',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CH','Switzerland',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CZ','Czechia',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DE','Germany',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ES','Spain',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EZ','Eurozone',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FI','Finland',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FR','France',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GB','United Kingdom',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GR','Greece',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('HU','Hungary',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IE','Ireland',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IT','Italy',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LI','Liechtenstein',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LT','Lithuania',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LU','Luxembourg',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LV','Latvia',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MK','Macedonia',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NL','Netherlands',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NO','Norway',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PL','Poland',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SE','Sweden',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SK','Slovakia',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TR','Turkey',3,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UA','Ukraine',3,'2018-02-04 00:35:13')");

        $this->addSql("INSERT INTO `country` VALUES ('AC','Ascension Island',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AD','Andorra',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AE','United Arab Emirates',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AF','Afghanistan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AG','Antigua & Barbuda',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AI','Anguilla',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AL','Albania',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AM','Armenia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AO','Angola',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AQ','Antarctica',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AR','Argentina',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AS','American Samoa',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AU','Australia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AW','Aruba',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AX','Åland Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('AZ','Azerbaijan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BB','Barbados',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BD','Bangladesh',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BF','Burkina Faso',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BH','Bahrain',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BI','Burundi',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BJ','Benin',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BL','St. Barthélemy',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BM','Bermuda',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BN','Brunei',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BO','Bolivia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BQ','Caribbean Netherlands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BR','Brazil',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BS','Bahamas',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BT','Bhutan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BW','Botswana',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BY','Belarus',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('BZ','Belize',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CA','Canada',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CC','Cocos (Keeling) Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CD','Congo - Kinshasa',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CF','Central African Republic',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CG','Congo - Brazzaville',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CI','Côte d’Ivoire',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CK','Cook Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CL','Chile',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CM','Cameroon',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CN','China',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CO','Colombia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CR','Costa Rica',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CU','Cuba',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CV','Cape Verde',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CW','Curaçao',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CX','Christmas Island',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('CY','Cyprus',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DG','Diego Garcia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DJ','Djibouti',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DK','Denmark',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DM','Dominica',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DO','Dominican Republic',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('DZ','Algeria',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EA','Ceuta & Melilla',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EC','Ecuador',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EE','Estonia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EG','Egypt',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('EH','Western Sahara',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ER','Eritrea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ET','Ethiopia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FJ','Fiji',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FK','Falkland Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FM','Micronesia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('FO','Faroe Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GA','Gabon',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GD','Grenada',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GE','Georgia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GF','French Guiana',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GG','Guernsey',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GH','Ghana',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GI','Gibraltar',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GL','Greenland',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GM','Gambia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GN','Guinea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GP','Guadeloupe',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GQ','Equatorial Guinea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GS','South Georgia & South Sandwich Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GT','Guatemala',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GU','Guam',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GW','Guinea-Bissau',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('GY','Guyana',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('HK','Hong Kong SAR China',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('HN','Honduras',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('HT','Haiti',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IC','Canary Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ID','Indonesia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IL','Israel',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IM','Isle of Man',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IN','India',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IO','British Indian Ocean Territory',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IQ','Iraq',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IR','Iran',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('IS','Iceland',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('JE','Jersey',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('JM','Jamaica',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('JO','Jordan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('JP','Japan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KE','Kenya',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KG','Kyrgyzstan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KH','Cambodia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KI','Kiribati',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KM','Comoros',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KN','St. Kitts & Nevis',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KP','North Korea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KR','South Korea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KW','Kuwait',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KY','Cayman Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('KZ','Kazakhstan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LA','Laos',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LB','Lebanon',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LC','St. Lucia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LK','Sri Lanka',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LR','Liberia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LS','Lesotho',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('LY','Libya',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MA','Morocco',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MC','Monaco',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MD','Moldova',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MF','St. Martin',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MG','Madagascar',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MH','Marshall Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ML','Mali',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MM','Myanmar (Burma)',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MN','Mongolia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MO','Macau SAR China',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MP','Northern Mariana Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MQ','Martinique',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MR','Mauritania',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MS','Montserrat',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MT','Malta',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MU','Mauritius',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MV','Maldives',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MW','Malawi',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MX','Mexico',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MY','Malaysia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('MZ','Mozambique',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NA','Namibia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NC','New Caledonia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NE','Niger',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NF','Norfolk Island',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NG','Nigeria',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NI','Nicaragua',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NP','Nepal',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NR','Nauru',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NU','Niue',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('NZ','New Zealand',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('OM','Oman',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PA','Panama',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PE','Peru',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PF','French Polynesia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PG','Papua New Guinea',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PH','Philippines',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PK','Pakistan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PM','St. Pierre & Miquelon',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PN','Pitcairn Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PR','Puerto Rico',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PS','Palestinian Territories',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PT','Portugal',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PW','Palau',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('PY','Paraguay',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('QA','Qatar',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('RE','Réunion',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('RO','Romania',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('RU','Russia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('RW','Rwanda',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SA','Saudi Arabia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SB','Solomon Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SC','Seychelles',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SD','Sudan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SG','Singapore',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SH','St. Helena',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SJ','Svalbard & Jan Mayen',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SL','Sierra Leone',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SM','San Marino',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SN','Senegal',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SO','Somalia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SR','Suriname',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SS','South Sudan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ST','São Tomé & Príncipe',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SV','El Salvador',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SX','Sint Maarten',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SY','Syria',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('SZ','Swaziland',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TA','Tristan da Cunha',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TC','Turks & Caicos Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TD','Chad',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TF','French Southern Territories',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TG','Togo',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TH','Thailand',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TJ','Tajikistan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TK','Tokelau',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TL','Timor-Leste',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TM','Turkmenistan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TN','Tunisia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TO','Tonga',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TT','Trinidad & Tobago',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TV','Tuvalu',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TW','Taiwan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('TZ','Tanzania',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UG','Uganda',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UM','U.S. Outlying Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UN','United Nations',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('US','United States',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UY','Uruguay',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('UZ','Uzbekistan',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VA','Vatican City',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VC','St. Vincent & Grenadines',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VE','Venezuela',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VG','British Virgin Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VI','U.S. Virgin Islands',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VN','Vietnam',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('VU','Vanuatu',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('WF','Wallis & Futuna',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('WS','Samoa',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('XK','Kosovo',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('YE','Yemen',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('YT','Mayotte',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ZA','South Africa',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ZM','Zambia',10,'2018-02-04 00:35:13')");
        $this->addSql("INSERT INTO `country` VALUES ('ZW','Zimbabwe',10,'2018-02-04 00:35:13')");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf(
            'mysql' !== $this->connection->getDatabasePlatform()->getName(),
            'Migration can only be executed safely on \'mysql\'.'
        );
        $this->addSql('DROP TABLE country');
    }
}
