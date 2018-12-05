<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181205170112 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE articles (id INT AUTO_INCREMENT NOT NULL, categorie_id INT NOT NULL, image_id INT NOT NULL, titre VARCHAR(255) NOT NULL, accroche LONGTEXT NOT NULL, post LONGTEXT NOT NULL, publie_le DATETIME NOT NULL, modifie_le DATETIME NOT NULL, auteur VARCHAR(255) NOT NULL, publie TINYINT(1) NOT NULL, INDEX IDX_BFDD3168BCF5E72D (categorie_id), UNIQUE INDEX UNIQ_BFDD31683DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, image_id INT NOT NULL, nom VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3AF346683DA5256D (image_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, path VARCHAR(255) NOT NULL, alt VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_login (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', user_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', ip VARCHAR(255) NOT NULL, host VARCHAR(255) NOT NULL, agent LONGTEXT NOT NULL, client_type VARCHAR(255) DEFAULT NULL, client_name VARCHAR(255) DEFAULT NULL, client_short_name VARCHAR(255) DEFAULT NULL, client_version VARCHAR(255) DEFAULT NULL, client_engine VARCHAR(255) DEFAULT NULL, os_name VARCHAR(255) DEFAULT NULL, os_short_name VARCHAR(255) DEFAULT NULL, os_version VARCHAR(255) DEFAULT NULL, os_platform VARCHAR(255) DEFAULT NULL, device_name VARCHAR(255) DEFAULT NULL, brand_name VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, login_time DATETIME NOT NULL, INDEX user (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', updated_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', deleted_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', username VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX created_by_id (created_by_id), INDEX updated_by_id (updated_by_id), INDEX deleted_by_id (deleted_by_id), UNIQUE INDEX uq_username (username), UNIQUE INDEX uq_email (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_user_group (user_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', user_group_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', INDEX IDX_28657971A76ED395 (user_id), INDEX IDX_286579711ED93D47 (user_group_id), PRIMARY KEY(user_id, user_group_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE request_log (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', user_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', client_ip VARCHAR(255) NOT NULL, method VARCHAR(255) NOT NULL, scheme VARCHAR(5) NOT NULL, http_host VARCHAR(255) NOT NULL, base_path VARCHAR(255) NOT NULL, script VARCHAR(255) NOT NULL, path VARCHAR(255) DEFAULT NULL, query_string LONGTEXT DEFAULT NULL, uri LONGTEXT NOT NULL, controller VARCHAR(255) DEFAULT NULL, action VARCHAR(255) DEFAULT NULL, headers LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', content_type VARCHAR(255) DEFAULT NULL, content_type_short VARCHAR(255) DEFAULT NULL, content LONGTEXT DEFAULT NULL, parameters LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', status_code INT NOT NULL, response_content_length INT NOT NULL, is_master_request TINYINT(1) NOT NULL, is_xml_http_request TINYINT(1) NOT NULL, time DATETIME NOT NULL, INDEX user_id (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trans_unit (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', updated_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', deleted_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', domain VARCHAR(255) NOT NULL, `key` VARCHAR(255) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX created_by_id (created_by_id), INDEX updated_by_id (updated_by_id), INDEX deleted_by_id (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE locale (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', updated_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', deleted_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', name VARCHAR(255) NOT NULL, name_short VARCHAR(255) NOT NULL, code VARCHAR(10) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX created_by_id (created_by_id), INDEX updated_by_id (updated_by_id), INDEX deleted_by_id (deleted_by_id), UNIQUE INDEX uq_code (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_group (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', updated_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', deleted_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', name VARCHAR(255) NOT NULL, role VARCHAR(20) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX created_by_id (created_by_id), INDEX updated_by_id (updated_by_id), INDEX deleted_by_id (deleted_by_id), UNIQUE INDEX uq_role (role), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE translation (id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', trans_unit_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', locale_id CHAR(36) NOT NULL COMMENT \'(DC2Type:guid)\', created_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', updated_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', deleted_by_id CHAR(36) DEFAULT NULL COMMENT \'(DC2Type:guid)\', content LONGTEXT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX trans_unit_id (trans_unit_id), INDEX locale_id (locale_id), INDEX created_by_id (created_by_id), INDEX updated_by_id (updated_by_id), INDEX deleted_by_id (deleted_by_id), UNIQUE INDEX uq_trans_unit_locale (trans_unit_id, locale_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD31683DA5256D FOREIGN KEY (image_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE categories ADD CONSTRAINT FK_3AF346683DA5256D FOREIGN KEY (image_id) REFERENCES media (id)');
        $this->addSql('ALTER TABLE user_login ADD CONSTRAINT FK_48CA3048A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user_user_group ADD CONSTRAINT FK_28657971A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_user_group ADD CONSTRAINT FK_286579711ED93D47 FOREIGN KEY (user_group_id) REFERENCES user_group (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE request_log ADD CONSTRAINT FK_42152989A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE trans_unit ADD CONSTRAINT FK_CFBFC560B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE trans_unit ADD CONSTRAINT FK_CFBFC560896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE trans_unit ADD CONSTRAINT FK_CFBFC560C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE locale ADD CONSTRAINT FK_4180C698B03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE locale ADD CONSTRAINT FK_4180C698896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE locale ADD CONSTRAINT FK_4180C698C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user_group ADD CONSTRAINT FK_8F02BF9DB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user_group ADD CONSTRAINT FK_8F02BF9D896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE user_group ADD CONSTRAINT FK_8F02BF9DC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456FC3C583C9 FOREIGN KEY (trans_unit_id) REFERENCES trans_unit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456FE559DFD1 FOREIGN KEY (locale_id) REFERENCES locale (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456FB03A8386 FOREIGN KEY (created_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456F896DBBDE FOREIGN KEY (updated_by_id) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE translation ADD CONSTRAINT FK_B469456FC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168BCF5E72D');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD31683DA5256D');
        $this->addSql('ALTER TABLE categories DROP FOREIGN KEY FK_3AF346683DA5256D');
        $this->addSql('ALTER TABLE user_login DROP FOREIGN KEY FK_48CA3048A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649B03A8386');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649896DBBDE');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C76F1F52');
        $this->addSql('ALTER TABLE user_user_group DROP FOREIGN KEY FK_28657971A76ED395');
        $this->addSql('ALTER TABLE request_log DROP FOREIGN KEY FK_42152989A76ED395');
        $this->addSql('ALTER TABLE trans_unit DROP FOREIGN KEY FK_CFBFC560B03A8386');
        $this->addSql('ALTER TABLE trans_unit DROP FOREIGN KEY FK_CFBFC560896DBBDE');
        $this->addSql('ALTER TABLE trans_unit DROP FOREIGN KEY FK_CFBFC560C76F1F52');
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C698B03A8386');
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C698896DBBDE');
        $this->addSql('ALTER TABLE locale DROP FOREIGN KEY FK_4180C698C76F1F52');
        $this->addSql('ALTER TABLE user_group DROP FOREIGN KEY FK_8F02BF9DB03A8386');
        $this->addSql('ALTER TABLE user_group DROP FOREIGN KEY FK_8F02BF9D896DBBDE');
        $this->addSql('ALTER TABLE user_group DROP FOREIGN KEY FK_8F02BF9DC76F1F52');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456FB03A8386');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456F896DBBDE');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456FC76F1F52');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456FC3C583C9');
        $this->addSql('ALTER TABLE translation DROP FOREIGN KEY FK_B469456FE559DFD1');
        $this->addSql('ALTER TABLE user_user_group DROP FOREIGN KEY FK_286579711ED93D47');
        $this->addSql('DROP TABLE articles');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE user_login');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_user_group');
        $this->addSql('DROP TABLE request_log');
        $this->addSql('DROP TABLE trans_unit');
        $this->addSql('DROP TABLE locale');
        $this->addSql('DROP TABLE user_group');
        $this->addSql('DROP TABLE translation');
    }
}
