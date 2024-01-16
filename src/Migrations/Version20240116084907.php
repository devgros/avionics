<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240116084907 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appareil CHANGE marque_moteur1 marque_moteur1 VARCHAR(255) DEFAULT NULL, CHANGE model_moteur1 model_moteur1 VARCHAR(255) DEFAULT NULL, CHANGE num_serie_moteur1 num_serie_moteur1 VARCHAR(255) DEFAULT NULL, CHANGE marque_helice1 marque_helice1 VARCHAR(255) DEFAULT NULL, CHANGE model_helice1 model_helice1 VARCHAR(255) DEFAULT NULL, CHANGE num_serie_helice1 num_serie_helice1 VARCHAR(255) DEFAULT NULL, CHANGE nom_responsable_vol nom_responsable_vol VARCHAR(255) DEFAULT NULL, CHANGE prenom_responsable_vol prenom_responsable_vol VARCHAR(255) DEFAULT NULL, CHANGE email_responsable_vol email_responsable_vol VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE appareil CHANGE marque_moteur1 marque_moteur1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE model_moteur1 model_moteur1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE num_serie_moteur1 num_serie_moteur1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE marque_helice1 marque_helice1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE model_helice1 model_helice1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE num_serie_helice1 num_serie_helice1 VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE nom_responsable_vol nom_responsable_vol VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE prenom_responsable_vol prenom_responsable_vol VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`, CHANGE email_responsable_vol email_responsable_vol VARCHAR(255) CHARACTER SET utf8mb3 NOT NULL COLLATE `utf8mb3_unicode_ci`');
    }
}
