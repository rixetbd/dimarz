$('#copy_text_r_upwork').click(function(){
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