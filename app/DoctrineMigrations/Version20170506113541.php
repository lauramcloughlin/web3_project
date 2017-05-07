<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170506113541 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reference ADD user_id INT DEFAULT NULL, DROP userId, CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE reference ADD CONSTRAINT FK_AEA34913A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AEA34913A76ED395 ON reference (user_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reference DROP FOREIGN KEY FK_AEA34913A76ED395');
        $this->addSql('DROP INDEX IDX_AEA34913A76ED395 ON reference');
        $this->addSql('ALTER TABLE reference ADD userId INT NOT NULL, DROP user_id, CHANGE dateCreated dateCreated DATETIME DEFAULT NULL, CHANGE dateLastEdited dateLastEdited DATETIME DEFAULT NULL');
    }
}
