document.querySelector(".boost").addEventListener("click", giveBoost);

function giveBoost(){
    document.querySelector("#boost").classList.remove("hidden");
    document.querySelector(".battery").setAttribute("src","img/highbat.svg");
}
//nog met ajax en php ervoor zorgen dat aantal punten ook verminderd

let clicks = 1;
document.querySelector("header img").addEventListener("click", openDash);
function openDash(){
    clicks++;
    if(clicks%2){
        document.querySelector("#switch").classList.add("hidden");
    } else{
        document.querySelector("#switch").classList.remove("hidden");
    }
}