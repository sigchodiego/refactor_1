<!DOCTYPE html>
<html lang="es">
<?php include './header.php'; ?>

<head>
</head>

<body>
    <div class="row allinside forms_de_registro">
        <?php include "cabecera.php" ?>

        <div class="padd1430" style="max-width: 700px;width: 100%;margin: 0 auto;margin-top: 45px;">
            <div class="form" id="form0" style="margin-top: 370px;text-align: center;">
                <div class="text_reg">Este proceso lo realizaremos una sola vez. ¡Hagámoslo juntos!<br />Por favor,
                    ingresa tu cédula o pasaporte:</div>
                <label class="fechflab">Identificación</label>
                <select type="text" name="ced_o_pas" id="ced_o_pas"
                    style="height: 40px !important;text-align-last: center;">
                    <option value="0">Cédula</option>
                    <option value="1">Pasaporte</option>
                </select>
                <label>Escribe tu cédula o pasaporte</label>
                <input type="text" name="comprobar_ced" id="comprobar_ced" placeholder="Cédula o pasaporte"
                    maxlength="10" role="presentation" autocomplete="off">
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_comprobar_ced" style="display: none;">
                    <span class="font-weight-semibold">Rellena este campo.</span>
                </div>
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_comprobar_ced_format" style="display: none;">
                    <span class="font-weight-semibold">Escribe una cédula o pasaporte válido.</span>
                </div>
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_validar_ced" style="display: none;">
                    <span class="font-weight-semibold">El número de cédula ingresado es incorrecto</span>
                </div>
                <div style="text-align: center;">
                    <button class="btnmi" id="submit_comprobar_ced"
                        onclick="return buscar_por_cedula();">Continuar</button>
                </div>
                <input type="hidden" id="existe">
            </div>
            <div class="form" id="form1" style="margin-top: 370px;text-align: center;">
                <div class="texto_verifica_o">Ahora, verifica o ingresa tu correo electrónico<br /> y crea una
                    contraseña para iniciar sesión</div>
                <label>Correo electrónico</label>
                <input type="text" name="email" id="email" placeholder="Correo electrónico">
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_email" style="display: none;">
                    <span class="font-weight-semibold">Rellena este campo.</span>
                </div>
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_no_email" style="display: none;">
                    <span class="font-weight-semibold">Escribe un correo válido.</span>
                </div>
                <label>Contraseña</label>
                <input type="password" name="pass" id="pass" placeholder="">
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_pass" style="display: none;">
                    <span class="font-weight-semibold">Rellena este campo.</span>
                </div>
                <label>Reescribe tu contraseña</label>
                <input type="password" name="repass" id="repass" placeholder="">
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_repass" style="display: none;">
                    <span class="font-weight-semibold">Rellena este campo.</span>
                </div>
                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                    id="error_noes_pass" style="display: none;">
                    <span class="font-weight-semibold">Este campo debe coincidir con tu contraseña.</span>
                </div>
                <div id="send_verificator_mail"></div>
                <div style="text-align: center;">
                    <button class="btnmi" id="submit_continuar_sign_up">Continuar</button>
                </div>
            </div>
            <div class="comprobar_cod_ver_antes" style="display: none;text-align: center;margin-top: 370px">
                <div class="divreg100x50" style="width: 100%;float: left;padding: 0 25px;">
                    <div class="texto_te_enviamos">¡Te enviamos un código de verificación a tu correo!<br /> Pégalo aquí
                        para continuar.</div>
                    <div class="texto_te_enviamos">Si no recibes el código en 5 minutos, por favor revisa tu carpeta de
                        spam o escríbenos a</div>
                    <label>Código de verificación</label>
                    <input type="text" name="cod_ver_antes" id="cod_ver_antes" maxlength="" placeholder="">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_cod_ver" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_cod_ver_no_coin" style="display: none;">
                        <span class="font-weight-semibold">Este código no coincide con el enviado a tu correo
                            eléctronico.</span>
                    </div>
                    <div style="text-align: center;">
                        <button class="btnmi" id="btn_comprobar_cod_ver_antes"
                            onclick="return comprobar_cod_ver_antes();">Validar</button>
                    </div>
                </div>
            </div>
            <form class="form" id="form2" action="" method="POST" style=";text-align: center;" autocomplete="off">
                <div class="texto_ingr_esta">Ingresa o actualiza tus datos<br /><span>Esta información es indispensable
                        para contactarte en caso de ser el ganador</span></div>
                <input type="hidden" name="emailh" id="emailh">
                <input type="hidden" name="passh" id="passh">
                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Nombres</label>
                    <input type="text" name="name" id="name" placeholder="Nombres">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_name" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>
                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Apellidos</label>
                    <input type="text" name="apellido" id="apellido" placeholder="Apellidos">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_apellido" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>


                <input type="hidden" name="cedula" id="cedula" maxlength="10">


                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Teléfono fijo</label>
                    <input type="text" name="phone" id="phone" maxlength="10" placeholder="Teléfono 1 de contacto"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_phone" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>

                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Celular</label>
                    <input type="text" name="phone2" id="phone2" maxlength="10" placeholder="Teléfono 2 de contacto"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_phone2" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>

                <div class="divreg100x50" style="width: 100%;float: left;padding: 0 25px;">
                    <label>Dirección completa y sector</label>
                    <input type="text" name="direccion" id="direccion" placeholder="Dirección" style="max-width: 100%;"
                        onkeydown="noPuntoComa( event )">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_direccion" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>

                <div style="position: relative;display: inline-block;width: 100%;">
                    <p
                        style="font-family: MPR; font-size: 14px !important; color: #95080b; padding: 0 !important; margin-bottom: 25px !important; display: flex; width: 100%; margin-top: 20px; flex-wrap: wrap;">
                        <input type="checkbox" id="aceptopol" name="aceptopol" class="aceptopol" value="Si"
                            style="width: 15px;margin-top: 4px;margin-right: 10px;"> <span
                            style="width: calc(100% - 30px);text-align: initial;">Autorizo los tratamientos de mis datos
                            personales a INVEDE, conforme con lo establecido en su <a
                                href="./politica-de-privacidad.pdf" target="_blank"
                                style="color: #600000;font-weight: bold;font-size: 15px;">política de privacidad.</a> En
                            particular, acepto y autorizo recibir información y ofertas a través de plataformas de
                            mensajería instantánea, email y/o redes sociales, y que mis datos personales sean
                            comunicados a terceros únicamente para hacer posible esta y futuras promociones.</span>
                    </p>
                </div>

                <div style="position: relative;display: inline-block;width: 100%;">
                    <p
                        style="font-family: MPR; font-size: 14px !important; color: #95080b; padding: 0 !important; margin-bottom: 25px !important; display: flex; width: 100%; margin-top: 20px; flex-wrap: wrap;">
                        <input type="checkbox" id="aceptoterm" name="aceptoterm" class="aceptoterm" value="Si"
                            style="width: 15px;margin-top: 4px;margin-right: 10px;"> <span
                            style="width: calc(100% - 30px);text-align: initial;">Al registrarme, acepto los <a
                                href="reglamento.pdf" target="_blank"
                                style="color: #600000;font-weight: bold;font-size: 14px;">términos y condiciones</a> de
                            la
                            promoción</span>
                    </p>
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_term_cond" style="display: none;">
                        <span class="font-weight-semibold">Debes aceptar términos y condiciones.</span>
                    </div>
                </div>



                <input type="hidden" name="cod_ver" id="cod_ver" maxlength="" placeholder="">

                <div style="text-align: center;">
                    <button class="btnmi" id="submit_sign_up">¡Guardar!</button>
                </div>
            </form>
        </div>
        <div class="over_footer"><?php include "footer.php" ?></div>
    </div>
</body>
<script type="text/javascript">
$(function() {

    $('#preview_term').load('./terminos.html');

    $('#comprobar_ced').on('keyup', function() {
        if ($('#ced_o_pas').val() === '0') {
            validarCI($(this).val());
        }
    });

    $('#ced_o_pas').on('change', function() {
        $('#comprobar_ced').val('');
        isValidCI();
    });

    $('#submit_continuar_sign_up').click(function(e) {
        e.preventDefault();
        var send = true;

        var email = $('#email');
        var error_email = $('#error_email');
        var error_no_email = $('#error_no_email');
        if (email.val() === "") {
            error_email.fadeIn(400);
            send = false;
        } else {
            error_email.fadeOut(400);
            var resultcorreo = "";
            emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
            if (emailRegex.test(email.val())) {
                resultcorreo = "0k";
            } else {
                resultcorreo = "no0k";
            }
            if (resultcorreo === "no0k") {
                error_no_email.fadeIn(400);
                send = false;
            } else {
                error_no_email.fadeOut(400);
            }
        }

        var pass = $('#pass');
        var error_pass = $('#error_pass');
        if (pass.val() === "") {
            error_pass.fadeIn(400);
            send = false;
        } else {
            error_pass.fadeOut(400);
        }

        var repass = $('#repass');
        var error_repass = $('#error_repass');
        var error_noes_pass = $('#error_noes_pass');
        if (repass.val() === "") {
            error_repass.fadeIn(400);
            send = false;
        } else if (repass.val() !== pass.val()) {
            error_repass.fadeOut(400);
            error_noes_pass.fadeIn(400);
            send = false;
        } else {
            error_repass.fadeOut(400);
            error_noes_pass.fadeOut(400);
        }
        if (send === true) {
            $('#send_verificator_mail').load();
            $('#form1').fadeOut(100);
            $("#emailh").val(email.val());
            $("#passh").val(pass.val());
            $(".comprobar_cod_ver_antes").fadeIn(400);
        }

    });
    $('#submit_sign_up').click(function(e) {

        e.preventDefault();

        var send = true;

        var name = $('#name');
        var error_name = $('#error_name');
        if (name.val() === "") {
            error_name.fadeIn(400);
            send = false;
        } else {
            error_name.fadeOut(400);
        }

        var apellido = $('#apellido');
        var error_apellido = $('#error_apellido');
        if (apellido.val() === "") {
            error_apellido.fadeIn(400);
            send = false;
        } else {
            error_apellido.fadeOut(400);
        }

        var cedula = $('#cedula');
        var error_cedula = $('#error_cedula');
        if (cedula.val() === "") {
            error_cedula.fadeIn(400);
            send = false;
        } else {
            error_cedula.fadeOut(400);
        }

        var phone2 = $('#phone2');
        var phone = $('#phone');
        var error_phone = $('#error_phone');
        if (phone.val() === "" && phone2.val() === "") {
            error_phone.fadeIn(400);
            send = false;
        } else {
            error_phone.fadeOut(400);
        }


        var error_phone2 = $('#error_phone2');
        if (phone2.val() === "" && phone.val() === "") {
            error_phone2.fadeIn(400);
            send = false;
        } else {
            error_phone2.fadeOut(400);
        }

        var direccion = $('#direccion');
        var error_direccion = $('#error_direccion');
        if (direccion.val() === "") {
            error_direccion.fadeIn(400);
            send = false;
        } else {
            error_direccion.fadeOut(400);
        }


        var error_term_cond = $('#error_term_cond');
        if ($('.aceptoterm').is(':checked') === false) {
            send = false;
            error_term_cond.fadeIn(400);
        } else {
            error_term_cond.fadeOut(400);
        }


        if (send === true) {
            $('#form2').submit();
        }
    });
});

function noPuntoComa(event) {
    var e = event || window.event;
    var key = e.keyCode || e.which;
    if (key === 110 || key === 190 || key === 188) {
        e.preventDefault();
    }
}

function comprobar_cod_ver_antes() {
    var datos = {
        "email": $('#emailh').val(),
        "cod_ver": $('#cod_ver_antes').val()
    }

    $.ajax({
        type: 'post',
        url: '',
        data: datos,
        dataType: 'json',
        success: function(result) {
            $('#form0').fadeOut(100);
            $('#form1').fadeOut(100);
            if (result === "incorrecto") {
                $("#error_cod_ver_no_coin").fadeIn(400);
                $('#form2').fadeOut(200);
            } else if (result === "correcto") {
                $("#error_cod_ver_no_coin").fadeOut(400);
                $(".comprobar_cod_ver_antes").fadeOut(400);
                $('#cod_ver').val($('#cod_ver_antes').val());
                $('#form2').fadeIn(500);
            }
        }

    });
    return false;
}



function validarCI(cedula) {
    var cad = cedula;
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;
    var value = false;

    if (cad !== "" && longitud === 10) {
        for (i = 0; i < longcheck; i++) {
            if (i % 2 === 0) {
                var aux = cad.charAt(i) * 2;
                if (aux > 9) aux -= 9;
                total += aux;
            } else {
                total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
            }
        }

        total = total % 10 ? 10 - total % 10 : 0;

        if (cad.charAt(longitud - 1) == total) {
            value = true;
            isValidCI();
        } else {
            isInvalidCI();
            value = false;
        }
    }
    return value;
}

function isValidCI() {
    console.log("Cedula Válida");
    $('#error_validar_ced').css('display', 'none');
    $('#submit_comprobar_ced').removeAttr('disabled');
    $('#submit_comprobar_ced').css('opacity', '1');
}

function isInvalidCI() {
    console.log("Cedula Inválida");
    $('#error_validar_ced').css('display', 'block');
    $('#submit_comprobar_ced').attr('disabled', true);
    $('#submit_comprobar_ced').css('opacity', '0.5');
}

function comprobar_cedula() {
    var comprobar_ced = $('#comprobar_ced');
    var error_comprobar_ced = $('#error_comprobar_ced');
    var error_comprobar_ced_format = $('#error_comprobar_ced_format');
    var ced_pas = "";
    if ($('#ced_o_pas').val() === "1") {
        ced_pas = "P" + comprobar_ced.val();
    }
    if ($('#ced_o_pas').val() !== "1") {
        ced_pas = comprobar_ced.val();
    }
    if (comprobar_ced.val() === "") {
        error_comprobar_ced_format.fadeOut(400);
        error_comprobar_ced.fadeIn(400);
    } else if (comprobar_ced.val().length < 5 || comprobar_ced.val().length > 10) {
        error_comprobar_ced.fadeOut(400);
        error_comprobar_ced_format.fadeIn(400);
    } else {
        error_comprobar_ced.fadeOut(400);
        error_comprobar_ced_format.fadeOut(400);

        var datos = {
            "cedula": ced_pas
        };

        $.ajax({
            type: 'post',
            url: '',
            data: datos,
            dataType: 'json',
            error: function(jqXHR, textStatus, errorThrown) {
                $("#existe").val(errorThrown);
            },
            success: function(user) {
                $('#existe').val(user['existe']);
                $('#form0').fadeOut(100);
                $('#form1').fadeIn(100);
                if (user["cedula"] === "REGISTRADA") {
                    location.href = "login.php";
                } else {
                    $("#emailh").val(user["email"]);
                    $("#email").val(user["email"]);
                    $("#cedula").val(user["cedula"]);
                    $("#name").val(user["nombre"]);
                    $("#apellido").val(user["apellidos"]);
                    $("#phone").val(user["telefono1"]);
                    $("#phone2").val(user["telefono2"]);
                    $("#direccion").val(user["direccion"]);

                }
            }

        });

    }
    return false;
}

function buscar_por_cedula() {
    /* activar en los datos de usuario el editar la cedula y validarla*/
    if ($('#ced_o_pas').val() === '0') {
        if (validarCI($('#comprobar_ced').val())) {
            isValidCI();
            comprobar_cedula();
        } else {
            isInvalidCI();
        }
    } else {
        comprobar_cedula();
    }
}
</script>

</html>