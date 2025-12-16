CREATE TABLE `tp`.`actualite` 
(`id` INT NULL ,
 `Nom` VARCHAR(400) NOT NULL ,
  `Contenu` VARCHAR(1500) NOT NULL ,
   `Date` DATE NOT NULL , UNIQUE (`id`)
   ) ENGINE = InnoDB;