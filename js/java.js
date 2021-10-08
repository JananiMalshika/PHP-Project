/*Home page slideshow*/
var counter = 1;
setInterval(function(){
  document.getElementById('radio' + counter).checked = true;
  counter++;
  if(counter > 4){
	counter = 1;
  }
}, 2500);


/*Feedback page alert message */

function feedback() {
  alert("Your feedback is submitted.");
}



