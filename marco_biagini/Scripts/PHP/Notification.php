<div id="toast_area">

</div>

<script type="text/javascript">
function popup(message, title, type, autoclose) {
    var toastArea = $('#toast_area');
    var id = "popup" + toastArea.children().length;
    if (toastArea) {

        var tipo = "toast";
        if (type) {
            tipo += "-" + type;
        }

        var toast = "<div class=\"" + tipo + " hide\" id=\"" + id + "\">" +
            "<a class=\"btn-close\" onclick=\"closepopup($(this).parent());\">&times;</a>";

        if (title) {
            toast += "<p class=\"title\">" + title + "</p>";
        }

        toast += "<p>" + message + "</p></div>";
        // alert(toast);
        toastArea.append(toast);
        setTimeout(function() {
            $('#' + id).removeClass('hide');
        }, 100);

        if (autoclose) {
            setTimeout(function() {
                closepopup($('#' + id));
            }, 5000);
        }
    }
}


function closepopup(element) {
    if ($(element)) {
        $(element).addClass('hide');
        setTimeout(function() {
            $(element).css('display', 'none');
        }, 500);
    }
}
</script>