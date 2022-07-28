
$('.slider-active').slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    arrows: false,
    dots : true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });




const navbarMenu = document.getElementById("menu");
const menu_barMenu = document.getElementById("menu_bar");
const headerMenu = document.getElementById("header");

// Open Close Navbar Menu on Click menu_bar
if (menu_barMenu && navbarMenu) {
  menu_barMenu.addEventListener("click", () => {
    menu_barMenu.classList.toggle("is-active");
    navbarMenu.classList.toggle("is-active");
  });
}

// Close Navbar Menu on Click Menu Links
document.querySelectorAll(".menu-link").forEach((link) => {
  link.addEventListener("click", () => {
    menu_barMenu.classList.remove("is-active");
    navbarMenu.classList.remove("is-active");
  });
});


// Change Header Background on Scrolling
window.addEventListener("scroll", () => {
    if (this.scrollY >= 85) {
       headerMenu.classList.add("on-scroll");
    } else {
       headerMenu.classList.remove("on-scroll");
    }
 });
 
