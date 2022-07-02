let indice = 1;
muestraSlides(indice);

function avanzaSlide(n){
    //debugger
    muestraSlides( indice+=n );
}

function posicionSlide(n){
   // debugger
    muestraSlides(indice=n);
}
function muestraSlides(n){
   // debugger
    let i;
    let slides = document.getElementsByClassName('miSlider');
    let barras = document.getElementsByClassName('barra');

    if(n > slides.length){
        indice = 1;
    }
    if(n < 1){
        indice = slides.length;
    }
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
    }
    for(i = 0; i < barras.length; i++){
        barras[i].className = barras[i].className.replace(" active", "");
    }

    slides[indice-1].style.display = 'block';
    barras[indice-1].className += ' active';

}