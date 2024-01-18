window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 63 || document.documentElement.scrollTop > 63) {
        document.getElementById("button-top").style.display = "block";
    } else {
        document.getElementById("button-top").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}