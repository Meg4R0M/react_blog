<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181125143209 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, image_id INT NOT NULL, titre VARCHAR(255) NOT NULL, accroche LONGTEXT NOT NULL, post LONGTEXT NOT NULL, publie_le DATETIME NOT NULL, modifie_le DATETIME NOT NULL, auteur VARCHAR(255) NOT NULL, publie TINYINT(1) NOT NULL, INDEX IDX_BFDD3168BCF5E72D (categorie_id), UNIQUE INDEX UNIQ_BFDD31683DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, image_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3AF346683DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, path VARCHAR(255) NOT NULL, alt VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD31683DA5256D FOREIGN KEY (image_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF346683DA5256D FOREIGN KEY (image_id) REFERENCES media (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168BCF5E72D');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD31683DA5256D');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF346683DA5256D');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE media');
    }
}
