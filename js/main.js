// jQuery.ready(function($) {})
// jQuery('body').on('click', function() {
//   alert('test');
// });



// ********** PRELOADER ********** //
// (Hide) preloader after specified time
setTimeout(function() {
  jQuery('#preloader').fadeOut('slow', function() {
    jQuery(this).remove();
  });
  // jQuery('#preloader').css('z-index', 0);
}, 200);



// ********** SCROLLSPY jQuery alternative ********** //
// jQuery('.header li a').click().css('background-color', 'green');
// jQuery('.main-nav ul li a:link').on('click', function() {
//   // if no .active, add it
//   if (!jQuery('.main-nav ul li a:link').hasClass('active')) {
//     jQuery(this).addClass('active');
//   // if there is .active, remove it 
//   } else {
//     jQuery(this).removeClass('active');
//   }
// })



// ********** ?????????? ********** //
// jQuery( ".menu-item" ).click(function() {
//   // jQuery( ".menu-item" ).addClass( "selected" );
//   // jQuery( ".selected" ).css('display', 'block');
// });



// ********** STICKY HEADER ********** //
// When the user scrolls the page, execute stickyHeader function
window.onscroll = function() { stickyHeader() };

// Get the needed header(s)
const header = document.querySelectorAll(".header"); //
const headerDesktop = document.querySelector(".header-desktop");
const headerMobile = document.querySelector(".header-mobile");
const headerAlt = document.querySelector(".header-alt");

// Get the main nav ul li a / menu-item a
const navLink = document.querySelectorAll(".main-nav ul li a:link"); // or getElementsByTagName

// Get the logo
// const logo = document.getElementById("logo");
const logo = document.querySelector(".logo");

// Get the offset position of the navbar
// const sticky = header[0].offsetTop; // or headerDesktop or headerMobile
const sticky = headerDesktop.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function stickyHeader() {
  if (window.pageYOffset > sticky) {
    // 1 Add class sticky to every element with header class
    for (let z = 0; z < header.length; z++) {
      header[z].classList.add("sticky");
    }
    // headerDesktop.classList.add("sticky");
    // headerMobile.classList.add("sticky");

    // 2 Replace logo
    // logo.src = "https://www.appmea.com/img/appmea_verlauf.png";
    logo.className = 'logo-2';

    // 3 Black color for navigation links
    for (let i = 0; i < navLink.length; i++) {
      navLink[i].style.color = "black";
    }

    // 4 Blue color for navigation links on hover (only in header desktop)
    const minMedia = window.matchMedia("(min-width: 768px)");
    if (minMedia.matches) {
      jQuery('.menu-item a').mouseenter(function() {
        jQuery(this).css('color', '#1695c3');
      });
      jQuery('.menu-item a').mouseleave(function() {
        jQuery(this).css('color', 'black');
      });
    }

  // 1 Remove class sticky from every element with header class
  } else {
    for (let z = 0; z < header.length; z++) {
      header[z].classList.remove("sticky");
    }
    // headerDesktop.classList.remove("sticky");
    // headerMobile.classList.remove("sticky");

    // 2 Change logo back to white (if it's not alternative header, i.e. header on front page)
    if (!headerAlt) {
      // logo.src = "https://www.appmea.com/img/appmea_white.png";
      logo.className = 'logo';
    }

    // 3 (Back to) White color for navigation links
    for (let i = 0; i < navLink.length; i++) {
        navLink[i].style.color = "white";
    }

    // 4 (Back to) Gray color for navigation links on hover (only in header desktop)
    const minMedia = window.matchMedia("(min-width: 768px)");
    if (minMedia.matches) {
      jQuery('.menu-item a').mouseenter(function() {
        jQuery(this).css('color', '#d8d8d8');
        });
      jQuery('.menu-item a').mouseleave(function() {
        jQuery(this).css('color', 'white');
      });
    }
  }
}



// ********** HAMBURGER & MOBILE NAV ********** //
// Get hamburger and mobile nav/menu
const hamburger = document.querySelector('.hamburger');
const nav = document.querySelector('.main-nav-mobile');

// Show/display mobile nav
function displayNavM() {
  // nav.style.display = 'block';

  // Toggle functionality
    // If there is no mobile nav, show it & show 'X' sign as hamburger
  if (nav.style.display == 'none') {
    nav.style.display = 'block';
    hamburger.classList.add("open");
  }
    // Else hide it & show regular sign as hamburger
  else {
    nav.style.display = 'none';
    hamburger.classList.remove("open");
  }
}

// Hide mobile nav when clicked outside of hamburger or nav
window.addEventListener('click', function(e) {
  // If target is not on hamburger or mobile nav, hide nav & show regular sign as hamburger
  if ( !hamburger.contains(e.target) && ( !nav.contains(e.target) ) ) {
    nav.style.display = "none";
    hamburger.classList.remove("open");
  }
})



// ********** SCROLL BACK TO TOP ********** //
// jQuery('#back-to-top').on('click', function(){
//   jQuery('body,html').animate({
//     scrollTop: 0
//   }, 600);
// });