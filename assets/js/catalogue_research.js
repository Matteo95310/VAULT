const mediaSearch = document.querySelector('#medias-search');

mediaSearch?.addEventListener('keyup', function (event) {
    event.preventDefault();

    const medias = document.querySelectorAll('.card');


    medias.forEach(function (media, i) {
        const title = media.querySelector('h2');


        if (mediaSearch.value === '') {
            media.style.display = "block";
        } else {
            if (title.innerText.toLowerCase().startsWith(mediaSearch.value.toLowerCase())) {
                media.style.display = "block";
            } else {
                media.style.display = 'none';
            }

        }


    })
});

const research_part = document.querySelector(".research_part")
const input_list =research_part.querySelectorAll("input")

input_list.forEach(function (input) {
    input.addEventListener('click',function (event){

        const medias = document.querySelectorAll('.card');

        medias.forEach(function (media, i) {

            if (media.classList.contains(event.target.value) ){
                media.style.display = 'block'
            }
            else {
                media.style.display = 'none'
            }
        })


    })

})



