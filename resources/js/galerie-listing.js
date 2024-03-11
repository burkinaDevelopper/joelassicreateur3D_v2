// script.js
const imgtag=document.getElementById('lightbox');
let currentIndex = 0;

document.getElementById('gallery').addEventListener('click', function(event) {
    if (event.target.tagName === 'IMG') {
        imgtag.style.display = 'block'
        const images = document.querySelectorAll('#gallery img');
        currentIndex = Array.from(images).indexOf(event.target);
        console.log(currentIndex);
        showLightbox(currentIndex, true);
    }
});

function showLightbox(index, instant = false) {
   
    const lightboxImage = document.getElementById('lightbox-img');
    const images = document.querySelectorAll('#gallery img');
    const direction = index < currentIndex ? 'is-prev' : 'is-next';
    
    if (!instant) {
        lightboxImage.classList.add(direction);
        setTimeout(() => {
            lightboxImage.classList.remove('is-prev', 'is-next');
        }, 50); // Petit délai pour que la classe soit appliquée avant de charger la nouvelle image
    }

    if (index < 0) {
        currentIndex = images.length - 1;
    } else if (index >= images.length) {
        currentIndex = 0;
    } else {
        currentIndex = index;
    }

    lightboxImage.src = images[currentIndex].src;
    imgtag.classList.add('is-visible');
   
}

document.querySelector('.lightbox').addEventListener('click', function(event) {
    if (event.target.classList.contains('prev')) {
        showLightbox(currentIndex - 1);
    } else if (event.target.classList.contains('next')) {
        showLightbox(currentIndex + 1);
    } else if (event.target.className !== 'lightbox-content') {
        imgtag.classList.remove('is-visible');
        imgtag.style.display = 'none'; // Cache le lightbox après l'animation
        currentIndex = 0;
    }
});
