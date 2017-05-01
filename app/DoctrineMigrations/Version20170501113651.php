<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170501113651 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bibliography (id INT AUTO_INCREMENT NOT NULL, bibliographyName VARCHAR(255) NOT NULL, textSummary LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, userId INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reference (id INT AUTO_INCREMENT NOT NULL, nameOfAuthor VARCHAR(255) NOT NULL, yearPublished VARCHAR(255) NOT NULL, titleOfReference VARCHAR(255) NOT NULL, cityPublished VARCHAR(255) NOT NULL, publisher VARCHAR(255) NOT NULL, pagesUsed VARCHAR(255) NOT NULL, textSummary LONGTEXT NOT NULL, userId INT NOT NULL, status VARCHAR(255) NOT NULL, dateCreated DATETIME NOT NULL, dateLastEdited DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, tagName VARCHAR(255) NOT NULL, status VARCHAR(255) NOT NULL, noOfVotes INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bibliography');
        $this->addSql('DROP TABLE reference');
        $this->addSql('DROP TABLE tag');
    }
}
