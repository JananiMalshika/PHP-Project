function userprofile_search_bar() {
  var x = document.getElementById("mySearch").placeholder;
  document.getElementById("demo").innerHTML = x;
  }

var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("upSlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
       


/*request for add property page*/
function enableR4add_btn(){
  if (document.getElementById("R4add_btn").checked)
  {
    document.getElementById("R4add_sub") .disabled=false;
  }

  else
    document.getElementById("R4sdd_sub").disabled=true;
}

/*delete account*/
function enableRdeleacc_btn(){
  if (document.getElementById("subPw-btn").checked)
  {
    document.getElementById("delAcc-btn") .disabled=false;
  }

  else
    document.getElementById("delAcc-btn").disabled=true;
}
