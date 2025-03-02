
$(window).scroll(function () {
   var wScroll = $(window).scrollTop();
   
      // console.log(wScroll);
   
   
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
      
   if (wScroll > 100) {
      $('.kartu1 .about').each(function (i) {
         setTimeout(function () {
            $('.kartu1 .about').eq(i).addClass('slide');
         }, 350);
      });
   }

   if (wScroll > 100) {
      $('.kartu1 .about').each(function (i) {
         setTimeout(function () {
            $('.kartu1 .pAbout').eq(i).addClass('slide');
         }, 450);
      });
   }

   if (wScroll > 100) {
      $('.kartu1 .about').each(function (i) {
         setTimeout(function () {
            $('.kartu1 .image').eq(i).addClass('slide');
         }, 600);
      });
   }

   // kartu 2

   if (wScroll > 500) {
      $('.kartu2 .tentang').each(function (i) {
         setTimeout(function () {
            $('.kartu2 .tentang').eq(i).addClass('geser');
         }, 350);
      });
   }

   if (wScroll > 500) {
      $('.kartu2 .tentang').each(function (i) {
         setTimeout(function () {
            $('.kartu2 .pTentang').eq(i).addClass('geser');
         }, 450);
      });
   }

   if (wScroll > 500) {
      $('.kartu2 .tentang').each(function (i) {
         setTimeout(function () {
            $('.kartu2 .gambar').eq(i).addClass('geser');
         }, 600);
      });
   }

   if (wScroll >= 1500) {
      $("body").css("background-color", "#613D2F"); // Warna gelap
   } else {
      $("body").css("background-color", "#ded5cd"); // Warna awal
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

$(document).ready(function () {
   $(window).scroll(function () {
      let scrollTop = $(this).scrollTop();
      let viewportHeight = window.innerHeight;
      let startOffset = window.matchMedia("(max-width: 768px)").matches ? viewportHeight * 0.9 : 1700;

      if (scrollTop > startOffset) {
         let adjustedScroll = scrollTop - startOffset;

         // awan

         $(".awan1").css({
            'transform': `translate(${-adjustedScroll * 0.1}px, ${adjustedScroll * 0.2}px)`,
         });
         $(".awan2").css({
            'transform': `translate(${adjustedScroll * 0.2}px, ${adjustedScroll * 0.15}px)`,
         });
         $(".awan3").css({
            'transform': `translate(${adjustedScroll * 0.3}px, ${adjustedScroll * 0.2}px)`,
         });
         $(".awan4").css({
            'transform': `translateX(${-adjustedScroll * 0.2}px)`,
         });

         // gunung

         $('.adj-f').css({
            'transform': `translateY(${adjustedScroll * 0.15}px)`,
         });

         $('.adj-l, .adj-r').css({
            'transform': `translateY(${adjustedScroll * 0.2}px)`,
         });

         $('.adj-m').css({
            'transform': `translate(-50%, ${adjustedScroll * 0.3}px)`,
         });

         $('.adj-behind1, .adj-behind2').css({
            'transform': `translateY(${adjustedScroll * 0.4}px)`,
         });
      }
   });
});

// profil

let nextButton = document.getElementById('next');
let prevButton = document.getElementById('prev');
let carousel = document.querySelector('.carousel');
let listHTML = document.querySelector('.carousel .list');
let seeMoreButtons = document.querySelectorAll('.seeMore');
let backButton = document.getElementById('back');

nextButton.onclick = function () {
   showSlider('next');
}
prevButton.onclick = function () {
   showSlider('prev');
}
let unAcceppClick;
const showSlider = (type) => {
   nextButton.style.pointerEvents = 'none';
   prevButton.style.pointerEvents = 'none';

   carousel.classList.remove('next', 'prev');
   let items = document.querySelectorAll('.carousel .list .item');
   if (type === 'next') {
      listHTML.appendChild(items[0]);
      carousel.classList.add('next');
   } else {
      listHTML.prepend(items[items.length - 1]);
      carousel.classList.add('prev');
   }
   clearTimeout(unAcceppClick);
   unAcceppClick = setTimeout(() => {
      nextButton.style.pointerEvents = 'auto';
      prevButton.style.pointerEvents = 'auto';
   }, 2000)
}
seeMoreButtons.forEach((button) => {
   button.onclick = function () {
      carousel.classList.remove('next', 'prev');
      carousel.classList.add('showDetail');
   }
});
backButton.onclick = function () {
   carousel.classList.remove('showDetail');
}