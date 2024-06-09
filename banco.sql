-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BDtabuleiro
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema BDtabuleiro
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BDtabuleiro` DEFAULT CHARACTER SET utf8 ;
USE `BDtabuleiro` ;

-- -----------------------------------------------------
-- Table `BDtabuleiro`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `rua` VARCHAR(250) NOT NULL,
  `bairro` VARCHAR(250) NOT NULL,
  `cidade` VARCHAR(250) NOT NULL,
  `cep` VARCHAR(250) NOT NULL,
  `estado` VARCHAR(250) NOT NULL,
  `telefone` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = armscii8;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`generos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`generos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `generos` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`jogos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`jogos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `preco` DECIMAL(8,2) NOT NULL,
  `generos_id` INT NOT NULL,
  `clientes_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_jogos_generos1_idx` (`generos_id` ASC) VISIBLE,
  INDEX `fk_jogos_clientes1_idx` (`clientes_id` ASC) VISIBLE,
  CONSTRAINT `fk_jogos_generos1`
    FOREIGN KEY (`generos_id`)
    REFERENCES `BDtabuleiro`.`generos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogos_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `BDtabuleiro`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`fabricantes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`fabricantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `pais` VARCHAR(250) NOT NULL,
  `ano_fundacao` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`eventos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(250) NOT NULL,
  `data` DATE NOT NULL,
  `local` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`fabricantes_has_jogos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`fabricantes_has_jogos` (
  `fabricantes_id` INT NOT NULL,
  `jogos_id` INT NOT NULL,
  PRIMARY KEY (`fabricantes_id`, `jogos_id`),
  INDEX `fk_fabricantes_has_jogos_jogos1_idx` (`jogos_id` ASC) VISIBLE,
  INDEX `fk_fabricantes_has_jogos_fabricantes1_idx` (`fabricantes_id` ASC) VISIBLE,
  CONSTRAINT `fk_fabricantes_has_jogos_fabricantes1`
    FOREIGN KEY (`fabricantes_id`)
    REFERENCES `BDtabuleiro`.`fabricantes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fabricantes_has_jogos_jogos1`
    FOREIGN KEY (`jogos_id`)
    REFERENCES `BDtabuleiro`.`jogos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BDtabuleiro`.`clientes_has_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BDtabuleiro`.`clientes_has_eventos` (
  `clientes_id` INT NOT NULL,
  `eventos_id` INT NOT NULL,
  PRIMARY KEY (`clientes_id`, `eventos_id`),
  INDEX `fk_clientes_has_eventos_eventos1_idx` (`eventos_id` ASC) VISIBLE,
  INDEX `fk_clientes_has_eventos_clientes1_idx` (`clientes_id` ASC) VISIBLE,
  CONSTRAINT `fk_clientes_has_eventos_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `BDtabuleiro`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clientes_has_eventos_eventos1`
    FOREIGN KEY (`eventos_id`)
    REFERENCES `BDtabuleiro`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
