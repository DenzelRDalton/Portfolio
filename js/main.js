const navbar = document.querySelector(".nav");
console.log(navbar.innerHTML);
fetch("../navbar.html")
.then(res => res.text())
.then(data => {navbar.innerHTML = data});