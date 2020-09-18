-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema alterego-experiencia
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `alterego-experiencia` ;

-- -----------------------------------------------------
-- Schema alterego-experiencia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `alterego-experiencia` DEFAULT CHARACTER SET utf8 ;
USE `alterego-experiencia` ;

-- -----------------------------------------------------
-- Table `ae_sessions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ae_sessions` ;

CREATE TABLE IF NOT EXISTS `ae_sessions` (
  `idae_session` INT NOT NULL AUTO_INCREMENT,
  `date_created` TIMESTAMP NOT NULL,
  `session_stage` INT NOT NULL,
  `session_finished` TINYINT NOT NULL,
  PRIMARY KEY (`idae_session`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `idae_sesiones_UNIQUE` ON `ae_sessions` (`idae_session` ASC);


-- -----------------------------------------------------
-- Table `ae_users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ae_users` ;

CREATE TABLE IF NOT EXISTS `ae_users` (
  `idae_users` INT NOT NULL AUTO_INCREMENT,
  `correo` VARCHAR(60) NOT NULL,
  `contrasena` VARCHAR(255) NOT NULL,
  `nombre` VARCHAR(20) NOT NULL,
  `apellido` VARCHAR(20) NOT NULL,
  `avatar` VARCHAR(200) NULL,
  `id_sesion_actual` INT NULL,
  PRIMARY KEY (`idae_users`),
  CONSTRAINT `fk_ae_users_ae_sesiones`
    FOREIGN KEY (`id_sesion_actual`)
    REFERENCES `ae_sessions` (`idae_session`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE UNIQUE INDEX `correo_UNIQUE` ON `ae_users` (`correo` ASC);

CREATE UNIQUE INDEX `idae_users_UNIQUE` ON `ae_users` (`idae_users` ASC);

CREATE INDEX `fk_ae_users_ae_sesiones_idx` ON `ae_users` (`id_sesion_actual` ASC);


-- -----------------------------------------------------
-- Table `ae_historico_user_sesiones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ae_historico_user_sesiones` ;

CREATE TABLE IF NOT EXISTS `ae_historico_user_sesiones` (
  `ae_users_idae_users` INT NOT NULL,
  `ae_sesiones_idae_session` INT NOT NULL,
  PRIMARY KEY (`ae_users_idae_users`, `ae_sesiones_idae_session`),
  CONSTRAINT `fk_ae_users_has_ae_sesiones_ae_users1`
    FOREIGN KEY (`ae_users_idae_users`)
    REFERENCES `ae_users` (`idae_users`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ae_users_has_ae_sesiones_ae_sesiones1`
    FOREIGN KEY (`ae_sesiones_idae_session`)
    REFERENCES `ae_sessions` (`idae_session`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_ae_users_has_ae_sesiones_ae_sesiones1_idx` ON `ae_historico_user_sesiones` (`ae_sesiones_idae_session` ASC);

CREATE INDEX `fk_ae_users_has_ae_sesiones_ae_users1_idx` ON `ae_historico_user_sesiones` (`ae_users_idae_users` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `ae_users`
-- -----------------------------------------------------
START TRANSACTION;
USE `alterego-experiencia`;
INSERT INTO `ae_users` (`idae_users`, `correo`, `contrasena`, `nombre`, `apellido`, `avatar`, `id_sesion_actual`) VALUES (01, 'agencia.alterego2019@gmail.com', 'hola', 'Agencia', 'Álterego', NULL, NULL);

COMMIT;

