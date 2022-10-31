<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221028072641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apiinstallperm (id INT AUTO_INCREMENT NOT NULL, branch_id VARCHAR(255) NOT NULL, install_id INT DEFAULT NULL, client_id INT NOT NULL, members_read TINYINT(1) NOT NULL, members_add TINYINT(1) NOT NULL, members_products_add TINYINT(1) NOT NULL, members_payement_shedules_read TINYINT(1) NOT NULL, members_satistiques_read TINYINT(1) NOT NULL, members_subscription_read TINYINT(1) NOT NULL, payement_schedules_write TINYINT(1) NOT NULL, payement_schedules_read TINYINT(1) NOT NULL, payement_day_read TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE apiinstallperm');
    }
}
