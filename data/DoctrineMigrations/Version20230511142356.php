<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230511142356 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO dtb_csv(csv_type_id, creator_id, entity_name, field_name, reference_field_name, disp_name, sort_no, enabled, create_date, update_date, discriminator_type) VALUES(5, null, ?, 'cseo_title', null, '[SEO]タイトル', 6, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'csv')", ['Eccube\\\\Entity\\\\Category']);
        $this->addSql("INSERT INTO dtb_csv(csv_type_id, creator_id, entity_name, field_name, reference_field_name, disp_name, sort_no, enabled, create_date, update_date, discriminator_type) VALUES(5, null, ?, 'cseo_keywords', null, '[SEO]キーワード', 6, 1, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP, 'csv')", ['Eccube\\\\Entity\\\\Category']);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
