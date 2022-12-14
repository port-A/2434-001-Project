
const carouselSlide =document.querySelector(".carosel-slide");
const carouselImage =document.querySelectorAll(".carosel-slide img");


const prevBtn=document.querySelector("#prevBtn");
const nextBtn=document.querySelector("#nextBtn");

let counter=1;
const size=carouselImage[0].clientWidth;

carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';

nextBtn.addEventListener('click',()=>{
    if(counter>=carouselImage.length-1)return;
    carouselSlide.style.transition='transform 0.4s ease-in-out';
    counter++;
    carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';
    

});

prevBtn.addEventListener('click',()=>{
    if(counter<=0)return;
    carouselSlide.style.transition='transform 0.4s ease-in-out';
    counter--;
    carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';
    

});

carouselSlide.addEventListener('transitionend',()=>{
    if(carouselImage[counter].id  === 'last-clone'){
        carouselSlide.style.transition='none';
        counter=carouselImage.length-2;
        carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';

    }
});

carouselSlide.addEventListener('transitionend',()=>{
    if(carouselImage[counter].id  === 'first-clone'){
        carouselSlide.style.transition='none';
        counter=carouselImage.length-counter;
        carouselSlide.style.transform='translateX(' + (-size * counter) + 'px)';

    }
});