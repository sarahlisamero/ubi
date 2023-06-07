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