var modal = document.querySelector(".modal");
var overlay = document.querySelector(".overlay");
var wrapper = document.querySelector(".wrapper");
var button = document.querySelector(".button");

function buttonFunction(event){
  event.preventDefault();
  modal.classList.add("is-active");
  button.classList.add("button-modal-showing");
  overlay.classList.add("overlay-modal-showing");
}

function overlayFunction(event){
  event.preventDefault();
  event.stopImmediatePropagation();
  modal.classList.remove("is-active");
  overlay.classList.remove("overlay-modal-showing");
  button.classList.remove("button-modal-showing");
};

