ALTER TABLE `gzdata`.`games` 
ADD COLUMN `starting_points` TINYINT UNSIGNED NOT NULL DEFAULT 3 AFTER `name`;
