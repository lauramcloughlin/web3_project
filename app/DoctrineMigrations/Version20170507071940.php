<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170507071940 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bibliography CHANGE textSummary textSummary LONGTEXT DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE reference CHANGE textSummary textSummary LONGTEXT DEFAULT NULL, CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE bibliography_reference DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE bibliography_reference ADD PRIMARY KEY (reference_id, bibliography_id)');
        $this->addSql('ALTER TABLE tag CHANGE status status VARCHAR(255) DEFAULT NULL, CHANGE noOfVotes noOfVotes INT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE bibliography CHANGE textSummary textSummary LONGTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE status status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE bibliography_reference DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE bibliography_reference ADD PRIMARY KEY (bibliography_id, reference_id)');
        $this->addSql('ALTER TABLE reference CHANGE textSummary textSummary LONGTEXT NOT NULL COLLATE utf8_unicode_ci, CHANGE status status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE tag CHANGE status status VARCHAR(255) NOT NULL COLLATE utf8_unicode_ci, CHANGE noOfVotes noOfVotes INT NOT NULL');
    }
}
