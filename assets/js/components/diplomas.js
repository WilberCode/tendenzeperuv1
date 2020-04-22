let diplomas = ($)=>{
    $("#get-diplomas").click(function ($e) {
        $e.preventDefault();
        if($('#grid-diplomas').html() == ""){ 
            let html = '';  
        for( let i = 0 ; i<=6;i++){
            html += ` 
            <article class="card  placeholder" >
                <div class="w-full py-32 bg-gray-200 loading" ></div>
                <div class="card-body">
                    <div  class="placeholder-category w-full mb-2 py-2 bg-gray-200 rounded loading" > </div>
                    <div  class=" py-4  bg-gray-200 rounded loading"> </div>
                    <div  class=" border-b border-gray-200 mt-4 mb-1  loading"> </div>
                    <div  class=" bg-gray-200 py-2 rounded mt-3 loading" > </div>
                    <div  class=" mt-1  bg-gray-200 py-2 rounded  loading" > </div>
                    <div  class="mt-3 rounded py-9 bg-gray-200 loading "> </div>
                </div>
                <div class="  px-6 py-4 bg-gray-200 flex justify-between ">
                    <div class="placeholder-btn w-full py-2 bg-gray-300 rounded loading" > </div>
                    <div  class="placeholder-price w-full py-2 bg-gray-300 rounded loading " > 
                    </div>
                </div> 
            </article>
            `;  
        }
        $('#grid-diplomas').html(html)
        const headers = new Headers({
            'Content-Type': 'application/json',
            'X-WP-Nonce': ajax_diplomas.nonce
        }); 
        fetch(ajax_diplomas.url, {
            method: 'get',
            headers: headers,
            credentials: 'same-origin'
        })
        .then(response => {  
            return response.ok ? response.json() : 'No hay entradas...'; 
        }).then(json_response => { 
            html = '';
            let pageUrl = window.location.href
            if(json_response.length !== 0 ){ 
                json_response.map((post)=>{  
                    html += `  <a class="card" >
                    <img class="w-full" src="${post.thumbnail}" alt="${post.title}">
                    <div class="card-body">
                        <div  class="card-category mb-1" ><svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/forms.svg#diplomas"></svg> <span  class="text-black text-sm ml-1 ">Diploma</span> </div>
                        <h2  class="card__title ">${post.title} </h2>
                        <div  class="card-info" ><svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#calendar"></svg> <span class="card-info__attribute font-cooperhewitteg " >Fecha: </span><span  class="card-info__value">${post.fecha}</span> </div>
                        <div  class="card-info" ><svg class=""><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#certificado"></svg> <span class="card-info__attribute " >Certificado: </span><span  class="card-info__value"> ${post.horas}</span> </div>
                        <div  class="card-certify">
                            <h3  class=" " >Certificado a nombre de:</h3>
                            <img  class=" w-24 sm:w-32 md:w-40 h-auto " src="${pageUrl}wp-content/uploads/2020/02/cropped-logo.png" alt="Escuela de Gerencia y Gestión">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline btn-outline-blue text-base" >Ver diploma</button>
                        <div  class="card-footer-price" >
                            <svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#price"></svg> 
                            <var>${post.precio}.<span class="text-sm font-medium">00</span> </var>
                        </div>
                    </div> 
                </a> `;   
                    
            }) 
            }    
            $('#grid-diplomas').html(html);
        });
        }  
    });

}
export default diplomas