 
// import './materialize/materialize.min.js'
import './components/posts'
 
var $ = jQuery.noConflict();
// Shorthand 
const Id = document.getElementById.bind(document)
const className = document.getElementsByClassName.bind(document)
const tagName = document.getElementsByTagName.bind(document)



function menuMobile(){  
    let mobileNav = Id('mobile-nav-wrap')   
   $('#nav-toggle').on('click', () => {
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
 
function activeCategory(){
    $('.marca-category-filter').on('click',function(e){
        $('.marca-category-filter').each(function(u) {  
            $(this).removeClass('marca-category-active')  
        });  
        $(this).toggleClass('marca-category-active') 
    })
}

jQuery(function ($) {  
    $(document).ready(function () {  
        menuMobile()        // Menu Mobile: Show menu and hide 
        separateFirstText() // Card title: serate the first word in a span 
        showVideos()        // Button show the videos
        activeCategory()    // Active color of categories

        $('.marca-card').on('click', function(e){
            e.preventDefault()
            console.log($(this))
            $('#marca-modal').toggleClass('marca-modal-active')
        })
        $('.marca-modal-close').on('click', function(e){ 
            $('#marca-modal').removeClass('marca-modal-active')
        })

    });  
});
 
