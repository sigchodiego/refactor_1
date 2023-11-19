<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <?php
    include './header.php';
    ?>
    <head>
    </head>
    <body>
        <div class="row allinside">
                <?php include "cabecera.php" ?>

                <div class="padd1430" style="max-width: 700px;width: 100%;margin: 0 auto;margin-top: 45px;">
                    <?php
                    if(isset($_SESSION['registrado']) && $_SESSION['registrado']=="REGISTRADO"){
                        ?>
                            <div class="aviso_ya_user">Comprobamos que ya tienes un usuario registrado con tu cédula o pasaporte.</div>
                        <?php
                    }
                    unset($_SESSION['registrado']);
                    ?>
                    <div class="eresnuevologindiv">Iniciar sesión</div>
                    <form class="form" id="form_auth" action="./php/comprobar_login.php" method="POST" style="margin-top: 30px;text-align: center;">
                        <label>Correo electrónico</label>
                        <input type="text" name="email" id="email" placeholder="Correo electrónico">
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1" id="error_email" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1" id="error_no_email" style="display: none;">
                            <span class="font-weight-semibold">Escribe un correo válido.</span>
                        </div>
                        <label>Contraseña</label>
                        <input type="password" name="pass" id="pass" placeholder="Contraseña">
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1" id="error_pass" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div><br/>
                        <!--
                        <p style="font-family: MPR;font-size: 14px !important;color: #ffffff;padding: 0 !important;margin-bottom: 25px !important;display: inline-flex;">
                            <input type="checkbox" id="aceptoterm" name="aceptoterm" class="aceptoterm" value="Si" style="width: 15px;margin-top: 7px;margin-right: 4px;"> <span><a href="Reglamento-RAC-2021.pdf" target="_blank" style="color: #ffffff;font-weight: bold;font-size: 17px;text-decoration: underline;">He leído y acepto términos y condiciones</a></span>
                        </p>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1" id="error_term_cond" style="display: none;">
                            <span class="font-weight-semibold">Debes aceptar términos y condiciones.</span>
                        </div>
                        -->
                        <?php
                        if(isset($_SESSION['error_auth']) && $_SESSION['error_auth']=="ERROR_AUTH"){
                        ?>
                            <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1" id="error_au">
                                <span class="font-weight-semibold">Uno de los datos ingresados es incorrecto, por favor intenta de nuevo.</span>
                            </div>
                        <?php
                        }
                        unset($_SESSION['error_auth']);
                        ?>
                        <div style="text-align: center;">
                            <button class="btnmi" id="submit_sign_in">Ingresar</button>
                        </div>
                    </form>
                    <div class="ups_olv"><a href="lost_.php">¡UPS!  Olvidé mi contraseña</a></div>
                    <div class="ups_olv" style="margin-top: 10px;"><a href="registro.php">Crear un usuario</a></div>
                </div>
            <div class="over_footer"><?php include "footer.php" ?></div>
            </div>
    </body>
    <script type="text/javascript">

$(function(){
    $('#submit_sign_in').click(function(e){
        e.preventDefault();
        /*if($('#aceptoterm').is(':checked')){*/
            var error_term_cond=$('#error_term_cond');
            error_term_cond.fadeOut(100);
            var send = true;
            
            var email=$('#email');
            var error_email=$('#error_email');
            var error_no_email=$('#error_no_email');
            if(email.val()===""){
                error_email.fadeIn(400);
                send=false;
            }else{
                error_email.fadeOut(400);
                var resultcorreo = "";
                    emailRegex = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
                    if (emailRegex.test(email.val())) {
                        resultcorreo = "0k";
                    } else {
                        resultcorreo = "no0k";
                    }
                        if(resultcorreo === "no0k"){
                            error_no_email.fadeIn(400);
                            send=false;
                        }
                        else{
                            error_no_email.fadeOut(400);
                    }
            }
            
            var pass=$('#pass');
            var error_pass=$('#error_pass');
            if(pass.val()===""){
                error_pass.fadeIn(400);
                send=false;
            }else{
                error_pass.fadeOut(400);
            }
            
            
            if(send===true){
                $('#form_auth').submit();
            }
        /*}else{
            var error_term_cond=$('#error_term_cond');
            var error_email=$('#error_email');
            var error_no_email=$('#error_no_email');
            var error_pass=$('#error_pass');
            send=false;
            error_term_cond.fadeIn(400);
            error_email.fadeOut(400);
            error_no_email.fadeOut(400);
            error_pass.fadeOut(400);
            $('#error_au').fadeOut(100);
        }*/
        
    });
    
});

    </script>
</html> 