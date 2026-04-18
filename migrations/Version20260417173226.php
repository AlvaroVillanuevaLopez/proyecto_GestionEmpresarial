<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260417173226 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE historial_subidas (id INT AUTO_INCREMENT NOT NULL, nombre_original VARCHAR(255) NOT NULL, nombre_backup VARCHAR(255) DEFAULT NULL, fecha_subida DATETIME NOT NULL, empresa_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_475A712A521E1991 (empresa_id), INDEX IDX_475A712AA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE historial_subidas ADD CONSTRAINT FK_475A712A521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
        $this->addSql('ALTER TABLE historial_subidas ADD CONSTRAINT FK_475A712AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE historial_subidas DROP FOREIGN KEY FK_475A712A521E1991');
        $this->addSql('ALTER TABLE historial_subidas DROP FOREIGN KEY FK_475A712AA76ED395');
        $this->addSql('DROP TABLE historial_subidas');
    }
}
