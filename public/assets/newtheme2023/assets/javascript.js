//create profile
function openProfile(evt, profileName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" profileActive", "");
  }
  document.getElementById(profileName).style.display = "block";
  evt.currentTarget.className += " profileActive";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

//slider for create profile
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}
function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlidess");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

//
$(window).scroll(function () {
  var cScroll=$(window).scrollTop()+20;
  var cFooter=$('footer').height();
var bHeight=$('body').height();
console.log(cScroll);
console.log((bHeight - cFooter));
if(cScroll >= (bHeight - cFooter)){
  console.log('imn');
}
else{
  console.log('imout');
}

});