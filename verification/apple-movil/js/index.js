var menuIcon = document.querySelector('.menu-icon-box');
var submenu = document.querySelector('.submenu');
var navigation = document.querySelector('nav');

menuIcon.onclick = function(e) {
  e.preventDefault();
  this.classList.toggle('open');
  submenu.classList.toggle('open');
  navigation.classList.toggle('dark');
  
}