$('#copy_text_r_upwork').click(function () {
    let message_show_box = $('#message_show_box').val();
    window.navigator.clipboard.writeText(message_show_box);

    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your Cover Letter has been copied',
        html: 'You will be redirected to our Upwork Account',
        showConfirmButton: false,
        timer: 2000
    })
});

// =============[ Slider Articles - Start ]========
// const panels = document.querySelectorAll(".panel");

// function removeActiveClasses() {
//     panels.forEach((panel) => {
//         panel.classList.remove("active");
//     });
// }

// panels.forEach((panel) => {
//     panel.addEventListener("click", () => {
//         if (panel.classList.contains("active")) {
//             removeActiveClasses();
//         } else {
//             removeActiveClasses();
//             panel.classList.add("active");
//         }
//     });
// });

// $('.panel').each(function () {
//     $(this).click(function () {
//         console.log('You clicked on the ' + $(this).children('h3').text() + ' div');
//         // Add your code here to handle the click event for each div
//     });
// });

$('.panel').click(function () {
    // if ($('.panel').hasClass('active')) {

    // }
    $('.panel').not(this).removeClass('active');
    $('.panel').not(this).addClass('deactive');
    $(this).removeClass('deactive');
    $(this).addClass('active');
    // Add your code here to handle the click event for each div
});


// $('.read_more').each(function () {
$('.read_more').click(function () {
    if ($(this).closest('.box_shadow_at').hasClass('height_auto')) {
        $('.box_shadow_at').removeClass('height_auto');
        $(this).closest('.box_shadow_at').addClass('height_auto_past');
        $(this).text('Read More...');
    } else {
        $(this).text('Read Less...');
        $('.box_shadow_at').removeClass('height_auto');
        $('.box_shadow_at').removeClass('height_auto_past');
        $(this).closest('.box_shadow_at').addClass('height_auto');
    }
});
// });

$('.box_shadow_at').click(function () {
    if ($(this).hasClass('height_auto')) {
        $('.box_shadow_at').removeClass('height_auto');
        $(this).addClass('height_auto_past');
        $(this).find('.read_more').text('Read More...');
    } else {
        $(this).find('.read_more').text('Read Less...');
        $(this).removeClass('height_auto_past');
        $('.box_shadow_at').removeClass('height_auto');
        $(this).addClass('height_auto');
    }
});

