import './bootstrap';

import '../assets/css/all.min.css';
// import '../css/color-1.css';
// import '../css/color-2.css';
// import '../css/color-3.css';
// import '../css/color-4.css';
// import '../css/color-5.css';
import '../css/style-switcher.css';

import '../assets/js/all.min';
import '../js/script';


// let sections = document.querySelectorAll('section');
// let navLinks = document.querySelectorAll('header nav a');


// window.onscroll = () => {
//     sections.forEach(sec => {
//         let top = window.scrollY;
//         let offset = sec.offsetTop - 150;
//         let height = sec.offsetHeight;
//         let id = sec.getAttribute('id');

//         if(top >= offset && top < offset + height) {
//             navLinks.forEach(links => {
//                 links.classList.remove('active');
//                 document.querySelector('header nav a[href*='+ id +']').classList.add('active');
//             });
//         }
//     });
// };


document.addEventListener("DOMContentLoaded", () => {
    const footerIconTop = document.querySelector(".footer-iconTop");
    const mainContainer = document.querySelector(".main-container");

    mainContainer.addEventListener("scroll", () => {
        if (mainContainer.scrollTop > 200) {
            footerIconTop.classList.add("show"); // Show the button
        } else {
            footerIconTop.classList.remove("show"); // Hide the button
        }
    });

    footerIconTop.addEventListener("click", (e) => {
        e.preventDefault();
        mainContainer.scrollTo({
            top: 0,
            behavior: "smooth", // Smooth scrolling to the top
        });
    });
});

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    grabCursor: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});