<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104132608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_user (id INT AUTO_INCREMENT NOT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_user_article (article_user_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_897B67FD4ABC9722 (article_user_id), INDEX IDX_897B67FD7294869C (article_id), PRIMARY KEY(article_user_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_user_user (article_user_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_2D27CAA44ABC9722 (article_user_id), INDEX IDX_2D27CAA4A76ED395 (user_id), PRIMARY KEY(article_user_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_user_article ADD CONSTRAINT FK_897B67FD4ABC9722 FOREIGN KEY (article_user_id) REFERENCES article_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_article ADD CONSTRAINT FK_897B67FD7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_user ADD CONSTRAINT FK_2D27CAA44ABC9722 FOREIGN KEY (article_user_id) REFERENCES article_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_user_user ADD CONSTRAINT FK_2D27CAA4A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_user_article DROP FOREIGN KEY FK_897B67FD4ABC9722');
        $this->addSql('ALTER TABLE article_user_user DROP FOREIGN KEY FK_2D27CAA44ABC9722');
        $this->addSql('DROP TABLE article_user');
        $this->addSql('DROP TABLE article_user_article');
        $this->addSql('DROP TABLE article_user_user');
    }
}
