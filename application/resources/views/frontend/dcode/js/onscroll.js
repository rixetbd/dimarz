(function ($) {
  $(window).on("scroll", function () {
    //Loop Sections
    $(".service_card_offset").each(function (i, d) {
      //And Get Current One
      var windowScroll = $(window).scrollTop();
      var service_card_offset = $(this).offset().top - 500;
      if (windowScroll > service_card_offset) {
        $('.service_index').removeClass('active');
        $(`.service_index:eq(${i})`).addClass('active');
        $('.accordion-collapse').removeClass('show');
        $(`.service_index:eq(${i})`).parents('.accordion-body').parents('.accordion-collapse').addClass('show');
      }

      // if ($(`.service_index:eq(${1})`).offset().top < 1000) {
      //   $(`.service_index`).removeClass('active');
      // }

    });
  });
})(jQuery);


function data_sectionname() {

  let right_data = "";

  $('.page_part_offset').each(function (i) {
    right_data += `<div class="index_item" onclick="goToSection('` + $(this).data('sectionnameindex') + `')">` + $(this).data('sectionname') + `</div>`;
  });

  let default_article = "";
  $('.default_article h3').each(function (i) {
    $(this).attr('data-article', `article${i}`);
    let data_article = $(this).data('article');
    default_article += `<li onclick="goToArticleSection('` + data_article + `')">` + $(this).html() + `</li>`;
  });

  let accordionData = "";

  $('.default_article_hd').each(function () {
    accordionData += `<div class="index_item"><div class="accordion accordion-flush" id="accordionright">` +
      `<div class="accordion-item"><h2 class="accordion-header" id="flush-headingrightOne">` +
      `<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" ` +
      `data-bs-target="#flush-collapse25" aria-expanded="false" aria-controls="flush-collapse25">` +
      $(this).html() + `</button></h2><div id="flush-collapse25" class="accordion-collapse collapse" ` +
      ` aria-labelledby="flush-headingrightOne" data-bs-parent="#accordionright">
              <div class="accordion-body">
                  <ul>` + default_article + `</ul>
                  </div>
              </div>
          </div>
      </div>
  </div>`;
  });

  $('.right_aside_sidebar').html(right_data + accordionData);

  console.log(right_data);

}
data_sectionname();


function goToSection(id) {
  let offset = $(`.page_part_offset[data-sectionnameIndex="${id}"]`).offset().top + 20;
  window.scrollTo(300, offset);
}

function goToArticleSection(data_article) {
  let offset = $(`.default_article h3[data-article="${data_article}"]`).offset().top - 10;
  window.scrollTo(300, offset);
}

