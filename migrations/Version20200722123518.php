<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200722123518 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE artist (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(45) NOT NULL, lastname VARCHAR(45) NOT NULL, age INT NOT NULL, description VARCHAR(500) NOT NULL, picture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artist_skill (artist_id INT NOT NULL, skill_id INT NOT NULL, INDEX IDX_3E31D424B7970CF8 (artist_id), INDEX IDX_3E31D4245585C142 (skill_id), PRIMARY KEY(artist_id, skill_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, price_id INT DEFAULT NULL, name VARCHAR(45) NOT NULL, number_of_persons INT NOT NULL, INDEX IDX_CBE5A331D614C7E7 (price_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE price (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(45) NOT NULL, price INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(45) NOT NULL, lastname VARCHAR(45) NOT NULL, email VARCHAR(60) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE artist_skill ADD CONSTRAINT FK_3E31D424B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE artist_skill ADD CONSTRAINT FK_3E31D4245585C142 FOREIGN KEY (skill_id) REFERENCES skill (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE book ADD CONSTRAINT FK_CBE5A331D614C7E7 FOREIGN KEY (price_id) REFERENCES price (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist_skill DROP FOREIGN KEY FK_3E31D424B7970CF8');
        $this->addSql('ALTER TABLE book DROP FOREIGN KEY FK_CBE5A331D614C7E7');
        $this->addSql('ALTER TABLE artist_skill DROP FOREIGN KEY FK_3E31D4245585C142');
        $this->addSql('DROP TABLE artist');
        $this->addSql('DROP TABLE artist_skill');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE price');
        $this->addSql('DROP TABLE skill');
        $this->addSql('DROP TABLE user');
    }
}
