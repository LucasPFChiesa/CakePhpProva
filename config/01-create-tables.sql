-- MySQL Script generated by MySQL Workbench
-- Wed 27 Jul 2022 03:15:10 PM -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema CakePhpProva
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema CakePhpProva
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `CakePhpProva` ;
USE `CakePhpProva` ;

-- -----------------------------------------------------
-- Table `CakePhpProva`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakePhpProva`.`clientes` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `data_nasc` DATETIME NOT NULL,
  `cpf_cnpj` VARCHAR(15) NOT NULL,
  `endereço` VARCHAR(45) NOT NULL,
  `fone` VARCHAR(45) NULL,
  `e-mail` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  UNIQUE INDEX `e-mail_UNIQUE` (`e-mail` ASC) VISIBLE,
  UNIQUE INDEX `fone_UNIQUE` (`fone` ASC) VISIBLE,
  UNIQUE INDEX `cpf_cnpj_UNIQUE` (`cpf_cnpj` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CakePhpProva`.`produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakePhpProva`.`produtos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` TEXT NULL,
  `categoria` VARCHAR(45) NULL,
  `preco` DECIMAL(10,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CakePhpProva`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CakePhpProva`.`vendas` (
  `id` INT(10) NOT NULL,
  `cliente_id` INT(10) NOT NULL,
  `produto_id` INT(10) NOT NULL,
  `data` DATETIME NOT NULL DEFAULT 0/0/0,
  `endereço_entrega` VARCHAR(45) NOT NULL,
  `status` TINYINT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `id_idx` (`cliente_id` ASC) VISIBLE,
  INDEX `produto_id_idx` (`produto_id` ASC) VISIBLE,
  CONSTRAINT `cliente_id`
    FOREIGN KEY (`cliente_id`)
    REFERENCES `CakePhpProva`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `produto_id`
    FOREIGN KEY (`produto_id`)
    REFERENCES `CakePhpProva`.`produtos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
