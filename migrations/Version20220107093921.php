<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220107093921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_comments DROP FOREIGN KEY FK_A766241D71E064B');
        $this->addSql('ALTER TABLE article_user_article DROP FOREIGN KEY FK_897B67FD7294869C');
        $this->addSql('ALTER TABLE article_user_article DROP FOREIGN KEY FK_897B67FD4ABC9722');
        $this->addSql('ALTER TABLE article_user_user DROP FOREIGN KEY FK_2D27CAA44ABC9722');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_comments');
        $this->addSql('DROP TABLE article_user');
        $this->addSql('DROP TABLE article_user_article');
        $this->addSql('DROP TABLE article_user_user');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE program');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, is_premium TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_comments (id INT AUTO_INCREMENT NOT NULL, id_user_id INT NOT NULL, id_article_id INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL, content LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_A766241D71E064B (id_article_id), INDEX IDX_A76624179F37AE5 (id_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_user (id INT AUTO_INCREMENT NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_user_article (article_user_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_897B67FD4ABC9722 (article_user_id), INDEX IDX_897B67FD7294869C (article_id), PRIMARY KEY(article_user_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE article_user_user (article_user_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_2D27CAA44ABC9722 (article_user_id), INDEX IDX_2D27CAA4A76ED395 (user_id), PRIMARY KEY(article_user_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE category (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE program (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article_comments ADD CONSTRAINT FK_A766241D71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article_comments ADD CONSTRAINT FK_A76624179F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article_user_article ADD CONSTRAINT FK_897B67FD7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_article ADD CONSTRAINT FK_897B67FD4ABC9722 FOREIGN KEY (article_user_id) REFERENCES article_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_user ADD CONSTRAINT FK_2D27CAA4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_user ADD CONSTRAINT FK_2D27CAA44ABC9722 FOREIGN KEY (article_user_id) REFERENCES article_user (id) ON DELETE CASCADE');
    }
}
