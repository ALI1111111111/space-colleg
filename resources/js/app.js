import './bootstrap';
import '../css/app.css';
import '../css/w3.css';



// var Turbolinks = require("turbolinks")
// Turbolinks.start()

var edit_course = document.getElementById('id01');
var add_fee = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == edit_course) {
    edit_course.style.display = "none";
  }
  if (event.target == add_fee) {
    add_fee.style.display = "none";
  }
}
