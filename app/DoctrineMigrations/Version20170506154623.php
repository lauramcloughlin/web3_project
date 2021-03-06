<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170506154623 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE reference_tag (reference_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_C74181821645DEA9 (reference_id), INDEX IDX_C7418182BAD26311 (tag_id), PRIMARY KEY(reference_id, tag_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reference_tag ADD CONSTRAINT FK_C74181821645DEA9 FOREIGN KEY (reference_id) REFERENCES reference (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reference_tag ADD CONSTRAINT FK_C7418182BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reference CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE reference_tag');
        $this->addSql('ALTER TABLE reference CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
    }
}
