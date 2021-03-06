<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180521133258 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE OMSType (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, omscontent VARCHAR(255) NOT NULL, comments_allowed VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, posted_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, post_type INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (pcomment_id VARCHAR(255) NOT NULL, comment VARCHAR(255) NOT NULL, post_id VARCHAR(255) NOT NULL, PRIMARY KEY(pcomment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_type (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, published_at DATETIME NOT NULL, comment_id INT DEFAULT NULL, post_content LONGTEXT NOT NULL, slug LONGTEXT NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE post');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, published_at DATETIME NOT NULL, comment_id INT DEFAULT NULL, post_content LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, slug LONGTEXT NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE OMSType');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE post_type');
    }
}
