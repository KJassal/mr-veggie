
// mobile menu js

$('.btn1').click(function () {
  $(this).toggleClass("click");
  $('.sidebar').toggleClass("show");
});
$('.feat-btn').click(function () {
  $('nav ul .feat-show').toggleClass("show");
  $('nav ul .first').toggleClass("rotate1");
});
$('.serv-btn').click(function () {
  $('nav ul .serv-show').toggleClass("show1");
  $('nav ul .second').toggleClass("rotate1");
});
$('.serv-btn1').click(function () {
  $('nav ul .serv-show1').toggleClass("show2");
  $('nav ul .second').toggleClass("rotate1");
});
$('nav ul li a').click(function () {
  $(this).addClass("active").siblings().removeClass("active");
});



// Welcome Slider Js
$('.slider').slick({
  autoplay: true,
  speed: 800,
  lazyLoad: 'progressive',
  arrows: true,
  dots: false,
  prevArrow: '<div class="slick-nav prev-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
  nextArrow: '<div class="slick-nav next-arrow"><i></i><svg><use xlink:href="#circle"></svg></div>',
}).slickAnimation();


$('.slick-nav').on('click touch', function (e) {

  e.preventDefault();

  var arrow = $(this);

  if (!arrow.hasClass('animate')) {
    arrow.addClass('animate');
    setTimeout(() => {
      arrow.removeClass('animate');
    }, 1600);
  }

});



// Side Bar

$('.autoplay').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  autoplaySpeed: 5000,
});



//   tranding products
$('.autoplay1').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  // dots: true,
  autoplaySpeed: 1000,
});



//   testimonial
$('.autoplay2').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  arrows: false,
  // dots: true,
  autoplaySpeed: 2000,
});



// Shop all flavour juicy
const panels = document.querySelectorAll(".panel");

panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    removeActiveClasses();
    panel.classList.add("active");
  });
});

function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

// Filter Js

let sortBtn = document.querySelector('.filter-menu').children;
let sortItem = document.querySelector('.filter-item').children;

for (let i = 0; i < sortBtn.length; i++) {
  sortBtn[i].addEventListener('click', function () {
    for (let j = 0; j < sortBtn.length; j++) {
      sortBtn[j].classList.remove('current');
    }

    this.classList.add('current');
    let targetData = this.getAttribute('data-target');

    for (let k = 0; k < sortItem.length; k++) {
      sortItem[k].classList.remove('active');
      sortItem[k].classList.add('delete');

      if (sortItem[k].getAttribute('data-item') == targetData || targetData == "all") {
        sortItem[k].classList.remove('delete');
        sortItem[k].classList.add('active');
      }
    }
  });
}


// Footer
$(document).ready(function () {
  $('.third-row  li.active-1').find('span').css('color', 'white');
  $(' .third-row li').click(function () {
    $(' .third-row li.active-1').find('span').css('color', 'black');
    $(' .third-row li.active-1').removeClass('active-1');
    $(' .third-row li.active-1').addClass('text-dark');
    $(this).addClass('active-1');
    $(' .third-row  li.active-1').find('span').css('color', 'white');
  });

});

// Dropdown

$('.dropdown').click(function () {
  $(this).attr('tabindex', 1).focus();
  $(this).toggleClass('active');
  $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
  $(this).removeClass('active');
  $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
  $(this).parents('.dropdown').find('span').text($(this).text());
  $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/


$('.dropdown-menu li').click(function () {
  var input = '<strong>' + $(this).parents('.dropdown').find('input').val() + '</strong>',
    msg = '<span class="msg">Hidden input value: ';
  $('.msg').html(msg + input + '</span>');
});
