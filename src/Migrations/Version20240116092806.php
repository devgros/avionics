<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240116092806 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE devis ADD is_no_tva TINYINT(1) DEFAULT NULL, ADD is_exo_tva TINYINT(1) DEFAULT NULL, ADD is_8_5_tva TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier_article_externe ADD montant_fdp_ht NUMERIC(10, 2) DEFAULT NULL, ADD montant_fdc_ht NUMERIC(10, 2) DEFAULT NULL, CHANGE ref pn VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE devis DROP is_no_tva, DROP is_exo_tva, DROP is_8_5_tva');
        $this->addSql('ALTER TABLE dossier_article_externe DROP montant_fdp_ht, DROP montant_fdc_ht, CHANGE pn ref VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
