<!-- /*Copy Right Reserved @ Sherin*/ -->
<script src="../mychat/js/jquery-1.7.2.js"></script>
<script>
    var msg = "";
    createMsg = function () {
        msg = $('#txt_show_msg').html() + '<br/>' + $('#txt_from').val() + ": " + $('#txt_msg').val();
        $('#txt_show_msg').html('<span style="color:green">' + msg + '</span>');
        $('#txt_show_msg').animate({
            scrollTop: $('#txt_show_msg').get(0).scrollHeight}, 2000);
        $('#txt_msg').val('');
    };
    saveMsg = function () {
        frm = $('#txt_from').val();
        to = $('#txt_to').val();
        msg = $('#txt_msg').val().trim();
        $.ajax({
            url: 'savechat.php',
            data: 'frm=' + frm + "&to=" + to + "&msg=" + msg
        });
    }
    $(document).ready(function () {
        $('#send').click(function () {
            msg = $('#txt_msg').val().trim();
            if (msg.length > 0) {
                saveMsg();
                createMsg();
            }
        });
        $('#txt_msg').keyup(function (e) {
            if (e.which === 13) {
                msg = $('#txt_msg').val().trim();
                if (msg.length > 0) {
                    saveMsg();
                    createMsg();
                }
            }
        });
    });
</script>