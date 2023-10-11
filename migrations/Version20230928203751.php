<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230928203751 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE test2_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE test2 (id INT NOT NULL, iname VARCHAR(100) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE article ADD date_added DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE article ALTER content TYPE TEXT');
        $this->addSql('ALTER TABLE article ALTER content TYPE TEXT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE test2_id_seq CASCADE');
        $this->addSql('DROP TABLE test2');
        $this->addSql('ALTER TABLE article DROP date_added');
        $this->addSql('ALTER TABLE article ALTER content TYPE VARCHAR(2000)');
    }
}
