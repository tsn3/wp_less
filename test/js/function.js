$('#contactForm').on("submit", function (e) {
    e.preventDefault();

    $.ajax({
        url: ajaxPath,
        // dataType: "json",
        type: "POST",
        data: $(this).serialize(),
        success: function(res) {
            if (res.status == 1) {
                alert('Письмо отправленно');
            } else{
                alert('Письмо не ушло =(');
            }
        },
        error: function () {
            alert('Не взлетело');
        }
    });

    return false;
});

$('#my-custom-id').on("click", function (e) {
    e.preventDefault();

    $.ajax({
        url: ajaxPath,
        // dataType: "json",
        type: "POST",
        data: {
            'action' : 'needmore'
        },
        success: function(res) {
            if (res.status == 1) {
                $('#my-custom-wrapper').before(res.content);
            }
        },
        error: function () {
            alert('Не взлетело');
        }
    });

    return false;
});