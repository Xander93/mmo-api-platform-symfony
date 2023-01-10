<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230110204719 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE active_login (user_id INT AUTO_INCREMENT NOT NULL, session_key VARCHAR(255) NOT NULL, character_id INT NOT NULL, PRIMARY KEY(user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, name VARCHAR(255) NOT NULL, class INT NOT NULL, gender INT NOT NULL, health INT NOT NULL, mana INT NOT NULL, level INT NOT NULL, experience INT NOT NULL, clan INT NOT NULL, posx INT NOT NULL, posy INT NOT NULL, posz INT NOT NULL, rotation_yaw DOUBLE PRECISION NOT NULL, equip_head VARCHAR(255) NOT NULL, equip_chest VARCHAR(255) NOT NULL, equip_hands VARCHAR(255) NOT NULL, equip_legs VARCHAR(255) NOT NULL, equip_feet VARCHAR(255) NOT NULL, hotbar0 VARCHAR(255) NOT NULL, hotbar1 VARCHAR(255) NOT NULL, hotbar2 VARCHAR(255) NOT NULL, hotbar3 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clan (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, leader_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE inventory (id INT AUTO_INCREMENT NOT NULL, character_id INT NOT NULL, slot INT NOT NULL, item VARCHAR(255) NOT NULL, amount INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quest (id INT AUTO_INCREMENT NOT NULL, character_id INT NOT NULL, quest VARCHAR(255) NOT NULL, completed TINYINT(1) NOT NULL, task1 INT NOT NULL, task2 INT NOT NULL, task3 INT NOT NULL, task4 INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, role INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE active_login');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE clan');
        $this->addSql('DROP TABLE inventory');
        $this->addSql('DROP TABLE quest');
        $this->addSql('DROP TABLE user');
    }
}
