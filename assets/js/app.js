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
 
var $ = jQuery.noConflict();
// Shorthand 
const Id = document.getElementById.bind(document)
const className = document.getElementsByClassName.bind(document)
const tagName = document.getElementsByTagName.bind(document)



function menuMobile(){ 
    let navToggle = Id('nav-toggle')
    let mobileNav = Id('mobile-nav-wrap')   
    navToggle.addEventListener('click', () => {
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    }) 
    $('#mobile-menu li').on('click',()=>{
        console.log('hola li')
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    })
}
 
function separateFirstText(){
    $('.card__title').each(function() { 
        var text = this.innerHTML;
        var firstSpaceIndex = text.indexOf(" "); 
        if (firstSpaceIndex > 0) {  
            var substrBefore = text.substring(0,firstSpaceIndex);
            var substrAfter = text.substring(firstSpaceIndex, text.length) 
            var newText = '<span class="card-category">' + substrBefore + '</span>' + substrAfter;
            this.innerHTML = newText;
        } else {
            this.innerHTML = '<span class="card-category">' + text + '</span>';
        }
    }); 
}
 
function showVideos(){
    $('.show-videos').click(()=>{
        $('.vimeography-theme-harvestone').toggleClass('show-video') 
    })
}


jQuery(function ($) {  
    $(document).ready(function () {  
        menuMobile() // Menu Mobile: Show menu and hide 
        separateFirstText() // Card title: serate the first word in a span 
        showVideos()
    });  
});

 
 
$(document).ready( function () {
    setTimeout(()=>{ 
        let irf = document.getElementsByTagName('iframe')
        irf[0].id ="iframe1"

        // $('#iframe1').css({ 'border-top': '2px solid red'})
        // $('#iframe1').load( function () {
        //     $(this).contents().find(".vp-sidedock").css({'opacity':'0'});
        //     console.log('hola')
        // });
        $("iframe1").contents().find("html").css({'padding':'1em'});
     },10000)
    
});
 
