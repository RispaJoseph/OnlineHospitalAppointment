<?php session_start();
	include_once("db/mydatabase.inc");
    $msg = $_GET["msg"];
    $from = $_GET["frm"];
    $to = $_GET["to"];
    if (isset($_GET["msg"])) {
        $sql = "insert into messages(chat_from,chat_to,chat_msg) values('$from ','$to','$msg')";
        setDatas($sql);
    }
?>