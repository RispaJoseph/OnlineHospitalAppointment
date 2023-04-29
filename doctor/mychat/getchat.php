<?php session_start();
	include_once("db/mydatabase.inc");
	$chats = array();
	if (isset($_SESSION["frm"])) {
		$from = $_SESSION["frm"];
		$to = $_SESSION["to"];
		$sql = "select * from messages where chat_from='$to' and chat_to='$from' and received=0";
		$chats = getDatas($sql);
		if (count($chats)>0) {
			for ($i=0;$i<count($chats);$i++) {
				echo $chats[$i][1]." :".$chats[$i][3];
			}
		}
	}
?>