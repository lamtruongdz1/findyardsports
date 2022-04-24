const menuBar = document.getElementById("menuBar");
const menu = document.querySelector(".header .menu");
const login = document.querySelector(".header .login");

menuBar.onclick = () => {
  menuBar.classList.toggle("bx-x");
  menu.classList.toggle("active");
  login.classList.toggle("active");
};
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
$(document).ready(function () {
  $("#collapse-1").on("shown.bs.collapse", function () {
    $(".servicedrop").addClass("fa-chevron-up").removeClass("fa-chevron-down");
  });

  $("#collapse-1").on("hidden.bs.collapse", function () {
    $(".servicedrop").addClass("fa-chevron-down").removeClass("fa-chevron-up");
  });
});

// const registerBtn = document.querySelectorAll('.js-register-modal')
// const modal = document.querySelector('.js-modal')
// const modalClose = document.querySelector('.js-modal-close')
// const modalContainer = document.querySelector('.js-modal-container')

function showModal(){
  var show = document.querySelector('.js-modal')
  show.style.display = 'block'
}

function hideModal(){
  var hide = document.querySelector('.js-modal')
  hide.style.display = 'none'
}
