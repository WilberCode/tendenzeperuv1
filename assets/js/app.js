// you can import modules from the theme lib or even from
// NPM packages if they support it…
// import ExampleComponent1 from "./components/ExampleComponent1";

// you can also require modules if they support it…
// const ExampleModule2 = require('./components/example-2');

// Some convenient tools to get you started…
// import ReplaceObfuscatedEmailAddresses from "./components/ReplaceObfuscatedEmailAddresses";
// import AnimateOnPageLinks from "./components/AnimateOnPageLinks";


// Initialise our components on jQuery.ready…
// jQuery(function ($) {
//     ExampleComponent1.init();
//     ExampleModule2.init();
//     ReplaceObfuscatedEmailAddresses.init();
//     AnimateOnPageLinks.init();
// });
  
  
// import './materialize/materialize.min.js'
// import './components/posts'
 

// Shorthand 
const Id = document.getElementById.bind(document)
const className = document.getElementsByClassName.bind(document)
const tagName = document.getElementsByTagName.bind(document)

// Toggle and Menu 
let navToggle = Id('nav-toggle')
let mobileNav = Id('mobile-nav-wrap')

navToggle.addEventListener('click', () => {
  navToggle.classList.toggle('nav-toggle-active')
  mobileNav.classList.toggle('nav-active')  
}) 

// Card title: separa el primer texto a span

jQuery(function ($) { 
    $('.card__title').each(function() { 
        var text = this.innerHTML;
        var firstSpaceIndex = text.indexOf(" "); 
        if (firstSpaceIndex > 0) {  
            var substrBefore = text.substring(0,firstSpaceIndex);
            var substrAfter = text.substring(firstSpaceIndex, text.length)
            console.log(substrBefore)
            var newText = '<span class="card-category">' + substrBefore + '</span>' + substrAfter;
            this.innerHTML = newText;
        } else {
            this.innerHTML = '<span class="card-category">' + text + '</span>';
        }
    }); 
});
 


// Suscribe

// jQuery(function ($) {
//   $( '.mailpoet_text' ).focus( function(){  
//       $('.mailpoet_text_label').addClass('mailpoet_text_label_focus')
//   }); 
//   $( '.mailpoet_text' ).focusout( function(event){  
//    if(!$( this ).val()){
//     $('.mailpoet_text_label').removeClass('mailpoet_text_label_focus')
//    } 
//   });
// });
 

// Id('menu').addEventListener('click', (e) => {
//   nav.classList.toggle('nav-active')
//   navToggle.classList.toggle('nav-toggle-active')
// }) 

// M.AutoInit(); 

// Start ScrollSpy
// document.addEventListener('DOMContentLoaded', function () {
//     var elems = document.querySelectorAll('.scrollspy');
//     var instances = M.ScrollSpy.init(elems, options); 

// }); 
//   End ScrollSpy
// var instance = M.Tabs.init(el, options);

// Start Tabs
 

// End Tabs



// Start Pushpin
 

//  window.onscroll = function () {
//      myFunction()
//  };

//  var tab = document.getElementById("tab");
//  var sticky = tab.offsetTop;

//  function myFunction() {
//      if (window.pageYOffset >= sticky) {
//          tab.classList.add("sticky")
//      } else {
//          tab.classList.remove("sticky");
//      }
//  }

//   End Pushpin
 
 
  // instance.destroy();

