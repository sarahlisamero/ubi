document.querySelector(".boost").addEventListener("click", giveBoost);

function giveBoost(){
    document.querySelector("#boost").classList.remove("hidden");
}
//nog met ajax en php ervoor zorgen dat aantal punten ook verminderd