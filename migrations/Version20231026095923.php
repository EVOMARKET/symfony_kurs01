<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231026095923 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE owners ADD auto_rel_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE owners ADD CONSTRAINT FK_427292FA646C0F36 FOREIGN KEY (auto_rel_id) REFERENCES auta (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_427292FA646C0F36 ON owners (auto_rel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE owners DROP CONSTRAINT FK_427292FA646C0F36');
        $this->addSql('DROP INDEX IDX_427292FA646C0F36');
        $this->addSql('ALTER TABLE owners DROP auto_rel_id');
    }
}
