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
<?php
if(isset($_SESSION['usuario'])){
    $user_name = $_SESSION['usuario_nombre'];
?>

<body>
    <!--<img src="./images/top-en-bv.jpg" class="imgtopb">-->
    <div class="row allinside">
        <?php include "cabecera.php" ?>

        <div style="width: 100%;display: inline-block;position: relative;">
            <div class="form_cont" style="text-align: center;">
                <div style="font-family: MPR;text-align: center;font-size: 23px;color: #fff;margin-bottom: 25px;">
                    Compártenos tus inquietudes. Con gusto las revisaremos y<br /> te responderemos lo antes posible.
                </div>
                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Nombre</label>
                    <input type="text" name="nombre_form_cont" id="nombre_form_cont" placeholder="Nombre">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_nombre_form_cont" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>

                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label>Asunto</label>
                    <input type="text" name="asunto_form_cont" id="asunto_form_cont" placeholder="Asunto">
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_asunto_form_cont" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>

                <div class="divreg100x50" style="width: 100%;float: left;padding: 0 25px;">
                    <label>Detalle</label>
                    <textarea row="3" name="detalle_form_cont" id="detalle_form_cont" placeholder="Detalle"
                        style="max-width: 100%;"></textarea>
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_detalle_form_cont" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>
                <div style="text-align: center;">
                    <button class="btnmi" id="submit_form_cont">Enviar</button>
                </div>
                <div class="ejecutar_send_mail_form_cont"
                    style="width: 100%;display: inline-block;font-family: 'MPR';color: white;margin-top: 25px;"></div>
                <div class="cerrar_form_cont">X</div>
            </div>
        </div>



        <div class="txt_bienv">¡BIENVENID@!</div>
        <div class="texto_nombre_bv"><?php echo $user_name; ?></div>
        <div class="texto_ahora_estas">Ahora estas list@ para registrar tus facturas, obtener cupones y participar por
            un auto NISSAN X Trail e-Power con propulsión 100% eléctrica más $10.000 dólares en efectivo.</div>
        <div class="texto_recuerda">Recuerda que debes guardar tus facturas electrónicas, requisito<br /> indispensable
            si llegas a ser el ganador.</div>
        <div class="texto_suerte">¡Suerte!</div>
        <a href="tablero.php" style="text-decoration: none;">
            <div class="btnmi" style="text-align: center;margin-top: 35px;">Registrar factura</div>
        </a>


        <div style="width: 100%;display: inline-block;text-align: center;">
            <ul class="links_ul_home_1">
                <li class="ver_form_cont">¿Dudas?</li>
                <li class="ver_form_cont" style="text-decoration: underline;">Escríbenos</li>
            </ul>
        </div>


        <div class="over_footer"><?php include "footer.php" ?></div>
    </div>
    <script>
    //form contacto
    $('.ver_form_cont').click(function(e) {
        $('.form_cont').fadeIn(100);
    });
    $('.cerrar_form_cont').click(function() {
        $('.form_cont').fadeOut(100);
    });
    $('#submit_form_cont').click(function() {
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

        if (send === true) {
            var nombre = escape(nombre_form_cont.val());
            var asunto = escape(asunto_form_cont.val());
            var detalle = escape(detalle_form_cont.val());
            $('.ejecutar_send_mail_form_cont').load('enviar_mail_form_cont.php?nombre=' + nombre + '&asunto=' +
                asunto + '&detalle=' + detalle);
            nombre_form_cont.val("");
            asunto_form_cont.val("");
            detalle_form_cont.val("");
        }

    });
    </script>
</body>

</html>
<?php
}
else{
    ?>
<meta http-equiv="refresh" content="0; url=./login.php">
<?php
}