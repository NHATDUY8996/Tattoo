// add active
$('.linkmenu').click(function() {
  $('.linkmenu').removeClass('active');
  $(this).addClass('active');
});



$('.servicecarousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: true,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    768: {
      items: 2
    },
    1200: {
      items: 4
    }
  }
});

$('.princecarousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: true,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    768: {
      items: 2
    },
    1200: {
      items: 3
    }
  }
});

$('.artworklistcarousel').owlCarousel({
  loop: false,
  margin: 10,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 2,
    },
    768: {
      items: 4
    },
    1200: {
      items: 6
    }
  }
});

$('.artworkcarousel').owlCarousel({
  loop: false,
  margin: 10,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 6
    },
    1200: {
      items: 6
    }
  }
});
$('.artistscarousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 1,
    },
    768: {
      items: 2
    },
    1200: {
      items: 3
    }
  }
});
$('.procedurecarousel').owlCarousel({
  loop: false,
  margin: 30,
  nav: false,
  dots: false,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
  responsive: {
    0: {
      items: 2
    },
    768: {
      items: 4
    },
    1200: {
      items: 4
    }
  }
});
$('.usercarousel').owlCarousel({
  loop: false,
  items: 1,
  margin: 30,
  nav: true,
  dots: true,
  navText: ['<i class="bi bi-chevron-left aria-hidden="true"></i>'
    , '<i class="bi bi-chevron-right" aria-hidden="true"></i>'],
});
$('.artworkcarousels').owlCarousel({
  loop: false,
  margin: 10,
  items:1,
  nav: false,
  dots: true,
  navText: ['<i class="bi bi-arrow-left aria-hidden="true"></i>'
    , '<i class="bi bi-arrow-right" aria-hidden="true"></i>'],
});

