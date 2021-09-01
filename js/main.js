import{formListener, mobileMenuListener} from "./listeners.js";


const forms = document.forms;
const responseText = document.querySelector('#responseText');

formListener(forms, responseText);

const openMenu = document.querySelector('#openMenu');
const closeMenu = document.querySelector('#closeMenu');
const defaultmMenu = document.querySelectorAll('.mobile-nav')[0];
const heddenmMenu = document.querySelectorAll('.nav-hamburger-navigation')[0];

mobileMenuListener(openMenu, closeMenu, defaultmMenu, heddenmMenu);

const heroElements = document.querySelectorAll('.hero');

//divSlider(heroElements);