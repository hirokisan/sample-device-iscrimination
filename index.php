<?php
require_once "UAClass.php";
$ua = new UserAgent();
if($ua->set() === "mobile") {
//この中のコードはスマホにのみ適用
	header('location: sp/index.php');
	exit;
}elseif($ua->set() === "tablet"){
//この中のコードはタブレットにのみ適用
	header('location: sp/index.php');
	exit;
}else{
//この中のコードはスマホとタブレット以外に適用
	header('location: pc/index.php');
	exit;
}
