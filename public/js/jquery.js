$(document).ready(function () {
  $(".photo").hide();
  $(".video").show();
  $(".design").hide();

  $(".poto1").click(function () {
    $(".photo").show();
    $(".video").hide();
    $(".design").hide();
  });

  $(".video1").click(function () {
    $(".photo").hide();
    $(".video").show();
    $(".design").hide();
  });

  $(".design1").click(function () {
    $(".photo").hide();
    $(".video").hide();
    $(".design").show();
  });



  // ================mwp

  $("#wedding").show();
  $("#enga").hide();
  $("#pre").hide();

  $(".wedding1").click(function () {
    $("#wedding").show();
    $("#enga").hide();
    $("#pre").hide();
  });
  $(".enga1").click(function () {
    $("#wedding").hide();
    $("#enga").show();
    $("#pre").hide();
  });
  $(".pre").click(function () {
    $("#wedding").hide();
    $("#enga").hide();
    $("#pre").show();
  });
});



// ==================================
// MWP





// $(document).ready(function () {
//   $(".owl-carousel").owlCarousel();
//   var owl = $('.owl-carousl');
//   owl.owlCarousel();
//   // Go to the next item
//   $('.customNextBtn').click(function () {
//     owl.trigger('next.owl.carousel');
//   })
//   // Go to the previous item
//   $('.customPrevBtn').click(function () {
//     // With optional speed parameter
//     // Parameters has to be in square bracket '[]'
//     owl.trigger('prev.owl.carousel', [300]);
//   })
// });

$(function () {
  var path = window.location.href; // Mengambil data URL pada Address bar
  $('.nav-item a').each(function () {
    // Jika URL pada menu ini sama persis dengan path...
    if (this.href === path) {
      // Tambahkan kelas "active" pada menu ini
      $(this).addClass('active');
    }
  });
});