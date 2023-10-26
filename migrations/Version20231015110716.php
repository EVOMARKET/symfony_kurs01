<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231015110716 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE autos_photo_id_seq CASCADE');
        $this->addSql('ALTER TABLE autos_photo DROP CONSTRAINT fk_bcf495971d55b925');
        $this->addSql('DROP TABLE autos_photo');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE autos_photo_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE autos_photo (id INT NOT NULL, auto_id INT NOT NULL, name VARCHAR(100) NOT NULL, paht VARCHAR(50) NOT NULL, alt VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX idx_bcf495971d55b925 ON autos_photo (auto_id)');
        $this->addSql('ALTER TABLE autos_photo ADD CONSTRAINT fk_bcf495971d55b925 FOREIGN KEY (auto_id) REFERENCES auta (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
