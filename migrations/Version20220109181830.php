<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220109181830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE forum_topic_forum_category (forum_topic_id INT NOT NULL, forum_category_id INT NOT NULL, INDEX IDX_DADDD9B138A6ADDA (forum_topic_id), INDEX IDX_DADDD9B114721E40 (forum_category_id), PRIMARY KEY(forum_topic_id, forum_category_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE forum_topic_forum_category ADD CONSTRAINT FK_DADDD9B138A6ADDA FOREIGN KEY (forum_topic_id) REFERENCES forum_topic (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE forum_topic_forum_category ADD CONSTRAINT FK_DADDD9B114721E40 FOREIGN KEY (forum_category_id) REFERENCES forum_category (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE forum_topic_forum_category');
    }
}
