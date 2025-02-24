$(window).scroll(function () {
   var wScroll = $(window).scrollTop();

   // $('.kelelep .jumbotron').css({
   //    'transform' : 'translate(0px, ' + wScroll/2 + 'px)' 
   // });

   // $('.kelelep h2').css({
   //    'transform' : 'translate(0px, ' + wScroll/2.5 + 'px)' 
   // });

   // $('.kelelep h1').css({
   //    'transform' : 'translate(0px, ' + wScroll/3 + 'px)' 
   // });

   // $('.kelelep p').css({
   //    'transform' : 'translate(0px, ' + wScroll/3.5 + 'px)' 
   // });


// kartu 1

   if(wScroll > 100) {
      $('.kartu1 .about').each(function(i) {
         setTimeout(function() {
            $('.kartu1 .about').eq(i).addClass('slide');
         }, 350);
      });
   }

   if(wScroll >   100) {
      $('.kartu1 .about').each(function(i) {
         setTimeout(function() {
            $('.kartu1 .pAbout').eq(i).addClass('slide');
         }, 450);
      });
   }

   if(wScroll > 100) {
      $('.kartu1 .about').each(function(i) { 
         setTimeout(function() {
            $('.kartu1 .image').eq(i).addClass('slide');
         }, 600);
      });
   }
   
   // kartu 2

   if(wScroll > 500) {
      $('.kartu2 .tentang').each(function(i) {
         setTimeout(function() {
            $('.kartu2 .tentang').eq(i).addClass('geser');
         }, 350);
      });
   }

   if(wScroll >   500) {
      $('.kartu2 .tentang').each(function(i) {
         setTimeout(function() {
            $('.kartu2 .pTentang').eq(i).addClass('geser');
         }, 450);
      });
   }

   if(wScroll > 500) {
      $('.kartu2 .tentang').each(function(i) { 
         setTimeout(function() {
            $('.kartu2 .gambar').eq(i).addClass('geser');
         }, 600);
      });
   }

   
});

// card

const panels = document.querySelectorAll('.panel');

panels.forEach((panel) => {
   panel.addEventListener('click', () => {
      removeActiveClasses();
      panel.classList.add('active');
   });
});

function removeActiveClasses() {
   panels.forEach((panel) => {
      panel.classList.remove('active');
   });
}

//adds

$(window).scroll(function() {
   let wScroll = $(this).scrollTop();
   let triggerHeight = 1200;
   let stopHeight = 3100;
   
   if (wScroll >= triggerHeight && wScroll <= stopHeight) {
       $(".parallax-building").each(function() {
           let speed = $(this).data("speed");
           let translateY = (wScroll - triggerHeight) * speed - 50;
           $(this).css("transform", `translateY(${translateY}px)`);
       });
       $(".parallax-cloud").each(function() {
           let speed = $(this).data("speed");
           let translateY = (wScroll - triggerHeight) * speed - 50;
           $(this).css("transform", `translateY(${translateY}px)`);
       });
   }

   let fadeTrigger = 1800; // Teks mulai muncul saat scroll mencapai 1800px
   let fadeStop = 2700; // Teks menghilang setelah 3000px
      if (wScroll >= fadeTrigger && wScroll <= fadeStop) {
         $(".fade-text").css("opacity", "1");
      } else {
         $(".fade-text").css("opacity", "0");
      }
});

// profil

let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');

nextButton.onclick = function(){
    showSlider('next');
}
prevButton.onclick = function(){
    showSlider('prev');
}
let unAcceppClick;
const showSlider = (type) => {
    nextButton.style.pointerEvents = 'none';
    prevButton.style.pointerEvents = 'none';

    carousel.classList.remove('next', 'prev');
    let items = document.querySelectorAll('.carousel .list .item');
    if(type === 'next'){
        listHTML.appendChild(items[0]);
        carousel.classList.add('next');
    }else{
        listHTML.prepend(items[items.length - 1]);
        carousel.classList.add('prev');
    }
    clearTimeout(unAcceppClick);
    unAcceppClick = setTimeout(()=>{
        nextButton.style.pointerEvents = 'auto';
        prevButton.style.pointerEvents = 'auto';
    }, 2000)
}
seeMoreButtons.forEach((button) => {
    button.onclick = function(){
        carousel.classList.remove('next', 'prev');
        carousel.classList.add('showDetail');
    }
});
backButton.onclick = function(){
    carousel.classList.remove('showDetail');
}