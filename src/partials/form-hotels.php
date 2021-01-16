<form method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca" 
    onsubmit="return validaFechas(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde.value, document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta.value);">
    <input type="hidden" name="HTfechaFrom" onchange="FechaGet(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde)" id="HTfechaFrom" />
    <input type="hidden" name="HTfechaTo" onchange="FechaGet(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta)" id="HTfechaTo" />
    <input type="hidden" value="PE" name="moneda" />
    <input type="hidden" value="ESP" name="Idioma" />
    <input type="hidden" name="Destino" id="Destino" />
    
    <div class="spWidth">
        Nombre del Hotel:<br />
        <input value="" maxlength="80" class="inLn form-control" name="Nombre" />
    </div>
    <div class="spWidth spB">
        <div>Fecha de Llegada:</div>
        <select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="anio_desdeHT" class="fad form-control">
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
        </select>
        <select name="mes_desde" onchange="javascript:fillDaysSelect(document.formahotel.anio_desde.value, document.formahotel.mes_desde.value, document.formahotel.dia_desde, false);ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="mes_desdeHT" class="fmd form-control"></select>
        <select name="dia_desde" onchange="javascript:ManualCambia(document.formahotel.HTfechaFrom,document.formahotel.anio_desde, document.formahotel.mes_desde, document.formahotel.dia_desde);" id="dia_desdeHT" class="fdd form-control"></select>

    </div>
    <div class="spWidth spB">
        <div>Fecha de Regreso:</div>
        <select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="anio_hastaHT" class="fah form-control">
            <option value="2008">2008</option>
            <option value="2009">2009</option>
            <option value="2010">2010</option>
        </select>
        <select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formahotel.anio_hasta.value, document.formahotel.mes_hasta.value, document.formahotel.dia_hasta, false);ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="mes_hastaHT" class="fmh form-control"></select>
        <select name="dia_hasta" onchange="javascript:ManualCambia(document.formahotel.HTfechaTo,document.formahotel.anio_hasta, document.formahotel.mes_hasta, document.formahotel.dia_hasta);" id="dia_hastaHT" class="fdh form-control"></select>

    </div>
    <div class="iFSearch">
        <a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca">M&aacute;s Opciones</a>
        <input type="submit" name="Search" class="btn btn-primary" alt="Buscar" />
    </div>
</form>