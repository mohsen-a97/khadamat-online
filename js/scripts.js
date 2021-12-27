"use strict";

function createAutoClosingAlert(selector, delay) {
  var alert = $(selector).alert();
  window.setTimeout(function () {
    alert.alert("close");
  }, delay);
}
createAutoClosingAlert(".alert-message", 3000);
