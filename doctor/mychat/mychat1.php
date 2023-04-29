<?php session_start();
	include_once("../mychat/includes.php");
	include_once("../mychat/chat_ajax.php");

    $frm = $_POST["frm"];
    $to = $_POST["to"];
    if (isset($_POST["frm"])) {
        $_SESSION['frm'] = $frm;
        $_SESSION['to'] = $to;
    }
?>

<form method="post" class="frm">
    <table style="width: 100%">
        <tr>
            <td>From</td>
            <td><input id="txt_from" name="txt_from" value="<?php echo $frm; ?>" readonly="readonly"/></td>
        </tr>
        <tr>
            <td>To</td>
            <td><input id="txt_to" name="txt_to" value="<?php echo $to; ?>" readonly="readonly"/></td>
        </tr>
        <tr>
            <td colspan="2"><div id="txt_show_msg" style="width: 100%;height: 200px;"></div></td>
        </tr>
        <tr>
            <td colspan="2">
                <input name="txt_msg" style="width: 80%" id="txt_msg"/>
                <input type="button" value="Send" id="send"/>
            </td>
        </tr>
    </table>
</form>

