$('#reg_form').submit(function (event) {
    event.preventDefault();
    let form = document.getElementById("reg_form");
    let formFields = new FormData(form);
    console.log(formFields);

    $.ajax({
        url: 'registration.php',
        type: 'POST',  // http method
        data: formFields,
        processData: false,
        contentType: false,
        cache: false,
        enctype: 'multipart/form-data',
        success: function (data, status, xhr) {// success callback function
            if (data == true){
                $(".registration_successful").show(1000, function () {
                    // window.location;
                    setTimeout(function () {
                        location.reload(true);
                    }, 2000);
                });
            }else {
                $(".registration_failed").show(300);
            }
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback
            console.log(errorMessage);
        }
    });
});

$(document).on("click", ".add_more_work_exp", function () {
    add_more_experience();
});

function add_more_experience() {
    $("#work_experience").clone().appendTo("#multiple_work_experiences");
}