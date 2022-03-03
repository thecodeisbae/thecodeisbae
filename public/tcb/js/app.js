// Execute JavaScript on page load
$(function() {
    // Initialize phone number text input plugin
    $('#userPhone, #salesPhone').intlTelInput({
        responsiveDropdown: true,
        autoFormat: true,
        utilsScript: '/vendor/intl-phone/libphonenumber/build/utils.js'
    });

});

function callFor() {

    $('#calling').html('Call is on going <i class="fa fa-spinner fa-spin"></i>')
    $.ajax({
        url: '/call',
        method: 'POST',
        dataType: 'json',
        data: {
            userPhone: $('#userPhone').val(),
            salesPhone: $('#salesPhone').val()
        }
    }).done(function(data) {
        // The JSON sent back from the server will contain a success message
        // alert(data.message);
        setTimeout(() => {
            window.location.href = '/thanks';
        }, 2000);
    }).fail(function(error) {
        // alert(JSON.stringify(error));
        // window.location.reload();
        setTimeout(() => {
            window.location.href = '/thanks';
        }, 2000);
    });
}