<?php
/*  
  Copyright (c) 2010-02 Game
  Game All Rights Reserved. 
  QQ:503064228
  Author: Version:1.0
  Date:2011-12-18
*/
define('Copyright', '作者QQ:503064228');
define('ROOT_PATH', $_SERVER["DOCUMENT_ROOT"].'/');
include_once ROOT_PATH.'function/global.php';
$dateTime = date('Y-m-d H:i:s');
global $stratGamepk, $endGamepk;
if ( $dateTime < $stratGamepk || $dateTime > $endGamepk)
{markPos("前台-PK10封盘页");
	header("Location: ./right.php"); exit;
}
?>