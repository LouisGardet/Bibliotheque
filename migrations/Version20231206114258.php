<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231206114258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__auteur AS SELECT id, nom, prénom, birthday, nationalite, biographie FROM auteur');
        $this->addSql('DROP TABLE auteur');
        $this->addSql('CREATE TABLE auteur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, birthday VARCHAR(255) NOT NULL, nationalite INTEGER NOT NULL, biographie VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO auteur (id, nom, prenom, birthday, nationalite, biographie) SELECT id, nom, prénom, birthday, nationalite, biographie FROM __temp__auteur');
        $this->addSql('DROP TABLE __temp__auteur');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__auteur AS SELECT id, nom, prenom, birthday, nationalite, biographie FROM auteur');
        $this->addSql('DROP TABLE auteur');
        $this->addSql('CREATE TABLE auteur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prénom VARCHAR(255) NOT NULL, birthday VARCHAR(255) NOT NULL, nationalite INTEGER NOT NULL, biographie VARCHAR(255) NOT NULL)');
        $this->addSql('INSERT INTO auteur (id, nom, prénom, birthday, nationalite, biographie) SELECT id, nom, prenom, birthday, nationalite, biographie FROM __temp__auteur');
        $this->addSql('DROP TABLE __temp__auteur');
    }
}
