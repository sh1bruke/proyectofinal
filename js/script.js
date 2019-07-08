"use strict";

function aceptoUsuario() {
  var usuario = document.querySelector("#usuario").value;

  alert("Bienvenido " + usuario);
  location.href = "index.html";
}
var boton = document.querySelector("#enviar");
boton.addEventListener("click", aceptoUsuario);

function aceptoUsuario() {
  location.href = "html/registrousuario.html";
}
var botonRegistrarse = document.querySelector("#registrarse");
botonRegistrarse.addEventListener("click", aceptoUsuario);
