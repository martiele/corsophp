$(document).on("click", "#btn_user", function () {
    toggleItem('#options');
});

function toggleItem(item) {
    $(item).toggleClass("hide");
}

function toggleTheme() {
    $("body").toggleClass("dark-mode");
}

function setActive(idnav, numchild) {
    var kids = $(idnav).children();
    var i;
    for (i = 0; i < kids.length; i++) {
        if (i == numchild) {
            $(kids[i]).addClass("active");
        } else {
            $(kids[i]).removeClass("active");
        }
    }
}

function popup(message, title, type) {
    var toastArea = $('#toast_area');
    var id = toastArea.children().length;
    if (toastArea) {

        var tipo = "toast";
        if (type) {
            tipo += "-" + type;
        }

        var toast = "<div class=\"" + toast + "\" id=\"popup" + id + "\">" +
            "<a class=\"btn-close\" onclick=\"closepopup($(this).parent());\">&times;</a>";

        if (title) {
            toast += "<p class=\"title\">" + title + "</p>";
        }

        toast += "<p>" + message + "</p></div>";

        toastArea.append(toast);
    }
}


function closepopup(element) {
    $(element).addClass('hide');
}