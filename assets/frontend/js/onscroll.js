(function ($) {
  $(window).on("scroll", function () {
    //Loop Sections
    $(".service_card_offset").each(function (i, d) {


      //And Get Current One
      var windowScroll = $(window).scrollTop();
      var service_card_offset = $(this).offset().top - 500;

      // Offset
      var service_card_offset_deactive = service_card_offset + $(this).height();

      if (windowScroll > service_card_offset) {
        $('.service_index').removeClass('active');
        $(`.service_index:eq(${i})`).addClass('active');
        $('.accordion-collapse').removeClass('show');
        $(`.service_index:eq(${i})`).parents('.accordion-body').parents('.accordion-collapse').addClass('show');
        // $(".service_card_offset").removeClass('active_after_effect');

        if ($(this).hasClass('active_after_effect')) {
          console.log('N/A');
        } else {
          $(this).addClass('active_after_effect');
          $(this).removeClass('active_after_effect_min');
        }

      }else{
        $(this).removeClass('active_after_effect');
        $(this).addClass('active_after_effect_min');
      }

      // if (windowScroll > service_card_offset_deactive) {
      //   $(".service_card_offset").removeClass('active_after_effect');
      // }

    
      // console.log('windowScroll ' + windowScroll);
      // console.log(windowScroll - service_card_offset);


      // if ($(`.service_index:eq(${1})`).offset().top < 1000) {
      //   $(`.service_index`).removeClass('active');
      // }

    });
  });
})(jQuery);


// function data_sectionname() {

//   let right_data = "";

//   $('.page_part_offset').each(function (i) {
//     right_data += `<div class="index_item" onclick="goToSection('` + $(this).data('sectionnameindex') + `')">` + $(this).data('sectionname') + `</div>`;
//   });

//   let default_article = "";
//   $('.default_article h3').each(function (i) {
//     $(this).attr('data-article', `article${i}`);
//     let data_article = $(this).data('article');
//     default_article += `<li onclick="goToArticleSection('` + data_article + `')">` + $(this).html() + `</li>`;
//   });

//   let accordionData = "";

//   $('.default_article_hd').each(function () {
//     accordionData += `<div class="index_item"><div class="accordion accordion-flush" id="accordionright">` +
//       `<div class="accordion-item"><h2 class="accordion-header" id="flush-headingrightOne">` +
//       `<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" ` +
//       `data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">` +
//       $(this).html() + `</button></h2><div id="flush-collapse25" class="accordion-collapse collapse" ` +
//       ` aria-labelledby="flush-headingrightOne" data-bs-parent="#accordionright">
//               <div class="accordion-body">
//                   <ul>` + default_article + `</ul>
//                   </div>
//               </div>
//           </div>
//       </div>
//   </div>`;
//   });

//   $('.right_aside_sidebar').html(right_data + accordionData);

//   console.log(right_data);

// }
// data_sectionname();


// function goToSection(id) {
//   let offset = $(`.page_part_offset[data-sectionnameIndex="${id}"]`).offset().top + 20;
//   window.scrollTo(300, offset);
// }

// function goToArticleSection(data_article) {
//   let offset = $(`.default_article h3[data-article="${data_article}"]`).offset().top - 10;
//   window.scrollTo(300, offset);
// }


// function service_section(){
$('#accordionFlushSideNav .service_index').each(function (i) {
  $(this).click(() => {
    let offset = $(`.service_card_offset:eq(${i})`).offset().top - 40;
    window.scrollTo(300, offset);
  });
});
/* On Scroll (Side Navbar) || Start */
$('#multi_navigation .service_index').each(function (i) {
  $(this).click(() => {
    let offset = $(`.service_card_offset:eq(${i})`).offset().top - 30;
    window.scrollTo(300, offset);
  });
});
/* On Scroll (Side Navbar) || End */




$('#sp_box_root .sp_box').each(function (i) {

  $(`.sp_box_single:eq(${0})`).removeClass('d-none');

  $(this).click(() => {
    $('#sp_box_root .sp_box').removeClass('active');
    $(this).addClass('active');
    $(`.sp_box_single`).addClass('d-none');
    $(`.sp_box_single:eq(${i})`).removeClass('d-none');
  });
});



// Outside Div Selection For Sticky Nav || Start
window.addEventListener('click', function (e) {
  if (document.getElementById('service_navbar').contains(e.target)) {
    // Clicked in box
  } else {
    // Clicked outside the box
    if ($('#service_navbar').hasClass('show_nav')) {
      $('#service_navbar').addClass('d-none');
      $('#bg_overlay').addClass('d-none');
      $('#service_navbar').removeClass('show_nav');
    }
  }
});

// Outside Div Selection For Sticky Nav || Start
window.addEventListener('click', function (e) {
  if (document.getElementById('pricing_navbar').contains(e.target)) {
    // Clicked in box
  } else {
    // Clicked outside the box
    if ($('#pricing_navbar').hasClass('show_nav')) {
      $('#pricing_navbar').addClass('d-none');
      $('#bg_overlay').addClass('d-none');
      $('#pricing_navbar').removeClass('show_nav');
    }
  }
});

$('#service_nav_item').click(function () {

  $('#service_navbar').animate({
    scrollTop: 0
  }, 100);

  if ($('#service_navbar').hasClass('d-none')) {
    $('#pricing_navbar').addClass('d-none');
    $('#bg_overlay').addClass('d-none');
    $('#pricing_navbar').removeClass('show_nav');

    $('#service_navbar').removeClass('d-none');
    $('#bg_overlay').removeClass('d-none');
    setTimeout(function () {
      $('#service_navbar').addClass('show_nav');
    }, 50);
  } else {
    $('#service_navbar').addClass('d-none');
    $('#bg_overlay').addClass('d-none');
    $('#service_navbar').removeClass('show_nav');
  }
});


$('#pricing_nav_item').click(function () {

  $('#pricing_navbar').animate({
    scrollTop: 0
  }, 100);

  if ($('#pricing_navbar').hasClass('d-none')) {
    $('#service_navbar').addClass('d-none');
    $('#bg_overlay').addClass('d-none');
    $('#service_navbar').removeClass('show_nav');

    $('#pricing_navbar').removeClass('d-none');
    $('#bg_overlay').removeClass('d-none');
    setTimeout(function () {
      $('#pricing_navbar').addClass('show_nav');
    }, 50);
  } else {
    $('#pricing_navbar').addClass('d-none');
    $('#bg_overlay').addClass('d-none');
    $('#pricing_navbar').removeClass('show_nav');
  }
});
// Outside Div Selection For Sticky Nav || End