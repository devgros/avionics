<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240130163111 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410438F5B63');
        $this->addSql('DROP TABLE mode_paiement');
        $this->addSql('DROP INDEX IDX_FE866410438F5B63 ON facture');
        $this->addSql('ALTER TABLE facture ADD mode_paiement ENUM(\'Non défini\',\'Virement\', \'Chèque\', \'Liquide\'), DROP mode_paiement_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE mode_paiement (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE facture ADD mode_paiement_id INT DEFAULT NULL, DROP mode_paiement');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410438F5B63 FOREIGN KEY (mode_paiement_id) REFERENCES mode_paiement (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_FE866410438F5B63 ON facture (mode_paiement_id)');
    }
}
