export let separateFirstText = ($) =>{
    $('.card__title').each(function(){ 
        let text = this.innerHTML;
        let firstSpaceIndex = text.indexOf(" "); 
        if (firstSpaceIndex > 0) {  
            let substrBefore = text.substring(0,firstSpaceIndex);
            let substrAfter = text.substring(firstSpaceIndex, text.length) 
            let newText = '<span class="card-category">' + substrBefore + '</span>' + substrAfter;
            this.innerHTML = newText;
        } else {
            this.innerHTML = '<span class="card-category">' + text + '</span>';
        }
    }); 
}
 
export let showVideos = ($)=>{
    $('.show-videos').click(()=>{
        $('.vimeography-theme-harvestone').toggleClass('show-video') 
    })
} 
 