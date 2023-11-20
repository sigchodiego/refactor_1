<?php
// require_once("php/conexion.php");

$dataCampaign = array();
// Obtener la fecha actual en formato 'Y-m-d'
$today = date('Y-m-d');

$dias = array(
    "Monday" => "lunes",
    "Tuesday" => "martes",
    "Wednesday" => "mi&eacute;rcoles",
    "Thursday" => "jueves",
    "Friday" => "viernes",
    "Saturday" => "s&aacute;bado",
    "Sunday" => "domingo"
);

$meses = array(
    "January" => "enero",
    "February" => "febrero",
    "March" => "marzo",
    "April" => "abril",
    "May" => "mayo",
    "June" => "junio",
    "July" => "julio",
    "August" => "agosto",
    "September" => "septiembre",
    "October" => "octubre",
    "November" => "noviembre",
    "December" => "diciembre"
);

// $sqlCampaign = "SELECT * FROM prmencpromo";
// $resultCampaign = mysqli_query($enlace, $sqlCampaign);
// while ($row = $resultCampaign->fetch_row()) {
//     $dataCampaign = array(
//     "name" => $row[1],
//     "start" => $row[2],
//     "end" => $row[3],
//     "raffle" => $row[8],
//     );    
// }

$dataCampaign = array(
    "name" => 'Campaña',
    "start" => '12-12-1212',
    "end" => '12-12-1212',
    "raffle" => '12-12-1212',
);

// Comprobar si la fecha actual se encuentra dentro del rango de fechas
//if (!($today >= $dataCampaign["start"] && $today <= $dataCampaign["end"])) {
    
    function dateFormatCampaign($dateCampaign, $arrDays, $arrMonths){
        $newDate = $dateCampaign;
        $getDayLabel= date("l", strtotime($newDate));
        $getMonthLabel = date("F", strtotime($newDate));
        $getDayNumber = date("d", strtotime($newDate));
        $getYearNumber = date("Y", strtotime($newDate));
        
        return $arrDays[$getDayLabel]." ".$getDayNumber." de ".$arrMonths[$getMonthLabel]." de ".$getYearNumber;
    }
    
    ?>

<div class="cmej-modal-nocampaign showModal">
    <div class="cmej-modal-nocampaign-body popup">
        <h3 class="title">Estimado usuario</h3>
        <p class="text">El canje de cupones culmin&oacute; el
            <?php echo dateFormatCampaign($dataCampaign["end"], $dias, $meses); ?>
            y el sorteo se realizar&aacute; el
            <?php echo dateFormatCampaign($dataCampaign["raffle"], $dias, $meses); ?>. Para m&aacute;s
            informaci&oacute;n vis&iacute;tanos en:</p>
        <div class="social-links">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                facebook.com/</a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                instagram</a>
        </div>
        <span class="cmej-modal-close-btn"><i class="fa fa-times" aria-hidden="true"></i></span>
    </div>
</div>

<style>
.cmej-modal-nocampaign {
    position: fixed;
    background-color: #000000ad;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
    opacity: 0;
    transition: all 1s ease-in-out;
    display: flex;
}

.cmej-modal-nocampaign.showModal {
    opacity: 1;
}



.cmej-modal-nocampaign-body p:first-child {
    font-size: 30px;
    font-weight: bold;
    margin-bottom: 25px;
}
</style>

<script>
document.querySelector(".cmej-modal-close-btn").addEventListener("click", function() {
    document.querySelector(".cmej-modal-nocampaign").classList.remove("showModal");
    setTimeout(function() {
        document.querySelector(".cmej-modal-nocampaign").style.display = "none";
    }, 1200);
});
</script>

<?php
//}