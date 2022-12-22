/* Show login form on button click */
 
$('.loginBtn').click(function(){
  $('.login').show();
  $('.signUp').hide();
  /* border bottom on button click */
  $('.loginBtn').css({'border-bottom' : '2px solid #ff4141'});
  /* remove border after click */
  $('.signUpBtn').css({'border-style' : 'none'});
});
 
 
/* Show sign Up form on button click */
 
$('.signUpBtn').click(function(){
  $('.login').hide();
  $('.signUp').show();
  /* border bottom on button click */
  $('.signUpBtn').css({'border-bottom' : '2px solid #ff4141'});
   /* remove border after click */
   $('.loginBtn').css({'border-style' : 'none'});
});


document.addEventListener("DOMContentLoaded", function(){
  // make it as accordion for smaller screens
  if (window.innerWidth < 992) {
  
    // close all inner dropdowns when parent is closed
    document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
      everydropdown.addEventListener('hidden.bs.dropdown', function () {
        // after dropdown is hidden, then find all submenus
          this.querySelectorAll('.submenu').forEach(function(everysubmenu){
            // hide every submenu as well
            everysubmenu.style.display = 'none';
          });
      })
    });
  
    document.querySelectorAll('.dropdown-menu a').forEach(function(element){
      element.addEventListener('click', function (e) {
          let nextEl = this.nextElementSibling;
          if(nextEl && nextEl.classList.contains('submenu')) {	
            // prevent opening link if link needs to open dropdown
            e.preventDefault();
            if(nextEl.style.display == 'block'){
              nextEl.style.display = 'none';
            } else {
              nextEl.style.display = 'block';
            }
  
          }
      });
    })
  }
  // end if innerWidth
  }); 

  var dropdown = document.getElementsByClassName("dropdown-btn");
  var i;
  
  for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
      if (dropdownContent.style.display === "block") {
        dropdownContent.style.display = "none";
      } else {
        dropdownContent.style.display = "block";
      }
    });
  }