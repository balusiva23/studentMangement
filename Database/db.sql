ALTER TABLE `leader_board` ADD `color` VARCHAR(55) NOT NULL AFTER `team`;


ALTER TABLE `announcement` ADD `status` ENUM('unread','read') NOT NULL AFTER `isActive`;

ALTER TABLE `announcement` ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `status`;

ALTER TABLE `events` ADD `userid` INT(11) NOT NULL AFTER `title`, ADD `color` VARCHAR(55) NOT NULL AFTER `userid`;