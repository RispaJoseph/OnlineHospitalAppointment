/*Copy Right Reserved @ Sherin*/
var auto_refresh = setInterval(function ()
{
    m = $('#txt_show_msg').html();//.trim();
    $.ajax({
        url: 'getchat.php',
        success: function (msg) {
            msg = msg.trim();
            if (msg.length > 0) {
                $('#txt_show_msg').html(m + '<br/><span style="color:orange">' + msg + '</span>');
                $('#txt_show_msg').animate({
                    scrollTop: $('#txt_show_msg').get(0).scrollHeight}, 2000);
                $.ajax({
                    url: 'chatmarkread.php',
                });
            }
        }, error: function (msg) {
            $('#txt_show_msg').val(msg);
        }
    });
}, 1000); // refresh every seconds