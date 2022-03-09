DROP TABLE IF EXISTS `#__resourceman`;

CREATE TABLE `#__resourceman` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`title` VARCHAR(25) NOT NULL, /* Changed from greeting per author */
	`published` tinyint(4) NOT NULL DEFAULT '1',
	PRIMARY KEY (`id`)
)
    ENGINE = InnoDB /* Changed from MyISAM per author */
	AUTO_INCREMENT = 0
	DEFAULT CHARSET = utf8mb4 /* Changed from utf8 per author */
	DEFAULT COLLATE = utf8mb4_unicode_ci; /* Added field per author */

INSERT INTO `#__resourceman` (`title`) VALUES /* Changed from greeting per author */
('Resource One'),
('Resource Two');