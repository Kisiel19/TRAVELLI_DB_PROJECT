<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231207143906 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objekt CHANGE description description VARCHAR(8000) DEFAULT NULL');
        $this->addSql('ALTER TABLE trails CHANGE name name VARCHAR(255) NOT NULL, CHANGE link link VARCHAR(255) DEFAULT NULL, CHANGE description description LONGTEXT DEFAULT NULL, ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objekt CHANGE description description VARCHAR(2000) DEFAULT NULL');
        $this->addSql('ALTER TABLE trails MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON trails');
        $this->addSql('ALTER TABLE trails CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE link link VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE description description LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
