<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250401125017 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE auteurs (id INT AUTO_INCREMENT NOT NULL, auteurs VARCHAR(20) NOT NULL, nom VARCHAR(40) NOT NULL, age INT DEFAULT NULL, date_birthday DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE auteurs_name (auteurs_id INT NOT NULL, name_id INT NOT NULL, INDEX IDX_79D42129AE784107 (auteurs_id), INDEX IDX_79D4212971179CD6 (name_id), PRIMARY KEY(auteurs_id, name_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE auteurs_name ADD CONSTRAINT FK_79D42129AE784107 FOREIGN KEY (auteurs_id) REFERENCES auteurs (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE auteurs_name ADD CONSTRAINT FK_79D4212971179CD6 FOREIGN KEY (name_id) REFERENCES name (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE auteurs_name DROP FOREIGN KEY FK_79D42129AE784107');
        $this->addSql('ALTER TABLE auteurs_name DROP FOREIGN KEY FK_79D4212971179CD6');
        $this->addSql('DROP TABLE auteurs');
        $this->addSql('DROP TABLE auteurs_name');
    }
}
