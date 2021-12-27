"use strict";

const log = document.querySelector("#log").dataset.log;
const btn_login = document.querySelector("#btn_login");
const btn_profile = document.querySelector("#btn_profile");
const btn_services = document.querySelectorAll(".btn_services");
const services_warning = document.querySelector("#services_warning");

if (!log.includes("<b>")) {
  btn_login.style.display = "none";
  btn_profile.style.display = "inline-block";
  services_warning.style.display = "none";
  for (const btn of btn_services) {
    btn.style.display = "block";
  }
} else {
  btn_login.style.display = "inline-block";
  btn_profile.style.display = "none";
  services_warning.style.display = "block";
  for (const btn of btn_services) {
    btn.style.display = "none";
  }
}

function createAutoClosingAlert(selector, delay) {
  var alert = $(selector).alert();
  window.setTimeout(function () {
    alert.alert("close");
  }, delay);
}
createAutoClosingAlert(".alert-message", 3000);
