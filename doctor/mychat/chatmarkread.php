<?php session_start();
	include_once("db/mydatabase.inc");
    $from = $_SESSION["frm"];
    $to = $_SESSION["to"];
    $sql = "update messages set received=1 where chat_from='$to' and chat_to='$from'";
    setDatas($sql);
?>