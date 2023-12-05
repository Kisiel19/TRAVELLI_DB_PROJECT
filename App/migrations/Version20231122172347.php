<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231122172347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE objekt (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, description VARCHAR(2000) DEFAULT NULL, number INT DEFAULT NULL, rate DOUBLE PRECISION DEFAULT NULL, longitude DOUBLE PRECISION NOT NULL, latitude DOUBLE PRECISION NOT NULL, open_hour_monday TIME DEFAULT NULL, close_hour_monday TIME DEFAULT NULL, open_hour_tuesday TIME DEFAULT NULL, close_hour_tuesday TIME DEFAULT NULL, open_hour_wednesday TIME DEFAULT NULL, close_hour_wednesday TIME DEFAULT NULL, open_hour_thursday TIME DEFAULT NULL, close_hour_thursday TIME DEFAULT NULL, open_hour_friday TIME DEFAULT NULL, close_hour_friday TIME DEFAULT NULL, open_hour_saturday TIME DEFAULT NULL, close_hour_saturday TIME DEFAULT NULL, open_hour_sunday TIME DEFAULT NULL, close_hour_sunday TIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE objekt');
        $this->addSql('DROP TABLE user');
    }
}
