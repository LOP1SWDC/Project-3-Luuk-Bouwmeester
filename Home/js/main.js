let timer = 3000;
let slideshow_images = document.getElementsByClassName("home_slideshow");
let index = 0;

function updateSlide() {
    // Loop door elke afbeelding en maak ze onzichtbaar
    for (let i = 0; i < slideshow_images.length; i++) {
        slideshow_images[i].style.display = "none";
    }

    // Update onze index, zodat deze elke keer dat deze functie wordt opgeroepen met 1 wordt verhoogd
    index++;
    if (index > slideshow_images.length - 1) {
        index = 0;
    }

    // Maak 1 afbeelding zichtbaar, met de huidige index
    slideshow_images[index].style.display = "flex";
}

updateSlide();
setInterval(updateSlide, timer);