//sticky menu
$(window).scroll(function() {
  if ( $(this).scrollTop() > 100 && !$('.sticky-header').hasClass('open') ) {
    $('.sticky-header').addClass('open');
    $('.sticky-header').slideDown();
  } else if ( $(this).scrollTop() <= 100 ) {
    $('.sticky-header').removeClass('open');
    $('.sticky-header').slideUp();
  }
});

//scroll to top
$("a[href='#scrollToTop']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

//mobile menu
function openNav() {
  document.getElementById("mobileNav").style.width = "100%";
};

function openNavMain() {
  document.getElementById("mobileNavMain").style.width = "100%";
};

function closeNav() {
  document.getElementById("mobileNav").style.width = "0%";
};

function closeNavMain() {
  document.getElementById("mobileNavMain").style.width = "0%";
};

$( ".mobile-menu-item" ).click(function() {
  document.getElementById("mobileNav").style.width = "0%";
});

$( ".mobile-menu-main-item" ).click(function() {
  document.getElementById("mobileNavMain").style.width = "0%";
});


$('.tagline').fadeIn(2000).removeClass('hidden');


// parralax scroll landing
gsap.registerPlugin(ScrollTrigger);
gsap.to(".parallax-bg", {
  scrollTrigger: {
    scrub: true
  },
  y: (i, target) => -ScrollTrigger.maxScroll(window) * target.dataset.speed,
  ease: "none"
});

// fade-up animate
const boxes = gsap.utils.toArray('.box');

boxes.forEach((box, i) => {
  const anim = gsap.fromTo(box, {autoAlpha: 0, y: 100}, {duration: 1, autoAlpha: 1, y: 0});
  ScrollTrigger.create({
    trigger: box,
    animation: anim,
    toggleActions: 'play none none none',
    once: true,
  });
});

//text lazy load
$(function() {
    $(".lazyLoad").Lazy();
});

//// parralax scroll building section
gsap.defaults({ease:"none", duration:1})

  let tl = gsap.timeline({scrollTrigger:{
  	trigger:".home-section-three-content",
  	start:"top 50%",
  	end:"bottom 90%",
  	toggleActions:"restart none none reverse",
    markers: false,
}})

.from(".image-left", {y:150})
.from(".smoke-scroll-1", {y:50}, 0)
.from(".image-right", {y:150}, 0)
.from(".smoke-scroll-2", {y:50}, 0)
.from(".text", {y:150}, 0);

/*
ScrollTrigger.matchMedia({

	"(min-width: 1024px)":function() {

    start = 'top 30%';
    createScrollTrigger();
  },
  "(max-width: 1023px)":function() {

    start = 'top 55%';
    createScrollTrigger();

}});
*/
