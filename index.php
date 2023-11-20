<?php include('header.php'); ?>
<main class="row allinsidehome" style="position: relative;">
    <section class="bienvenida">
        <div class="bienvenida__header">
            <img class="logo" src="assets/images/logo-MEJ-w.svg" alt="Logo empresa">
            <img class="logo" src="assets/images/ico-mis-facturas.svg" alt="Logo campaña">
        </div>
        <p hidden class="bienvenida__mensaje">¡ÚLTIMO DÍA PARA REGISTRAR TUS FACTURAS!</p>
        <h2 class="bienvenida__titulo">
            Acumula $50 en facturas y participa por un <span class="bienvenida__titulo--bold">Espectacular NISSAN
                X-TRAIL E-POWER (con propulsión 100%
                eléctrica) + $10.000 en efectivo</span>
        </h2>
        <div class="bienvenida__actions">
            <div class="bienvenida__block">
                <span class="label">Soy nuev@ aquí</span>
                <a href="registro.php" class="button button--color1">Crea una cuenta</a>
            </div>
            <div class="bienvenida__block">
                <span class="label">Ya tengo un usuario</span>
                <a href="login.php" class="button button--color1">Registra tus facturas</a>
            </div>
            </a>
        </div>
        </div>
        <ul class="bienvenida_links">
            <li class="act_vid link-item">¿Cómo funciona?</li>
            <li class="mpbtnsh li_inter_links_ul_home link-item">Mecánica & premios</li>
            <li class="ver_bases_legales link-item">Términos y condiciones</li>
        </ul>

        <ul class="bienvenida_links">
            <li class="ver_form_cont link-item">¿Dudas?</li>
            <li class="ver_form_cont link-item" style="text-decoration: underline;">Escríbenos</li>
        </ul>

    </section>
    <div class="mpdiv">
        <img class="mpdivimg" src="images/mp_canje1.jpg" style="width: 100%;">
        <div class="cerrar_mp">X</div>
    </div>
    <div class="viddiv">
        <div class="video-responsive-contenedor">
            <iframe class="video-responsive-src" id="iframevideo" title="Video" frameborder="0"
                allowfullscreen></iframe>
            <div class="cerrar_vid">X</div>
        </div>
    </div>
    <div class="mpdivav" style="display:none;">
        <img class="mpdivimg" src="images/pop-navi-fin-.jpg" style="width: 100%;">
        <div class="cerrar_mpdivav">X</div>
    </div>
    <div class="bases_legs">
        <a href="reglamento.pdf" target="_blank"><img class="mpdivimg mpdivimg_bl" src="images/pop_up_legales.svg"
                style="width: 100%;"></a>
        <div class="cerrar_bases_legs">X</div>
    </div>
    <div class="form_cont popup">
        <h3 class="title">
            Compártenos tus inquietudes. Con gusto las revisaremos y<br /> te responderemos
            lo antes posible.
        </h3>
        <div class="popup_row">
            <div class="popup_col">
                <label class="popup_label">Nombre</label>
                <input class="popup_input" type="text" name="nombre_form_cont" id="nombre_form_cont"
                    placeholder="Nombre">
                <span class="alert alert-warning" id="error_nombre_form_cont" style="display: none;">
                    Rellena este campo.
                </span>
            </div>

            <div class="popup_col">
                <label class="popup_label">Asunto</label>
                <input class="popup_input" type="text" name="asunto_form_cont" id="asunto_form_cont"
                    placeholder="Asunto">
                <span class="alert alert-warning" id="error_asunto_form_cont" style="display: none;">
                    Rellena este campo.
                </span>
            </div>
        </div>

        <div class="popup_row">
            <label class="popup_label">Correo</label>
            <input class="popup_input" type="emial" name="email_form_cont" id="email_form_cont"
                placeholder="Correo electrónico" style="max-width: 100%;">
            <span class="alert alert-warning" id="error_email_form_cont" style="display: none;">
                Rellena este campo.
            </span>
            <span class="alert alert-warning" id="error_email_form_cont_format" style="display: none;">
                Escribe un correo válido.
            </span>
        </div>

        <div class="popup_row">
            <label class="popup_label">Detalle</label>
            <textarea class="popup_input" row="3" name="detalle_form_cont" id="detalle_form_cont"
                placeholder="Detalle"></textarea>
            <span class="alert alert-warning" id="error_detalle_form_cont" style="display: none;">
                Rellena este campo.
            </span>
        </div>

        <button class="button button--color1" id="submit_form_cont">Enviar</button>
        <br>
        <div class="ejecutar_send_mail_form_cont alert alert-success" style="">Gracias, tu
            mensaje ha sido enviado. Te contactaremos a la brevedad.</div>
        <div class="cerrar_form_cont">X</div>
    </div>

    <script src="assets/js/index.js"></script>
    <?php include_once "aviso-campana-inactiva.php" ?>
    <?php include_once "footer.php" ?>

</main>