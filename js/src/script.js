(function(){
var preload = document.getElementById("preload");
var loading =0;
var id = setInterval(frame, 64);

function frame(){
    if(loading == 100){
        clearInterval(id);
        window.open("../../home.php","_self");
    }else{
        loading = loading + 1;
        if(loading == 60) {
            preload.style.animation = "fadeout in ease";
        }
    }
}
})();