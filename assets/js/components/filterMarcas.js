let filterMarcas = ($)=>{
    $('.marca-category-filter > a').on('click', function(e){ 
        e.preventDefault();
        let category = $(this).data('categorymarca');   
        let html_marca = '';  
        const headers = new Headers({
            'Content-Type': 'application/json',
            'X-WP-Nonce': ajax_marcas.nonce
        });
        let category_url =  $(this)[0].id === 'marca-todos'? '':`?category=${category}` 
        fetch(`${ajax_marcas.url}/${category_url}`, {
            method: 'get',
            headers: headers,
            credentials: 'same-origin'
        })
        .then(response => {  
            return response.ok ? response.json() : 'No hay marcas...'; 
        }).then(json_response => {  
            json_response.map((post)=>{  
                html_marca += `   
                                   <div class="marca-card" data-postidmarca="${post.id}" >
                                        <div  class="marca-card-image flex justify-center items-center h-56 sm:h-65 p-4 " >
                                            <img  class="w-full" style="max-width: 140px;"  src=" ${post.thumbnail}" alt="${post.link}" >  
                                        </div>
                                        <h2  class="text-lg font-medium text-secondary-300 mt-2 " >Ver Regalos</h2>
                                    </div>  
                                  `;   
            })
            $('#marca-grid').html(html_marca); 
            // Modal
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
                                        <img  class=" w-32 mb-10 md:w-40 sm:w-59 "  src="${post.thumbnail}" alt="${post.title}">
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
        })  
    })  
}

export default filterMarcas