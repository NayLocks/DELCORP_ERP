<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220307143759 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, customer_code VARCHAR(10) NOT NULL, call_name VARCHAR(100) DEFAULT NULL, social_reason VARCHAR(100) NOT NULL, address VARCHAR(255) NOT NULL, post_box VARCHAR(50) DEFAULT NULL, zip_code INT NOT NULL, city VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customers_address (id INT AUTO_INCREMENT NOT NULL, customer_code_id INT NOT NULL, address VARCHAR(255) NOT NULL, post_box VARCHAR(50) DEFAULT NULL, zip_code INT NOT NULL, city VARCHAR(100) NOT NULL, INDEX IDX_3106BC643B075AA9 (customer_code_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE customers_address ADD CONSTRAINT FK_3106BC643B075AA9 FOREIGN KEY (customer_code_id) REFERENCES customers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customers_address DROP FOREIGN KEY FK_3106BC643B075AA9');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE customers_address');
    }
}
