const menuBar = document.getElementById('menuBar');
const menu = document.querySelector('.header .menu');
const login = document.querySelector('.header .login');

menuBar.onclick = () => {
    menuBar.classList.toggle('bx-x');
    menu.classList.toggle('active')
    login.classList.toggle('active')
}
const dropContent = document.querySelector(".dropdown-content");
dropContent.addEventListener("click", function (event) {
  event.stopPropagation();
});
function showDropdown() {
    document.getElementById("dropMenu").classList.toggle("show");
}

function showDropDownType() {
  document.getElementById("dropDownType").classList.toggle("show");
}
function showDropDownTime() {
  document.getElementById("dropDownTime").classList.toggle("show");
}
