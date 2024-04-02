function ChangeNavbarActive (pageName) {
    let active = document.getElementsByClassName("active")[0];
    active.classList.remove("active");

    let newActive = document.getElementById(pageName);
    newActive.classList.add("active");

    console.log(pageName);
}