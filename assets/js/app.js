 
// import './materialize/materialize.min.js'

 
var $ = jQuery.noConflict();
import './components/posts'
// Shorthand 
const Id = document.getElementById.bind(document)
const className = document.getElementsByClassName.bind(document)
const tagName = document.getElementsByTagName.bind(document)



function menuMobile(){  
    let mobileNav = Id('mobile-nav-wrap')   
    let navToggle = Id('nav-toggle')   
   $('#nav-toggle').on('click', () => {
        navToggle.classList.toggle('nav-toggle-active')
        mobileNav.classList.toggle('nav-active')  
    }) 
    $('#mobile-menu li').on('click',()=>{ 
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
function activeModalMarca(){
    $('.marca-card').on('click', function(e){
        e.preventDefault() 
        $('#marca-modal').toggleClass('marca-modal-active')
            
            e.preventDefault();
            let postIdMarca = $(this).data('postidmarca');  
            let html_marca_modal_info = '';  
            const headers = new Headers({
                'Content-Type': 'application/json',
                'X-WP-Nonce': ajax_marcas.nonce
            }); 
            fetch(`${ajax_marcas.url}/?post_id=${postIdMarca}`, {
                method: 'get',
                headers: headers,
                credentials: 'same-origin'
            })
            .then(response => {  
                return response.ok ? response.json() : 'No información de la marca...'; 
            }).then(json_response => {  
                if(json_response){
                    json_response.map((post)=>{   
                        html_marca_modal_info += `   
                        <div  class="grid grid-cols-1 sm:grid-cols-2 gap-8 sm:gap-10">
                            <div  class="pr-0 sm:pr-6" > 
                                <img  class=" w-24 mb-10 md:w-40 sm:w-58 "  src="${post.thumbnail}" alt="${post.title}">
                                 ${post.content} 
                            </div>
                            <div>   
                                ${post.images == null?'':post.images.map((image)=>`<img class="mb-4" src="${image.marca_imagenes_individual}" />`).join('')}
                              </div>  
                        </div>
                         `;   
                    }) 
                }
                $('#marca-modal-info').html(html_marca_modal_info); 
            }) 
     })  
}

jQuery(function ($) {  
    $(document).ready(function () {  
        menuMobile()        // Menu Mobile: Show menu and hide 
        separateFirstText() // Card title: serate the first word in a span 
        showVideos()        // Button show the videos
        activeCategory()    // Active color of categories
        activeModalMarca()  // Active Modal of marca
       
        $('.marca-modal-close').on('click', function(e){ 
            $('#marca-modal').removeClass('marca-modal-active')
        })
        // $('#marca-modal').on('click', function(e){  
        //     const parentID = e.target.parentNode.id 
        //     console.log(parentID )
        //     console.log($(this) )
        //      if (parentID !== 'marca-modal-body' && e.target.id !== 'marca-modal-body' ) {
        //         $('#marca-modal').removeClass('marca-modal-active')
        //     } else {
        //         return;
        //     }
           
        // })
    });  
});
 
