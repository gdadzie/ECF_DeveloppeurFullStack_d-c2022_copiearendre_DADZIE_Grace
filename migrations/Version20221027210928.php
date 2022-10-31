<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221027210928 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apiclients ADD active TINYINT(1) NOT NULL, ADD short_description VARCHAR(255) DEFAULT NULL, ADD full_description VARCHAR(255) DEFAULT NULL, ADD logo_url VARCHAR(255) DEFAULT NULL, ADD url VARCHAR(255) DEFAULT NULL, ADD dpo VARCHAR(255) DEFAULT NULL, ADD technical_contact VARCHAR(255) DEFAULT NULL, ADD commercial_contact VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apiclients DROP active, DROP short_description, DROP full_description, DROP logo_url, DROP url, DROP dpo, DROP technical_contact, DROP commercial_contact');
    }
}
