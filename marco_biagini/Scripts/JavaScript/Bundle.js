$(document).on("click", "#btn_user", function(){
    toggleItem('#options');
});

function toggleItem(item){
    $(item).toggleClass("hide");
}

function toggleTheme(){
    $("body").toggleClass("dark-mode");
}

function setActive(idnav, numchild){
    var kids = $(idnav).children();
    var i;
    for(i = 0; i<kids.length; i++){
        if(i == numchild){
            $(kids[i]).addClass("active");
        }else{
            $(kids[i]).removeClass("active");
        }
    }
}