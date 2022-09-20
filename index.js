const navTorao = document.querySelector(".navy-torao")
const navMenu = document.querySelector(".navy-menu")


navTorao.addEventListener("click", () => {

    navMenu.classList.toggle("navy-menu_vis")
})


const body = document.querySelector("body");

navToggle.addEventListener("click", (e) => {
  e.stopPropagation();
  navMenu.classList.toggle("navy-menu_vis");

  if (navMenu.classList.contains("navy-menu_vis")) {
    navToggle.setAttribute("aria-label", "Cerrar menú");
  } else {
    navToggle.setAttribute("aria-label", "Abrir menú");
  }
});

body.addEventListener("click", () => {
  navMenu.classList.remove("navy-menu_vis");
});