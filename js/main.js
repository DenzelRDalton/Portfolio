let projectCards = document.querySelectorAll(".card");
let projectDescription = document.querySelector("#description");

projectCards.forEach((card)=>{
    card.addEventListener("click", ()=>{
        if(card.id === "fps") {
            console.log(card.id);
            projectDescription.innerHTML = "An example of first person shooter game mechanics made in the Godot game engine." 
            + "The project is written in gdScript a programming language designed for the Godot engine that has pythonic synatax, while having C like characteristics"
            + "The project inludes the ability to move, shoot, crouch, pickup physics objects, and switch weapons."
            + "In addition there is an enemy AI that will chase the player and shoot them with the same weapons the player uses."
            + "If you would like to try this game you can find it on my github: ";
        } else if(card.id === "platformer") {
            projectDescription.innerHTML = "An example of a platformer game mechanics made in the Godot game engine."
            + "The project is written in gdScript a programming language designed for the Godot engine that has pythonic synatax, while having C like characteristics"
            + "The project inludes the ability to move, jump, dash, and kill enemies by jumping on their heads.";
        } else if(card.id === "cg") {
            projectDescription.innerHTML = "A simple example of 3d graphics rendering written in c++ utilizing the OpenGL API.";
        } else if(card.id === "curves") {
            projectDescription.innerHTML = "An example of Chackins algorithm written in c++ utilizing the CImg library."
            + "This program allows the user to select points and then draws the lines between the points."
            + "It then cuts the corners of the lines following the algorithm."
            + "If you would like to try this program you can find it on my github: ";
        }
    });
});

function ChangeNavbarActive (pageName) {
    let active = document.getElementsByClassName("active")[0];
    active.classList.remove("active");

    let newActive = document.getElementById(pageName);
    newActive.classList.add("active");
}