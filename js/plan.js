let plan = document.querySelectorAll(".children")

for (let i = 0; i < plan.length; i++){
    plan[i].addEventListener("click", function(e){
        e.preventDefault();
        console.log("clicked");

        let childId = this.getAttribute("data-id");
    })
}