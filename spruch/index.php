<?php

/*
 CREATE TABLE `sexismus`.`quotes` (
 `id` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `quote` TEXT NOT NULL ,
 `location` VARCHAR( 255 ) NOT NULL ,
 `explanation` TEXT NOT NULL ,
 `disabled` TINYINT( 1 ) NOT NULL DEFAULT '0',
 `created_from` VARCHAR( 64 ) NOT NULL ,
 `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
 ) ENGINE = InnoDB;
ALTER TABLE `quotes` DROP `created_from`;

 */
// sexismus
// yQHFzeVjt9GeW8Dx
require(__DIR__ . '/../config.php');
$matches = array();
if (isset($_GET['spruch']) && is_numeric($_GET['spruch'])) {
	$sth = $db->prepare('SELECT * FROM quotes WHERE disabled = 0 AND id = :id');
	$sth->execute(array(
										 ':id' => $_GET['spruch']
								));
	$res = $sth->fetch();
}
if (!isset($res) || !$res) {
	$sth = $db->prepare('SELECT * FROM quotes WHERE disabled = 0 ORDER BY RAND()');
	$sth->execute();
	$res = $sth->fetch();
}

if ($res) {
	extract($res);
	require 'template.phtml';
}
