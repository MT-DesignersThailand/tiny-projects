"use strict";

const realBtn = document.getElementById("real-btn");
const chosenFile = document.getElementById("chosen-file");
const imagePre = document.getElementById("img-pre");

realBtn.addEventListener("change", () => {
  chosenFile.textContent = realBtn.files[0].name;
  imagePre.src = URL.createObjectURL(realBtn.files[0]);
});
