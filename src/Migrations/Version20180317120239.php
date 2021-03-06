<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180317120239 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF26C8A81A9');
        $this->addSql('DROP INDEX IDX_24CC0DF26C8A81A9 ON panier');
        $this->addSql('ALTER TABLE panier CHANGE products_id product_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF24584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF24584665A ON panier (product_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF24584665A');
        $this->addSql('DROP INDEX IDX_24CC0DF24584665A ON panier');
        $this->addSql('ALTER TABLE panier CHANGE product_id products_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF26C8A81A9 FOREIGN KEY (products_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF26C8A81A9 ON panier (products_id)');
    }
}
