-- MySQL Script generated by MySQL Workbench
-- Thu May 14 14:00:01 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema employees
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema employees
-- -----------------------------------------------------

USE `employees` ;

-- -----------------------------------------------------
-- Table `employees`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `employees`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `username` (`username` ASC) VISIBLE);


