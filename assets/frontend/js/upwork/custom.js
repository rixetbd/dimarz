$('#copy_text_r_upwork').click(function(){
    // Swal.fire(
    //     'Good job!',
    //     'You clicked the button!',
    //     'success'
    // )
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Your Cover Letter has been copied',
        html: 'You will be redirected to our Upwork Account',
        showConfirmButton: false,
        timer: 2000
    })
});