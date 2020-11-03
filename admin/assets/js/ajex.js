(function($) {
    "use strict";
    var js_base_url = function(url) {
        //var base_urls = window.location.origin;
        //var host = window.location.host;
        //var pathArray = window.location.pathname.split('/');
        var getUrl = window.location;
        var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
        if (url === undefined || url === null)
            url = '';
        return baseUrl + '/' + url;
    }

    $("#loginForm").validator().on("submit", function(event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            lsubmitMSG("กรุณากรอกข้อมูลให้ถูกต้อง !");
        } else {
            // everything looks good!
            event.preventDefault();
            lsubmitForm();
        }
    });

    function lsubmitForm() {
        // initiate variables with form content
        var email = $("#a_email").val();
        var pass = $("#a_pass").val();
        $.ajax({
            type: "POST",
            url: js_base_url('auth/login'),
            data: "a_email=" + email + "&a_pass=" + pass,
            success: function(text) {
                if (text == "success") {
                    lformSuccess();
                    setTimeout(function() {
                        window.location.reload(1);
                    }, 3000);
                } else {
                    lsubmitMSG(text);
                }
            }
        });
    }

    function lformSuccess() {
        $("#loginForm")[0].reset();
        lsubmitMSG("เข้าสู่ระบบสำเร็จ !");
        $("input").removeClass('notEmpty'); // resets the field label after submission
    }

    function lsubmitMSG(msg) {

        $("#loginSubmit").text(msg);
    }
})(jQuery);