-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema homarket
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema homarket
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `homarket` DEFAULT CHARACTER SET utf8 ;
USE `homarket` ;

-- -----------------------------------------------------
-- Table `homarket`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `homarket`.`cliente` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `endereco` VARCHAR(155) NOT NULL,
  `telefone` INT(11) NOT NULL,
  `cep` INT(8) NOT NULL,
  `cpf` INT(11) NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `senha` VARCHAR(55) NOT NULL,
  `foto` LONGBLOB NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `homarket`.`produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `homarket`.`produto` (
  `id_produto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(55) NOT NULL,
  `marca` VARCHAR(55) NOT NULL,
  `quantidade` INT(11) NOT NULL,
  `preco` DECIMAL NOT NULL,
  PRIMARY KEY (`id_produto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `homarket`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `homarket`.`funcionario` (
  `id_cliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `nascimento` DATE NOT NULL,
  `endereco` VARCHAR(155) NOT NULL,
  `telefone` INT(11) NOT NULL,
  `cep` INT(8) NOT NULL,
  `rg` INT(8) NOT NULL,
  `cpf` INT(11) NOT NULL,
  `email` VARCHAR(55) NOT NULL,
  `senha` VARCHAR(55) NOT NULL,
  `foto` LONGBLOB NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `homarket`.`carrinho`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `homarket`.`carrinho` (
  `id_carrinho` INT NOT NULL AUTO_INCREMENT,
  `id_cliente` INT NOT NULL,
  `id_produto` INT NOT NULL,
  PRIMARY KEY (`id_carrinho`),
  INDEX `fk_carrinho_cliente_idx` (`id_cliente` ASC),
  INDEX `fk_carrinho_produto1_idx` (`id_produto` ASC),
  CONSTRAINT `fk_carrinho_cliente`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `homarket`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrinho_produto1`
    FOREIGN KEY (`id_produto`)
    REFERENCES `homarket`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `homarket`.`promocao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `homarket`.`promocao` (
  `id_promocao` INT NOT NULL AUTO_INCREMENT,
  `id_produto` INT NOT NULL,
  `desconto` INT NOT NULL,
  INDEX `fk_promocao_produto1_idx` (`id_produto` ASC),
  PRIMARY KEY (`id_promocao`),
  CONSTRAINT `fk_promocao_produto1`
    FOREIGN KEY (`id_produto`)
    REFERENCES `homarket`.`produto` (`id_produto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;