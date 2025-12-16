CREATE TABLE `tp`.`Text` 
(`id` INT NULL ,
 `Nom` VARCHAR(400) NOT NULL ,
  `Contenu` VARCHAR(1500) NOT NULL ,
    UNIQUE (`id`)
   ) ENGINE = InnoDB;