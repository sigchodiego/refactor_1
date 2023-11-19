<!DOCTYPE html>
<html lang="es">
<?php
include './header.php';
?>

<head>
</head>
<?php
if (isset($_SESSION['usuario'])) {
    
    ?>

<body>
    <?php //include './menu.php'; 
            ?>


    <div class="row allinside" style="text-align: center;position: relative;">
        <?php if ($acepto_term_promo == true) { ?>
        <div class="mpdiv">
            <img class="mpdivimg" src="images/mp_canje1.png" style="width: 100%;">
            <div class="cerrar_mp"
                style="text-align: center;cursor: pointer;position: absolute;right: -15px;font-family: MPB;font-size: 23px;background: #490097;color: #ffffff;border-radius: 50%;padding: 5px 10px 0px 10px;top: -15px;">
                X</div>
        </div>
        <div class="viddiv" style="z-index: 99999999999;">
            <div class="video-responsive-contenedor">
                <iframe class="video-responsive-src" id="iframevideo"
                    src="https://www.youtube.com/embed/VERqNF2k3Bo?autoplay=0&controls=0&vq=hd1080&hd=1&fmt=18&rel=0&showinfo=0&modestbranding=0"
                    frameborder="0" allowfullscreen></iframe>
                <div class="cerrar_vid"
                    style="text-align: center;cursor: pointer;position: absolute;right: -15px;font-family: MPB;font-size: 23px;background: #490097;color: #ffffff;border-radius: 50%;padding: 5px 10px 0px 10px;top: -15px;">
                    X</div>
            </div>
        </div>

        <div class="form_cont">
            <div style="font-family: MPR;text-align: center;font-size: 23px;color: #600000;margin-bottom: 25px;">
                Compártenos tus inquietudes. Con gusto las revisaremos y<br /> te responderemos lo antes posible.</div>
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
                    style="max-width: 100%;" value="<?php echo $email_usuario; ?>" readonly="">
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

        <?php include "cabecera_registrar_factura.php" ?>
        <div class="popup_registrar_factura">
            <div class="nombre_usuario_tablero">Registra tu factura</div>
            <img src="images/close-x.svg" class="close_x_rf cancelar_registrar">
            <form class="regitrar_factura" id="registrar_factura_form" action="./php/registrar_factura.php"
                method="POST" enctype="multipart/form-data" style="padding: 55px 110px 55px 110px;border-radius: 12px;">
                <input type="hidden" name="usuario_id" id="usuario_id" value="<?php echo $_SESSION['usuario_id']; ?>">
                <input type="hidden" name="passh" id="passh">
                <?php
                        
                        ?>
                <input type="hidden" name="f_p_p" id="f_p_p" value="<?php echo $f_p_p; ?>">
                <div class="fila_datos">
                    <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                        <label>No. factura</label>
                        <div class="expli_input_reg_fact">Ingresa una serie de 15 dígitos</div>
                        <input type="text" name="numero_factura" id="numero_factura" placeholder="Número de factura"
                            maxlength="15" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_numero_factura" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_numero_factura_length" style="display: none;">
                            <span class="font-weight-semibold">El número de factura debe ser de 15 dígitos.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_numero_factura_rare" style="display: none;">
                            <span class="font-weight-semibold">Solo números en este campo, por favor.</span>
                        </div>
                    </div>
                    <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                        <label>Local</label>
                        <div class="expli_input_reg_fact">Digita el nombre o # de RUC</div>
                        <select class="js-example-basic-single form-control" type="text" name="local" id="local"
                            placeholder="Local" style="height: 40px !important;">
                            <option value="">Digita el nombre o # de RUC</option>
                            <option value="1">
                                17XXXXXXXX001 | ABDC EFGH
                            </option>
                            <option value="1">
                                17XXXXXXXX001 | ABDC EFGH
                            </option>
                            <option value="1">
                                17XXXXXXXX001 | ABDC EFGH
                            </option>
                        </select>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_local" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                    </div>
                </div>

                <div class="fila_datos">
                    <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                        <label>Valor exacto de la factura</label>
                        <div class="expli_input_reg_fact">Ingresa el valor incluyendo el IVA</div>
                        <input type="number" name="valor" id="valor" placeholder="Valor exacto de la factura">
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_valor" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_valor_noesnumero" style="display: none;">
                            <span class="font-weight-semibold">Escribe un valor correcto.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_valor_valornegativo" style="display: none;">
                            <span class="font-weight-semibold">Escribe un valor positivo.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_valor_en_decimales" style="display: none;">
                            <span class="font-weight-semibold">No m&aacute;s de dos decimales.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_valor_muy_alto" style="display: none;">
                            <span class="font-weight-semibold">Valor muy alto.</span>
                        </div>
                    </div>
                    <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                        <label class="fechflab">Fecha de la factura</label>
                        <div class="expli_input_reg_fact">Facturas desde el
                            <?php echo $fe_in; ?>
                        </div>
                        <input type="date" name="fechacompra" id="fechacompra" min="<?php echo $fe_in; ?>"
                            max="<?php echo $fe_fi; ?>" placeholder="Fecha de compra en la factura:"
                            value="<?php echo $today; ?>">
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_fechacompra" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_fechacompra_malafecha" style="display: none;">
                            <span class="font-weight-semibold">Tu factura debe tener fecha desde el
                                <?php echo $fe_in; ?> hasta el
                                <?php echo $fe_fi; ?>.
                            </span>
                        </div>
                    </div>
                </div>


                <div class="divreg100x50" style="width: 50%;float: left;padding: 0 25px;">
                    <label class="fechflab">Forma de pago</label>
                    <div class="expli_input_reg_fact" style="margin-bottom:10px;display:none;">Si pagaste con Diners
                        Club recibes triple cupón.</div>
                    <div class="expli_input_reg_fact">Selecciona una opción</div>
                    <select type="text" name="forma_pago" id="forma_pago" placeholder="Forma de pago"
                        style="height: 40px !important;text-align-last: center;"
                        onchange="return mostrar_subir_vaucher()">
                        <option value="">Seleccione</option>

                        <option value="1">
                            Pago 1
                        </option>
                        <option value="1">
                            Pago 2
                        </option>
                        <option value="1">
                            Pago 3
                        </option>

                    </select>
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_forma_pago" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>
                <div class="documentera" style="width: 100%;float: left;padding: 0 25px;position: relative;">
                    <label for="documento_respaldo" class="labtsd" style="">Sube tu factura</label>
                    <div style="position: relative;display: inline-block;">
                        <label id="lab_sub_doc_resp_ch"
                            style="background: #ffffff;background-image: url(images/back-label-doc-resp.png);background-repeat: no-repeat;position: absolute;left: 0;background-size: contain;background-position: right;font-size: 14px !important;text-align: left;color: #8c8c8c;border-radius: 25px;padding: 15px 25px !important;">Seleccionar
                            documento</label>
                        <input type="file" class="form-control-file" id="documento_respaldo" name="documento_respaldo"
                            style="opacity: 0;">
                        <div class="expli_input_reg_fact" style="color: #95080b;font-size: 13px;">*Documento PDF o
                            imagen<br /> *Asegúrate de que sea legible</div>
                    </div>
                    <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                        id="error_documento_respaldo" style="display: none;">
                        <span class="font-weight-semibold">Rellena este campo.</span>
                    </div>
                </div>
                <div class="documentera" style="padding: 0 25px;">
                    <div class="divsubirvau" style="display: none;">
                        <label for="documento_vaucher" class="labtsd" style="margin-top: 25px;">Subir voucher
                            Diners</label>
                        <div style="position: relative;display: inline-block;">
                            <label id="lab_sub_vau_resp_ch"
                                style="background: #ffffff;background-image: url(images/back-label-vaucher.png);background-repeat: no-repeat;position: absolute;left: 0;background-size: contain;background-position: right;font-size: 14px !important;text-align: left;color: #8c8c8c;border-radius: 25px;padding: 13px 25px !important;">Seleccionar
                                documento</label>
                            <input type="file" class="form-control-file" id="documento_vaucher" name="documento_vaucher"
                                style="opacity: 0;max-width: 250px;">
                            <div class="expli_input_reg_fact" style="color: #95080b;font-size: 13px;">*Asegúrate de que
                                sea legible.<br /> *Aplica solo con tarjeta de crédito Diners. No débito.<br /> *Monto
                                mínimo de USD 50.</div>
                        </div>
                        <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                            id="error_vaucher" style="display: none;">
                            <span class="font-weight-semibold">Rellena este campo.</span>
                        </div>
                    </div>
                </div>
                <div style="text-align: center;width: 100%;display: inline-block;">
                    <button class="btnmi" id="submit_registrar_factura">Registrar</button>
                </div>
            </form>
        </div>
        <div style="width: 100%;display: inline-block;text-align: center;margin-bottom: 5px;position: relative;">
            <div class="nombre_usuario_tablero">
                <?php echo $user_name; ?>
            </div>
            <!--<div class="nueva_fact" style="position:absolute;font-size: 13px;right:0;cursor: pointer;top: 25px;display: inline-flex;align-items: center;">
                            <img class="reg_fac_tab" src="images/reg-fact-ic.png">
                        </div>-->
        </div>
        <div class="cont-tabs-facts-coup">
            <div id="mostrar_mis_facts"
                style="width: 50%;float:left;text-align: center;cursor: pointer;color: #ffffff;padding: 10px;">
                <!--<img src="images/btn-show-mf.svg" style="width: 100%;">-->
                <div class="btn-invoice btnSelectedActive">
                    Mis Facturas
                    <i class="fa fa-file-text-o" aria-hidden="true" style="margin-left: 10px;"></i>
                </div>
            </div>
            <div id="mostrar_mis_cups"
                style="width: 50%;float:left;text-align: center;cursor: pointer;color: #616160;padding: 10px;">
                <!--<img src="images/btn-show-mc.svg" style="width: 100%;">-->
                <div class="btn-coupons">
                    Mis Cupones
                    <i class="fa fa-ticket" aria-hidden="true" style="rotate: -45deg;margin-left: 15px;"></i>
                </div>
            </div>
        </div>
        <div>
            <div class="all_facts table_data_tablero">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 70%;">Local</th>
                                <th style="text-align: right;">Valor</th>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td style="text-align: right;">

                                </td>
                            </tr>

                            <tr>
                                <td>

                                </td>
                                <td style="text-align: right;">
                                    <div class="divinvraz"
                                        style="color: red;cursor: pointer;background: red;color: white;border-radius: 35px;padding: 5px 3px 4px 3px;text-align:center;font-size: 10px;text-align: center;max-width: 125px;width: 100%;float: right;">
                                        INVALIDADA</div>
                                    <div class="divinvrazoc"
                                        style="display: none;position: absolute;background: #ffffff;padding: 15px;width: 300px;height: 190px;top: 15px;left: 145px;color: #9a9a9a;border-radius: 10px;border: 1px solid #adadad;">
                                        <div class="cerrar_por_que"
                                            style="text-align: center;cursor: pointer;position: absolute;right: -15px;font-family: MPB;font-size: 23px;background: #490097;color: #ffffff;border-radius: 50%;padding: 5px 10px 0px 10px;top: -15px;">
                                            X</div>
                                        <div style="height: 145px;width: 100%;display: inline-block;overflow: auto;">
                                            <p style="white-space: pre-line;height: 135px;text-align: left;">
                                                <?php echo $rowfi[11]; ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="all_cups table_data_tablero" style="display: none;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <th style="width: 60%;">CUPÓN</th>
                                <th style="width: 100%;">ESTADO</th>
                                <th style="width: 100%;text-align: right;">INFO</th>
                            </tr>

                            <tr>
                                <td>
                                    <?php echo $row[6]; ?>
                                </td>
                                <td>
                                    <?php if ($row[7] == 1) {
                                                    echo 'DEPOSITADO';
                                                } else {
                                                    echo 'PENDIENTE';
                                                } ?>
                                </td>
                                <td style="text-align: right;">
                                    <div class="ver_mas_cupon">ver +</div>
                                    <div class="info_cupon">
                                        <div class="cerrar_info_cupon">X</div>
                                        <div style="white-space: pre-line;"><strong>
                                                <?php echo $nombre_camp; ?>
                                            </strong>
                                        </div>
                                        <?php if ($row[3] == $f_p_p) {
                                                        ?>
                                        <div><strong>CUPÓN
                                                <?php echo $f_p_p_nombre; ?>
                                            </strong></div>
                                        <?php
                                                    } ?>
                                        <div style="white-space: pre-line;">Nro. <span style="color: #17375b;">
                                                <?php echo $row[6]; ?>
                                            </span></div>
                                        <div style="white-space: pre-line;">Nombres:
                                            <?php echo $nombres_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;">Apellidos:
                                            <?php echo $apellidos_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;">Cédula:
                                            <?php echo $cedula_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;">Teléfono:
                                            <?php echo $telefono_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;">Dirección:
                                            <?php echo $direccion_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;">E-mail:
                                            <?php echo $email_usuario; ?>
                                        </div>
                                        <div style="white-space: pre-line;margin-top: 25px;font-size: 9px;">Promoción
                                            válida del
                                            <?php echo $fe_in ?> al
                                            <?php echo $fe_fi ?>. Sorteo
                                            <?php echo $fe_so ?>.<br /> Promoción sujeta a Reglamentos. Aplican
                                            condiciones.
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                                    }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="resumen">
            <div style="float: right;text-align: right;color: #999999">
                $
                <?php echo $total; ?><br />
                <?php echo $cupones; ?><br />$
                <?php echo $saldo; ?>
            </div>
            <div style="float: right;text-align: right;">Total: &nbsp;&nbsp;&nbsp; <br />Cupones:
                &nbsp;&nbsp;&nbsp;<br />Saldo a favor: &nbsp;&nbsp;&nbsp;</div>
        </div>

        <div style="width: 100%;display: inline-block;text-align: center;">
            <ul class="links_ul_home">
                <li class="ver_form_cont">Dudas y comentarios</li>
                <li class="li_inter_links_ul_home"><a href="perfil.php">Actualizar mis datos</a></li>
                <li><a href="./" style="text-decoration: none;">Cerrar sesión</a></li>
            </ul>
        </div>
        <?php } else { ?>

        <script>
        $(document).ready(function() {
            $('#myModal').modal('toggle');

            $('#btn_save_terms_promo_and_politics_mall').click(function() {
                var error_terms_promo = $('#error_terms_promo');
                if ($('#terms_promo_checkbox_id').is(':checked')) {
                    error_terms_promo.fadeOut(100);
                    $('#action_acceptance_terms_promoand_politics_mall').submit();
                } else {
                    error_terms_promo.fadeIn(200);
                    error_terms_promo.css('display', 'inline-block');
                }
            });

        });
        </script>

        <div class="should_acept" style="height: 400px;">
            <div class="modal" id="myModal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Hemos actualizado nuestros términos y condiciones</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                style="display: none;">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="display: inline-block">
                            <form id="action_acceptance_terms_promoand_politics_mall"
                                action="./php/action_acceptance_terms_promoand_politics_mall.php" method="POST">

                                <div class="acceptance_terms_promo_div" style="align-items: baseline;">
                                    <input type="checkbox" id="politica_privacidad_checkbox_id"
                                        name="politica_privacidad_checkbox" value="1">
                                    <label for="politica_privacidad_checkbox_id"
                                        style="text-align: left;font-size: 16px !important;line-height: 16px;margin:0;color:#3D335C;">Autorizo
                                        los tratamientos de mis datos personales a INVEDE, conforme con lo establecido
                                        en su <a href="./politica-de-privacidad.pdf" target="_blank"
                                            style="color: #6B2788; font-weight: bolder;font-size: 15px;text-decoration: underline;">política
                                            de privacidad</a>. En particular, acepto y autorizo recibir información y
                                        ofertas a través de plataformas de mensajería instantánea, email y/o redes
                                        sociales, y que mis datos personales sean comunicados a terceros únicamente para
                                        hacer posible esta y futuras promociones.</label>

                                </div>

                                <div class="acceptance_terms_promo_div">
                                    <input type="checkbox" name="terms_promo_checkbox" id="terms_promo_checkbox_id"
                                        value="1" required>
                                    <label for="terms_promo_checkbox_id"
                                        style="text-align: left;font-size: 16px !important;line-height: 16px;margin:0;color:#3D335C;">
                                        Al registrarme, acepto los <a href="./reglamento.pdf" target="_blank"
                                            style="color: #6B2788; font-weight: bolder;text-decoration: underline;font-size: 15px;">términos
                                            y condiciones</a> de la promoción.</label>
                                </div>
                                <div class="alert alert-warning alert-styled-left alert-dismissible alert-arrow-left mt-1"
                                    id="error_terms_promo" style="display: none;">
                                    <span class="font-weight-semibold">Debes aceptar los términos y condiciones de esta
                                        campaña para participar.</span>
                                </div>


                            </form>
                        </div>
                        <div class="modal-footer">
                            <a href="../"><button type="button" class="close_btn">Cancelar</button></a>
                            <button type="button" class="btnmi"
                                id="btn_save_terms_promo_and_politics_mall">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>
        <div class="over_footer">
            <?php include "footer.php" ?>
        </div>
    </div>
</body>
<script type="text/javascript">
$(function() {
    $('#preview_term').load('./terminos.html');
    $('.act_vid').click(function(e) {
        $('.viddiv').fadeIn(100);
    });
    $('.cerrar_vid').click(function() {
        var iframe = document.getElementById('iframevideo');
        $('.viddiv').fadeOut(100);
        var iframeSrc = iframe.src;
        iframe.src = iframeSrc;
    });

    $("#documento_respaldo").change(function() {
        $("#lab_sub_doc_resp_ch").text("Documento seleccionado");
        $("#lab_sub_doc_resp_ch").css("background", "#ffffff");
        $("#lab_sub_doc_resp_ch").css("background-image", "url(images/back-label-doc-resp.png)");
        $("#lab_sub_doc_resp_ch").css("background-repeat", "no-repeat");
        $("#lab_sub_doc_resp_ch").css("background-size", "contain");
        $("#lab_sub_doc_resp_ch").css("background-position", "right");
    });
    $("#documento_vaucher").change(function() {
        $("#lab_sub_vau_resp_ch").text("Documento seleccionado");
        $("#lab_sub_vau_resp_ch").css("background", "#ffffff");
        $("#lab_sub_vau_resp_ch").css("background-image", "url(images/back-label-vaucher.png)");
        $("#lab_sub_vau_resp_ch").css("background-repeat", "no-repeat");
        $("#lab_sub_vau_resp_ch").css("background-size", "contain");
        $("#lab_sub_vau_resp_ch").css("background-position", "right");
    });


    $('#pacificardsi').click(function() {
        $('.divsubirvau').fadeIn(100);
    });
    $('#pacificardno').click(function() {
        $('.divsubirvau').fadeOut(100);
    });
    $('.nueva_fact').click(function() {
        $('.popup_registrar_factura').fadeIn(200);
    });
    $('.cancelar_registrar').click(function() {
        $('.popup_registrar_factura').fadeOut(200);
    });
    $('#submit_registrar_factura').click(function(e) {

        e.preventDefault();

        var send = true;

        var numero_factura = $('#numero_factura');
        var error_numero_factura = $('#error_numero_factura');
        var error_numero_factura_length = $('#error_numero_factura_length');
        var error_numero_factura_rare = $('#error_numero_factura_rare');
        var guion = "-";
        if (numero_factura.val() === "") {
            error_numero_factura.fadeIn(400);
            error_numero_factura_length.fadeOut(400);
            error_numero_factura_rare.fadeOut(400);
            send = false;
        } else if (numero_factura.val().length !== 15) {
            error_numero_factura.fadeOut(400);
            error_numero_factura_rare.fadeOut(400);
            error_numero_factura_length.fadeIn(400);
            send = false;
        } else if (numero_factura.val().includes(guion) || isNaN(numero_factura.val())) {
            error_numero_factura.fadeOut(400);
            error_numero_factura_length.fadeOut(400);
            error_numero_factura_rare.fadeIn(400);
            send = false;
        } else {
            error_numero_factura.fadeOut(400);
            error_numero_factura_length.fadeOut(400);
            error_numero_factura_rare.fadeOut(400);
        }

        var local = $('#local');
        var error_local = $('#error_local');
        if (local.val() === "") {
            error_local.fadeIn(400);
            send = false;
        } else {
            error_local.fadeOut(400);
        }

        var menos = "-";
        var valor = $('#valor');
        var error_valor = $('#error_valor');
        var error_valor_noesnumero = $('#error_valor_noesnumero');
        var error_valor_valornegativo = $('#error_valor_valornegativo');
        var error_valor_en_decimales = $('#error_valor_en_decimales');
        var error_valor_muy_alto = $('#error_valor_muy_alto');
        var regexpvalor = /^\d+(\.\d{1,2})?$/;
        if (valor.val() === "") {
            error_valor.fadeIn(400);
            error_valor_noesnumero.fadeOut(400);
            error_valor_valornegativo.fadeOut(400);
            error_valor_en_decimales.fadeOut(400);
            error_valor_muy_alto.fadeOut(400);
            send = false;
        } else if (valor.val().includes(menos)) {
            error_valor.fadeOut(400);
            error_valor_noesnumero.fadeOut(400);
            error_valor_valornegativo.fadeIn(400);
            error_valor_en_decimales.fadeOut(400);
            error_valor_muy_alto.fadeOut(400);
            send = false;
        } else if (isNaN(valor.val())) {
            error_valor.fadeOut(400);
            error_valor_valornegativo.fadeOut(400);
            error_valor_noesnumero.fadeIn(400);
            error_valor_en_decimales.fadeOut(400);
            error_valor_muy_alto.fadeOut(400);
            send = false;
        } else if (regexpvalor.test(valor.val()) === false) {
            error_valor.fadeOut(400);
            error_valor_valornegativo.fadeOut(400);
            error_valor_noesnumero.fadeOut(400);
            error_valor_en_decimales.fadeIn(400);
            error_valor_muy_alto.fadeOut(400);
            send = false;
        } else if (valor.val() > 10000) {
            error_valor.fadeOut(400);
            error_valor_valornegativo.fadeOut(400);
            error_valor_noesnumero.fadeOut(400);
            error_valor_en_decimales.fadeOut(400);
            error_valor_muy_alto.fadeIn(400);
            send = false;
        } else {
            error_valor.fadeOut(400);
            error_valor_noesnumero.fadeOut(400);
            error_valor_valornegativo.fadeOut(400);
            error_valor_en_decimales.fadeOut(400);
            error_valor_muy_alto.fadeOut(400);
        }

        var fechacompra = $('#fechacompra');
        var error_fechacompra = $('#error_fechacompra');
        var error_fechacompra_malafecha = $('#error_fechacompra_malafecha');
        var ficamp = $('#ficamp');
        var ffcamp = $('#ffcamp');
        if (fechacompra.val() === "") {
            error_fechacompra_malafecha.fadeOut(400);
            error_fechacompra.fadeIn(400);
            send = false;
        } else if (Date.parse(fechacompra.val()) < Date.parse(ficamp.val()) || Date.parse(fechacompra
                .val()) > Date.parse(ffcamp.val()) || Date.parse(fechacompra.val()) === Date.parse(
                '0000-00-00')) {
            error_fechacompra.fadeOut(400);
            error_fechacompra_malafecha.fadeIn(400);
            send = false;
        } else {
            error_fechacompra.fadeOut(400);
            error_fechacompra_malafecha.fadeOut(400);
        }

        var forma_pago = $('#forma_pago');
        var error_forma_pago = $('#error_forma_pago');
        var error_vaucher = $('#error_vaucher');
        if (forma_pago.val() === "") {
            error_forma_pago.fadeIn(400);
            send = false;
        } else {
            error_forma_pago.fadeOut(400);
            if ($('#forma_pago').val() === $('#f_p_p').val() && $('#forma_pago').val() !== 'EFEC') {
                if (document.getElementById("documento_vaucher").files.length === 0) {
                    send = false;
                    error_vaucher.fadeIn(400);
                }
            }
        }

        var error_documento_respaldo = $('#error_documento_respaldo');
        if (document.getElementById("documento_respaldo").files.length === 0) {
            send = false;
            error_documento_respaldo.fadeIn(400);
        } else {
            error_documento_respaldo.fadeOut(400);
        }


        if (send === true) {
            $('#registrar_factura_form').submit();
        }
    });

    $('#mostrar_mis_cups').click(function() {
        $('.all_cups').fadeIn(100);
        $('.all_facts').fadeOut(200);
        $(".btn-invoice").toggleClass("btnSelectedActive");
        $(".btn-coupons").toggleClass("btnSelectedActive");
        // $('#mostrar_mis_facts').find('img').css('content', 'url(./images/btn-show-mf-.svg)');
        // $(this).find('img').css('content', 'url(./images/btn-show-mc-.svg)');
    });
    $('#mostrar_mis_facts').click(function() {
        $('.all_facts').fadeIn(100);
        $('.all_cups').fadeOut(200);
        // $(this).find('img').css('content', 'url(./images/btn-show-mf.svg)');
        $(".btn-coupons").toggleClass("btnSelectedActive");
        $(".btn-invoice").toggleClass("btnSelectedActive");
        // $('#mostrar_mis_cups').find('img').css('content', 'url(./images/btn-show-mc.svg)');
    });

    $('.divinvraz').click(function() {
        $(this).siblings('.divinvrazoc').fadeIn(100);
        $("html,body").animate({
            scrollTop: $('.all_facts').offset().top
        }, 500);
    });
    $('.cerrar_por_que').click(function() {
        $('.divinvrazoc').fadeOut(100);
    });
    $('.ver_mas_cupon').click(function() {
        $(this).siblings('.info_cupon').fadeIn(100);
    });
    $('.cerrar_info_cupon').click(function() {
        $('.info_cupon').fadeOut(100);
    });

});

function comprobar_si_forma_pago_seleccionada_es_la_premiada() {
    $.ajax({
        type: 'post',
        url: './php/traer_forma_de_pago_premiada.php',
        dataType: 'json',
        success: function(forma_pago_premiada) {
            $('#form0').fadeOut(100);
            $('#form1').fadeIn(100);
            if (forma_pago_premiada === $('#forma_pago').val()) {
                $('.divsubirvau').fadeIn(100);
            } else {
                $('.divsubirvau').fadeOut(100);
            }
        }

    });
    return false;
}

function mostrar_subir_vaucher() {

    if ($('#forma_pago').val() === $('#f_p_p').val() && $('#forma_pago').val() !== 'EFEC') {
        $('.divsubirvau').fadeIn(100);
    } else {
        $('.divsubirvau').fadeOut(100);
    }

}




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
        $('.ejecutar_send_mail_form_cont').load('enviar_mail_form_cont.php?nombre=' + nombre + '&email=' +
            email + '&asunto=' + asunto + '&detalle=' + detalle);
        nombre_form_cont.val("");
        asunto_form_cont.val("");
        detalle_form_cont.val("");
    }

});

// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
<style>
.footer {
    margin-top: 15px;
}

.cabecera>div {
    max-width: 600px !important;
    width: 100% !important;
    justify-content: space-between !important;
}

.cabecera .nueva_fact_cabecera {
    margin: 0;
}

.row.allinside {
    background-image: url(images/bg-registrar-factura.jpg);
}

@media(max-width: 767px) {
    .row.allinside {
        background-image: url(images/back-no-home-user-mob.jpg);
    }
}
</style>

</html>
<?php
} else {
    ?>
<meta http-equiv="refresh" content="0; url=./login.php">
<?php
}