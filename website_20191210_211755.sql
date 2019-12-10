-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE TABLE "users" ----------------------------------------
CREATE TABLE `users` ( 
	`age` Int( 3 ) NOT NULL,
	`username` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`email` VarChar( 50 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`password` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`phone` VarChar( 255 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
	`id` Int( 11 ) AUTO_INCREMENT NOT NULL,
	PRIMARY KEY ( `id` ),
	CONSTRAINT `unique_id_user` UNIQUE( `id` ) )
CHARACTER SET = utf8
COLLATE = utf8_general_ci
ENGINE = InnoDB
AUTO_INCREMENT = 26;
-- -------------------------------------------------------------


-- Dump data of "users" ------------------------------------
INSERT INTO `users`(`id`,`username`,`email`,`password`,`phone`,`age`) VALUES 
( '1', 'vasa', 'vasa@huy.com', '1111', '380965259645', '12' ),
( '2', 'pira', 'vasa3@huy.com', '11011', '380963259645', '25' ),
( '3', 'vago', 'vasa1@huy.com', '11110', '380968259645', '14' ),
( '4', 'shurik', 'vasa1@huyot.com', '11011', '380975259645', '38' ),
( '5', 'goga', 'buiop@hui.net', '2222', '0974891214', '47' ),
( '6', 'anya', 'anyaa@gdik.com', '4444', '380634597896', '25' ),
( '7', 'alina', 'alina@gdik.com', '4455', '380934597496', '27' ),
( '9', 'prosa', 'prosa@gdik.com', '5555', '380931237496', '21' ),
( '11', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '12', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '13', '', '', '', '', '18' ),
( '14', '', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '15', 'peter', '', '', '', '18' ),
( '16', '', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '17', 'peter', '', '', '', '18' ),
( '18', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '19', '', '', '', '', '18' ),
( '20', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '21', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '22', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '23', '', '', '', '', '18' ),
( '24', 'vana', 'vana@gnauk.com', '4567', '380391234564', '14' ),
( '25', '', '', '', '', '18' );
-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


