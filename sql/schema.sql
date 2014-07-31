
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- castle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `castle`;

CREATE TABLE `castle`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `name` VARCHAR(50),
    `castle_type_id` INTEGER(6),
    `castle_location_id` INTEGER(6),
    `coordinates` VARCHAR(40),
    `X` INTEGER(6),
    `Y` INTEGER(6),
    `silver` INTEGER(5),
    `copper` INTEGER(5),
    `current_st` INTEGER(4),
    `current_sk` INTEGER(4),
    `current_bs` INTEGER(4),
    `current_as` INTEGER(4),
    `current_pr` INTEGER(4),
    `current_lr` INTEGER(4),
    `current_hk` INTEGER(4),
    `current_ok` INTEGER(4),
    `mission_st` INTEGER(4),
    `mission_sk` INTEGER(4),
    `mission_bs` INTEGER(4),
    `mission_as` INTEGER(4),
    `mission_pr` INTEGER(4),
    `mission_lr` INTEGER(4),
    `usage_off` TINYINT(1),
    `usage_def` TINYINT(1),
    `mission_priority` TINYINT(1),
    `environment_card` TINYINT(1),
    `autodef_coordinates` VARCHAR(40),
    `autodef_X` INTEGER(6),
    `autodef_Y` INTEGER(6),
    `points` INTEGER(3),
    `free_population` INTEGER(4),
    `last_import` DATETIME,
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `castle_FI_1` (`castle_type_id`),
    INDEX `castle_FI_2` (`castle_location_id`),
    INDEX `castle_FI_3` (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- castle_type
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `castle_type`;

CREATE TABLE `castle_type`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `type` CHAR(3) COMMENT 'Off, Def, Mix',
    `name` VARCHAR(50),
    `total_st` INTEGER(4),
    `total_sk` INTEGER(4),
    `total_bs` INTEGER(4),
    `total_as` INTEGER(4),
    `total_pr` INTEGER(4),
    `total_lr` INTEGER(4),
    `total_hk` INTEGER(4),
    `total_ok` INTEGER(4),
    `mission_st` INTEGER(4),
    `mission_sk` INTEGER(4),
    `mission_bs` INTEGER(4),
    `mission_as` INTEGER(4),
    `mission_pr` INTEGER(4),
    `mission_lr` INTEGER(4),
    `bergfried` INTEGER(2),
    `zeughaus` INTEGER(2),
    `taverne` INTEGER(2),
    `bibliothek` INTEGER(2),
    `wehranlage` INTEGER(2),
    `markt` INTEGER(2),
    `bauernhof` INTEGER(2),
    `holzfaeller` INTEGER(2),
    `holzlager` INTEGER(2),
    `steinbruch` INTEGER(2),
    `steinlager` INTEGER(2),
    `erzmine` INTEGER(2),
    `erzlager` INTEGER(2),
    `langbogen` TINYINT(1),
    `dreifelderwirtschaft` TINYINT(1),
    `kummet` TINYINT(1),
    `vorratskeller` TINYINT(1),
    `steigbuegel` TINYINT(1),
    `waffenschmied` TINYINT(1),
    `ruestungsschmied` TINYINT(1),
    `bierpruefer` TINYINT(1),
    `schwertschmied` TINYINT(1),
    `eisenhaertung` TINYINT(1),
    `armbrust` TINYINT(1),
    `giftpfeile` TINYINT(1),
    `pferdezucht` TINYINT(1),
    `waffenherstellung` TINYINT(1),
    `pferdepanzerung` TINYINT(1),
    `schubkarren` TINYINT(1),
    `brandpfeile` TINYINT(1),
    `hufschmied` TINYINT(1),
    `umgebungskarte` TINYINT(1),
    `zisterne` TINYINT(1),
    `max_population` INTEGER(5),
    `free_population` INTEGER(5),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `alternate_1` (`name`, `type`),
    INDEX `castle_type_FI_1` (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- attack
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `attack`;

CREATE TABLE `attack`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user` INTEGER(6),
    `attack_time` DATETIME,
    `duration` INTEGER(4) COMMENT '<998 = Anzahl Stunden; 998: bis zum Nachtmodus; 999: unendlich',
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50),
    `password` VARCHAR(30),
    `server` CHAR(6) COMMENT 'DE-7',
    `playerid` CHAR(20) COMMENT 'Vollständiger Spielerlink',
    `phone` CHAR(20),
    `email` CHAR(30),
    `sms` TINYINT(1),
    `import_status` INTEGER(2) COMMENT '10=only tavernbrawl; 20=only sourcecode; 100=ok',
    `import_date` DATETIME,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- time_table
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `time_table`;

CREATE TABLE `time_table`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `type` CHAR(3) COMMENT 'int / ext',
    `from` TIME,
    `to` TIME,
    `user_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `time_table_FI_1` (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- castle_location
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `castle_location`;

CREATE TABLE `castle_location`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `name` VARCHAR(50),
    `parent_id` INTEGER(6),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    `tree_left` INTEGER,
    `tree_right` INTEGER,
    `tree_level` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `castle_location_FI_1` (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- target
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `target`;

CREATE TABLE `target`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `user_id` INTEGER,
    `name` VARCHAR(50),
    `coordinates` VARCHAR(40),
    `date` CHAR(10),
    `time` CHAR(5),
    `start_time` TINYINT(1),
    `use_mission_troops` TINYINT(1),
    `filter_Castles_Off` TINYINT(1),
    `filter_Castles_Def` TINYINT(1),
    `filter_Castles_Mix` TINYINT(1),
    `filter_Troops_Marker` TINYINT(1),
    `filter_Troops_Off` TINYINT(1),
    `filter_Troops_Def` TINYINT(1),
    `sort` CHAR(10) COMMENT 'time, silver, sk, bs, lr',
    `priority` CHAR(10) COMMENT 'silver; runtime',
    `target_silver` INTEGER(8),
    `target_sk` INTEGER(8),
    `target_bs` INTEGER(8),
    `target_lr` INTEGER(8),
    `total_silver` INTEGER(8),
    `total_st` INTEGER(8),
    `total_sk` INTEGER(8),
    `total_bs` INTEGER(8),
    `total_as` INTEGER(8),
    `total_pr` INTEGER(8),
    `total_lr` INTEGER(8),
    `created_at` DATETIME,
    `updated_at` DATETIME,
    PRIMARY KEY (`id`),
    INDEX `target_FI_1` (`user_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- attack2castle
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `attack2castle`;

CREATE TABLE `attack2castle`
(
    `attack_id` INTEGER NOT NULL,
    `castle_id` INTEGER NOT NULL,
    PRIMARY KEY (`attack_id`,`castle_id`),
    INDEX `attack2castle_FI_1` (`castle_id`)
) ENGINE=MyISAM;

-- ---------------------------------------------------------------------
-- target_actions
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `target_actions`;

CREATE TABLE `target_actions`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `target_id` INTEGER,
    `castle_id` INTEGER(10),
    `attack_silver` INTEGER(5),
    `attack_st` TINYINT(1),
    `attack_sk` TINYINT(1),
    `attack_bs` TINYINT(1),
    `attack_as` TINYINT(1),
    `attack_pr` TINYINT(1),
    `attack_lr` TINYINT(1),
    `attack_hk` TINYINT(1),
    `attack_ok` TINYINT(1),
    PRIMARY KEY (`id`),
    UNIQUE INDEX `IX_UQ_target_actions_id` (`id`),
    INDEX `target_actions_FI_1` (`target_id`),
    INDEX `target_actions_FI_2` (`castle_id`)
) ENGINE=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
