<?php include('header.php'); ?>

<main class="row allinsidehome" style="position: relative;">

    <section class="bienvenida">
        <div class="bienvenida__header">
            <img class="bienvenida__header logo" src="assets/images/logo-MEJ-w.svg" alt="Logo empresa">
            <img class="bienvenida__header logo" src="assets/images/ico-mis-facturas.svg" alt="Logo campaña">
        </div>
        <div class="bienvenida__mensaje">¡ÚLTIMO DÍA PARA REGISTRAR TUS FACTURAS!
        </div>
        <div class="bienvenida__titulo">Acumula $50 en facturas y participa por un<span
                style="display: block; font-weight: 600;">Espectacular NISSAN X-TRAIL E-POWER (con propulsión 100%
                eléctrica) + $10.000 en efectivo</span></div>
        <div style="width: 100%;display: inline-block;text-align: center;">
            <div class="btndivsoyn_home">
                <div class="label_exp_home">Soy nuev@ aquí</div><br />
                <a href="registro.php" style="text-decoration: none;">
                    <div class="reg_fact_home">Crea una cuenta</div>
                </a>
            </div>
            <div class="btndivyaten_home">
                <div class="label_exp_home">Ya tengo un usuario</div><br />
                <a href="login.php" style="text-decoration: none;">
                    <div class="reg_fact_home">Registra tus facturas</div>
                </a>
            </div>
        </div>
        <div style="width: 100%;display: inline-block;text-align: center;">
            <ul class="links_ul_home">
                <li class="act_vid">¿Cómo funciona?</li>
                <li class="mpbtnsh li_inter_links_ul_home">Mecánica & premios</li>
                <li class="ver_bases_legales">Términos y condiciones</li>
            </ul>
        </div>
        <div style="width: 100%;display: inline-block;text-align: center;">
            <ul class="links_ul_home_1">
                <li class="ver_form_cont">¿Dudas?</li>
                <li class="ver_form_cont" style="text-decoration: underline;">Escríbenos</li>
            </ul>
        </div>
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
    <div class="form_cont">
        <div class="form_cont_pres">Compártenos tus inquietudes. Con gusto las revisaremos y<br /> te responderemos
            lo antes posible.</div>
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
            <label>Correo</label>
            <input type="emial" name="email_form_cont" id="email_form_cont" placeholder="Correo electrónico"
                style="max-width: 100%;">
            <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                id="error_email_form_cont" style="display: none;">
                <span class="font-weight-semibold">Rellena este campo.</span>
            </div>
            <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                id="error_email_form_cont_format" style="display: none;">
                <span class="font-weight-semibold">Escribe un correo válido.</span>
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
    <div class="twologoshome">
        <img class="logomallhome" src="images/logo-MEJ-w.svg" alt="Img1">
        <img class="logomisfacturashome" src="images/ico-mis-facturas.svg" alt="Img1">
    </div>

    <div class="over_footer"><?php include "footer.php" ?></div>
</main>
<?php include "aviso-campana-inactiva.php" ?>
</body>
<style>
@media(max-width:560px) {
    .over_footer {
        margin-top: 35px;
    }
}
</style>
<script type="text/javascript">

</script>

</html>