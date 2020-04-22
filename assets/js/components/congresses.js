let congresses = ($)=>{
    $("#get-congresses").click(function ($e) {
        $e.preventDefault();
        if($('#grid-congresses').html() == ""){ 
        let html = '';   
            html += ` 
            <article class="card placeholder max-w-xl m-auto" >
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
        $('#grid-congresses').html(html)
        const headers = new Headers({
            'Content-Type': 'application/json',
            'X-WP-Nonce': ajax_congresos.nonce
        }); 
        fetch(ajax_congresos.url, {
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
                    html += `  
                    <a class="card max-w-xl m-auto " >
                    <img class="w-full" src="${post.thumbnail}" alt="${post.title}">
                    <div class="card-body">
                        <div  class="card-category mb-1" ><svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#congress"></svg> <span  class="text-black text-sm ml-1 ">Congreso</span> </div>
                        <h2  class="card__title ">${post.title} </h2>
                        <div  class="card-info" ><svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#calendar"></svg> <span class="card-info__attribute font-cooperhewitteg " >Fechas: </span><span  class="card-info__value"> ${post.date}</span> </div>
                        <div  class="card-info" ><svg class=""><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#location"></svg> <span class="card-info__attribute " >Ubicación: </span><span  class="card-info__value"> ${post.location}</span> </div>
                        <div  class="flex items-center mt-3 justify-evely max-w-xs m-auto  py-3 px-4 shadow rounded ">
                            <h3  class="text-sm" >Certificado a nombre de:</h3>
                            <img  class=" w-32 sm:w-40 h-auto " src="${pageUrl}wp-content/uploads/2020/02/cropped-logo.png" alt="Escuela de Gerencia y Gestión">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-outline btn-outline-blue text-base" >Ver congreso</button>
                        <div  class="card-footer-price " >
                            <svg><use href="${pageUrl}wp-content/themes/escuela/assets/svg/icons.svg#price"></svg> 
                            <var>${post.price}.<span class="text-sm font-medium">00</span> </var>
                        </div>
                    </div> 
                </a> 
                    `;   
                    
            }) 
            }    
            $('#grid-congresses').html(html);
        });
        }
    });
}

export default congresses