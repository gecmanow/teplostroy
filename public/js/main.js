$(document).ready(function () {
    $('#orderOneStepForm').on('submit', function (e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: "onlain-zakaz/send",
            data: $('#orderOneStepForm').serialize(),
            success: function (data) {
                if (data.result) {
                    $('#senderror').hide();
                    $('#sendmessage').show();
                    $('#orderOneStepForm').trigger("reset");
                } else {
                    $('#senderror').show();
                    $('#sendmessage').hide();
                    $('#orderOneStepForm').trigger("reset");
                }
            },
            error: function () {
                $('#senderror').show();
                $('#sendmessage').hide();
                $('#orderOneStepForm').trigger("reset");
            }
        });
    });
});
