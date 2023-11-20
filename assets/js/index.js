$(function () {
    $('.mpbtnsh').click(function (e) {
        $('.mpdiv').fadeIn(100);
        $('.viddiv').fadeOut(100);
        $('.mpdivav').fadeOut(100);
        $('.bases_legs').fadeOut(100);
        $('.form_cont').fadeOut(100);
    });
    $('.cerrar_mp').click(function () {
        $('.mpdiv').fadeOut(100);
    });
    $('.cerrar_mpdivav').click(function () {
        $('.mpdivav').fadeOut(100);
    });

    $('.ver_bases_legales').click(function (e) {
        $('.bases_legs').fadeIn(100);
        $('.mpdiv').fadeOut(100);
        $('.viddiv').fadeOut(100);
        $('.mpdivav').fadeOut(100);
        $('.form_cont').fadeOut(100);
    });
    $('.cerrar_bases_legs').click(function () {
        $('.bases_legs').fadeOut(100);
    });

    $('.act_vid').click(function (e) {
        $('.viddiv').fadeIn(100);
        $('.mpdiv').fadeOut(100);
        $('.mpdivav').fadeOut(100);
        $('.bases_legs').fadeOut(100);
        $('.form_cont').fadeOut(100);
    });
    $('.cerrar_vid').click(function () {
        var iframe = document.getElementById('iframevideo');
        $('.viddiv').fadeOut(100);
        var iframeSrc = iframe.src;
        iframe.src = iframeSrc;
    });



    //form contacto
    $('.ver_form_cont').click(function (e) {
        $('.form_cont').fadeIn(100);
        $('.viddiv').fadeOut(100);
        $('.mpdiv').fadeOut(100);
        $('.mpdivav').fadeOut(100);
        $('.bases_legs').fadeOut(100);
    });
    $('.cerrar_form_cont').click(function () {
        $('.form_cont').fadeOut(100);
    });
    $('#submit_form_cont').click(function () {
        var send = true;

        var nombre_form_cont = $('#nombre_form_cont');
        var error_nombre_form_cont = $('#error_nombre_form_cont');
        if (nombre_form_cont.val() === "") {
            error_nombre_form_cont.fadeIn(400);
            send = false;
        } else {
            error_nombre_form_cont.fadeOut(400);
        }

        var asunto_form_cont = $('#asunto_form_cont');
        var error_asunto_form_cont = $('#error_asunto_form_cont');
        if (asunto_form_cont.val() === "") {
            error_asunto_form_cont.fadeIn(400);
            send = false;
        } else {
            error_asunto_form_cont.fadeOut(400);
        }

        var detalle_form_cont = $('#detalle_form_cont');
        var error_detalle_form_cont = $('#error_detalle_form_cont');
        if (detalle_form_cont.val() === "") {
            error_detalle_form_cont.fadeIn(400);
            send = false;
        } else {
            error_detalle_form_cont.fadeOut(400);
        }

        var email_form_cont = $('#email_form_cont');
        var error_email_form_cont = $('#error_email_form_cont');
        var error_email_form_cont_format = $('#error_email_form_cont_format');
        if (email_form_cont.val() === "") {
            error_email_form_cont.fadeIn(400);
            send = false;
        } else {
            error_email_form_cont.fadeOut(400);
            var resultcorreo = "";
            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            if (emailRegex.test(email_form_cont.val())) {
                resultcorreo = "0k";
            } else {
                resultcorreo = "no0k";
            }
            if (resultcorreo === "no0k") {
                error_email_form_cont_format.fadeIn(400);
                send = false;
            } else {
                error_email_form_cont_format.fadeOut(400);
            }
        }

        if (send === true) {
            var nombre = escape(nombre_form_cont.val());
            var email = escape(email_form_cont.val());
            var asunto = escape(asunto_form_cont.val());
            var detalle = escape(detalle_form_cont.val());
            $('.ejecutar_send_mail_form_cont').load('enviar_mail_form_cont.php?nombre=' + nombre +
                '&email=' + email + '&asunto=' + asunto + '&detalle=' + detalle);
            nombre_form_cont.val("");
            asunto_form_cont.val("");
            email_form_cont.val("");
            detalle_form_cont.val("");
        }

    });

});