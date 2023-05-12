document.querySelector(".sleep").addEventListener("click",function(e){
    e.preventDefault();

    document.querySelector(".sleep").classList.add("hidden");
    document.querySelector(".sleepy").classList.remove('hidden');
})

document.querySelector(".sleepy").addEventListener("click",function(e){
    e.preventDefault();

    document.querySelector(".sleepy").classList.add("hidden");
    document.querySelector(".sleep").classList.remove('hidden');
})