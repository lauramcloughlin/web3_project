<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170506172513 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE bibliography_reference (bibliography_id INT NOT NULL, reference_id INT NOT NULL, INDEX IDX_B34969E58183C188 (bibliography_id), INDEX IDX_B34969E51645DEA9 (reference_id), PRIMARY KEY(bibliography_id, reference_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE bibliography_reference ADD CONSTRAINT FK_B34969E58183C188 FOREIGN KEY (bibliography_id) REFERENCES bibliography (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bibliography_reference ADD CONSTRAINT FK_B34969E51645DEA9 FOREIGN KEY (reference_id) REFERENCES reference (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reference CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE bibliography_reference');
        $this->addSql('ALTER TABLE reference CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
    }
}
