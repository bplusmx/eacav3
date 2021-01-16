<form id="formapackage" name="formapackage" method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Packages/IResult.aspx?asoc=eaca"
    onsubmit="return validaPackAvion('formapackage',9,document.formapackage.anio_desde.value,document.formapackage.mes_desde.value,document.formapackage.dia_desde.value,document.formapackage.anio_hasta.value,document.formapackage.mes_hasta.value,document.formapackage.dia_hasta.value);">
    <input type="hidden" value="PE" name="moneda" />
    <input type="hidden" value="ESP" name="Idioma" id="Idioma" />
    <input Type="hidden" name="conAjax" value="OFF" />
    <input Type="hidden" name="termina" value="false" />
    <input type="hidden" name="PKfechaFrom" id="PKfechaFrom" onchange="FechaGet(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde)" />
    <input type="hidden" name="PKfechaTo" id="PKfechaTo" onchange="FechaGet(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta)" />
    <div class="spWidth">
        <span class="spMs">Origen:</span>
        <input name="Leavingfrom" id="Leavingfrom" class="inLv" value="Ciudad o Clave IATA"
            autocomplete="off" maxlength="120" size="41" onfocus="DfltIn(this,'Ciudad o Clave IATA');" />
    </div>
    <div class="spWidth">
        <span class="spMs">Destino:</span>
        <select class="cmbDst" name="ciudades" id="ciudades">
            <option style="width:150px;" value="">Selecciona un Destino</option>
            <option value="">---------------------</option>
        </select>
    </div>
    <div class="spWidth spB left spSp">
        <div>Fecha de Llegada:</div>
        <select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);" id="anio_desdeF" class="fad">
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
        </select>
        <select id="mes_desdeF" name="mes_desde" class="fmd" onchange="javascript:fillDaysSelect(document.formapackage.anio_desde.value, document.formapackage.mes_desde.value, document.formapackage.dia_desde, false);ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>
        <select id="dia_desdeF" name="dia_desde" class="fdd" onchange="javascript:ManualCambia(document.formapackage.PKfechaFrom,document.formapackage.anio_desde, document.formapackage.mes_desde, document.formapackage.dia_desde);"></select>

    </div>
    <div class="spWidth spB left">
        <div>Fecha de Regreso:</div>
        <select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="anio_hastaF" class="fah">
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
        </select>
        <select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formapackage.anio_hasta.value, document.formapackage.mes_hasta.value, document.formapackage.dia_hasta, false);ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="mes_hastaF" class="fmh"></select>
        <select name="dia_hasta" onchange="javascript:ManualCambia(document.formapackage.PKfechaTo,document.formapackage.anio_hasta, document.formapackage.mes_hasta, document.formapackage.dia_hasta);" id="dia_hastaF" class="fdh"></select>

    </div>
    <div class="spWidth spRms">
        <span>Cuartos:</span>
        <select name="num_cuartos" size="1" class="comboP" onchange="javascript:FRB_ShowRoom('formapackage')">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
    </div>
    <!--	INICIA Cuarto #: [1] -->
    <div class="spWidth spRmsX">
        <span class="spOt">Adultos</span><span class="spTtlRgt">Ni&ntilde;os</span><br />
        <input type="hidden" value="no" name="Adult_Only" />
        <span class="CuartosText">Cuarto 1:</span>
        <select id="num_adultos1" name="num_adultos" size="1" class="comboP spLft">
            <option value="1">1</option>
        </select>
        <select id="num_ninos" name="num_ninos" size="1" onchange="javascript:FRB_ShowNinos('formapackage',1)" class="comboP">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <!--	FIN Cuarto #: [1] -->
    <div style="display: none;" class="spLftRm2" id="DivHab_2">
        <span class="CuartosText">Cuarto 2:</span>
        <select id="num_adultos_2" name="num_adultos_2" size="1" class="comboP spLft">
            <option value="0">0</option>
        </select>
        <select id="num_ninos_2" name="num_ninos_2" size="1" onchange="javascript:FRB_ShowNinos('formapackage',2)" class="comboP">
            <option value="0">0</option>
        </select>
    </div>
    <!--	FIN Cuarto #: [2] -->
    <div style="display: none;" id="DivTablaNinos" class="tbNn"><span class="tbTtl">Edad de los Ni&ntilde;os</span>
        <div style="display: none;" id="DivTablaNinos_1" class="dRooms sprRms">
            <span class="RmNm">Cuarto 1:</span>
            <select id="EdadNino1" name="EdadNino1" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
            </select>
            <select id="EdadNino2" name="EdadNino2" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
            </select>
            <select id="EdadNino3" name="EdadNino3" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <input type="hidden" value="-1" name="EdadNino4" />
            <input type="hidden" value="-1" name="EdadNino5" />
            <input type="hidden" value="-1" name="EdadNino6" />
            <input type="hidden" value="-1" name="EdadNino7" />
            <input type="hidden" value="-1" name="EdadNino8" />
        </div>
        <div style="display: none;" id="DivTablaNinos_2" class="dRooms">
            <span class="RmNm">Cuarto 2:</span>
            <select id="EdadNino1_2" name="EdadNino1_2" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
            </select>
            <select id="EdadNino2_2" name="EdadNino2_2" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
            </select>
            <select id="EdadNino3_2" name="EdadNino3_2" size="1" class="CmbEdNn">
                <option value="-1">-?-</option>
                <option value="0"><1</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
            <input type="hidden" value="-1" name="EdadNino4_2" />
            <input type="hidden" value="-1" name="EdadNino5_2" />
            <input type="hidden" value="-1" name="EdadNino6_2" />
            <input type="hidden" value="-1" name="EdadNino7_2" />
            <input type="hidden" value="-1" name="EdadNino8_2" />
        </div>
    </div>
    <div class="iFSearch"  style="margin-top:2px;">
        <a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Packages/ISearch.aspx?asoc=eaca">M&aacute;s Opciones</a>
        <input type="image" src="/Partners/ResBox/_lib/Img/btnBuscar.gif" name="Search" class="botonSearch" alt="Buscar" onmouseover="this.src='/Partners/ResBox/_lib/Img/btnBuscar_Ov.gif';" onmouseout="this.src='/Partners/ResBox/_lib/Img/btnBuscar.gif';" />
    </div>
</form>