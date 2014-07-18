ALTER TABLE `players` 
DROP FOREIGN KEY `players_idfk_2`;
ALTER TABLE `gzdata`.`players` 
CHANGE COLUMN `player_id` `user_id` INT(10) UNSIGNED NOT NULL ,
DROP INDEX `player_id` ,
ADD INDEX `user_id` (`user_id` ASC);
ALTER TABLE `gzdata`.`players` 
ADD CONSTRAINT `players_idfk_2`
  FOREIGN KEY (`user_id`)
  REFERENCES `gzdata`.`users` (`id`)
  ON DELETE CASCADE;
