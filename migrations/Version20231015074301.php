<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231015074301 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE autos_photo ADD auto_id INT NOT NULL');
        $this->addSql('ALTER TABLE autos_photo ADD serial_nr VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE autos_photo ADD CONSTRAINT FK_BCF495971D55B925 FOREIGN KEY (auto_id) REFERENCES auta (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_BCF495971D55B925 ON autos_photo (auto_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE autos_photo DROP CONSTRAINT FK_BCF495971D55B925');
        $this->addSql('DROP INDEX IDX_BCF495971D55B925');
        $this->addSql('ALTER TABLE autos_photo DROP auto_id');
        $this->addSql('ALTER TABLE autos_photo DROP serial_nr');
    }
}
