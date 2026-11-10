const mediaSearch = document.querySelector('#search_bar');

mediaSearch?.addEventListener('keyup', function(event) {
   event.preventDefault();

   const medias = document.querySelectorAll('.movie-card');



   medias.forEach(function (media, i) {
       const title = media.querySelector('h3');

       if(mediaSearch.value == '') {
           media.style.display = "block";
       }else {
           if(title.innerText === mediaSearch.value) {
               media.style.display = "block";
           }else {
               media.style.display = 'none';
           }
       }
   })
});