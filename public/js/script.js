/*animation carousel*/
document.addEventListener('DOMContentLoaded', function () {
    const body = document.querySelector('body');
    const button = document.querySelector('.toggle');
    const menu = document.querySelector('.menu1');
    const menuactiver = document.querySelector('.menuvueaccueil');
    button.addEventListener('click', ()=>{
        menu.classList.toggle('menu1');
        button.classList.toggle('menuactiver');
    })




    const track = document.querySelector('.carousel-track');
    const items = document.querySelectorAll('.carousel-animation');
    const totalItems = items.length;
    const buttonPrev = document.querySelector('.prev');
    const buttonNext = document.querySelector('.next');
    let currentIndex = 0;

    function updateSlide() {
        const newPosition = -(currentIndex * 100);
        track.style.transform = `translateX(${newPosition}%)`;
    }

    function moveNext() {
        currentIndex = (currentIndex + 1) % totalItems;
        updateSlide();
    }

    function movePrev() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems;
        updateSlide();
    }

    buttonNext.addEventListener('click', moveNext);
    buttonPrev.addEventListener('click', movePrev);



/*illustration carousel*/
const tracki = document.querySelector('.carousel-track');
const itemsi = document.querySelectorAll('.carousel-illustration');
const totalItemsi = itemsi.length;
const buttonPrevi = document.querySelector('.prev');
const buttonNexti = document.querySelector('.next');
let currentIndexi = 0;

function updateSlidei() {
    const newPosition = -(currentIndexi * 100);
    tracki.style.transform = `translateX(${newPosition}%)`;
}

function moveNexti() {
    currentIndexi = (currentIndexi + 1) % totalItemsi;
    updateSlidei();
}

function movePrevi() {
    currentIndexi = (currentIndexi - 1 + totalItemsi) % totalItemsi;
    updateSlidei();
}

buttonNexti.addEventListener('click', moveNexti);
buttonPrevi.addEventListener('click', movePrevi);




const readMoreButtons = document.querySelectorAll('.lireplusmoins');

readMoreButtons.forEach(function(button) {
    button.addEventListener('click', ()=> {
        const post = button.previousElementSibling;

        if (post.style.maxHeight === '0px') {
            post.style.maxHeight = post.scrollHeight + 'px';
            button.textContent = '...Lire moins';
        } else {
            post.style.maxHeight = '0px';
            button.textContent = 'En savoir plus';
        }
    });
});



const illustrations = document.querySelectorAll('.illustration');

illustrations.forEach(function(illustration) {
    const largeur = illustration.naturalWidth;
    const hauteur = illustration.naturalHeight; // Sélectionne le parent immédiat avec la classe .image

    if (largeur < hauteur) {
        illustration.classList.add("verticali"); // Ajoute une classe CSS pour une image verticale
    } 
    else if(largeur > hauteur) {
        illustration.classList.add("carre"); // Ajoute une classe CSS pour une image verticale
    }
});




illustrations.forEach(illustration => {
    illustration.addEventListener('click', () => {
        const overlay = document.createElement('div');
        overlay.classList.add('agrandir');
        
        const enlargedImg = document.createElement('img');
        enlargedImg.src = illustration.src;
        overlay.appendChild(enlargedImg);
        
        overlay.addEventListener('click', () => {
            body.removeChild(overlay);
        });
        
        body.appendChild(overlay);
    });
});

const videos = document.querySelectorAll('.animation');

videos.forEach(function(video) {
    const largeur = video.videoWidth;
    const hauteur = video.videoHeight;

    if (largeur <= hauteur) {
        video.classList.add("vertical"); // Ajoute une classe CSS pour une vidéo verticale
    }
});




/*carousel work school*/

  
  

})