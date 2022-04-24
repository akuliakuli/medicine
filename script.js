const hamburger = document.querySelector(".hamburger"),
      navMenu = document.querySelector(".nav-menu"),
      parent = document.querySelector(".subcontainer");


hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
    parent.classList.toggle("show");
})