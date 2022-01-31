let totalSlides = document.querySelectorAll('#Slide').length;
let inicial = 0;
window.onload = teste();
function teste(){
    const links = document.querySelectorAll('.navbar-Item');
    links.forEach(function(e){
        e.addEventListener('click',function(){
            links.forEach(anchor => anchor.classList.remove("active"));
            e.classList.add('active');            
        });
    });
   

    document.querySelectorAll('#Bolinha').forEach(function(e) {
        
        e.addEventListener('click',function(e){
            document.querySelector('#Sliders').style.marginLeft = (-1 * e.target.getAttribute('data-item') * document.querySelector('#Carrosel').clientWidth)+'px';
            inicial = e.target.getAttribute('data-item');
            let slides = document.querySelectorAll('#Bolinha');
            for (let i = 0; i < slides.length; i++) {
                if(slides[i].classList.contains('active')){
                    slides[i].classList.remove('active');
                }
            }
            e.target.classList.add('active');
        
        });
    });
}

document.querySelector('#Sliders').style.width = 'calc(100vw *'+ totalSlides+')';
function trocarSlides(){
    inicial ++;
    if(inicial==totalSlides){
        inicial = 0;
    }
    let slidePosition = inicial + 1;
    let novaMargem = -1 * inicial * document.querySelector(`#Slide:nth-child(${slidePosition})`).getBoundingClientRect().width;

    document.querySelector('#Sliders').style.marginLeft = novaMargem+'px';
    let slides = document.querySelectorAll('#Bolinha');
   for (let i = 0; i < slides.length; i++) {
       if(slides[i].classList.contains('active')){
           slides[i].classList.remove('active');
       }
   }
    slides[inicial].classList.add("active");
}
setInterval(trocarSlides,5000);
