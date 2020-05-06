  

  
const $ = window.jQuery;

import  {separateFirstText,showVideos} from './utils/hack'  


// Shorthand ID
const Id = document.getElementById.bind(document)   

function menuMobile(){  
    let mobileNav = Id('mobile-nav-wrap')   
    let navToggle = Id('nav-toggle')   
    $('#nav-toggle').on('click', () => {
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    }) 
    $('#mobile-menu li').on('click', ()=>{ 
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    })
}
 

 
  
$(document).ready(function () {  
    menuMobile()        // Menu Mobile: Show menu and hide 
    separateFirstText($) // Card title: serate the first word in a span
    showVideos($)        // Button show the videos
}); 
 
 