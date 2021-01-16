<form id="formaflight" name="formaflight" method="post" onsubmit="return validaPackAvion('formaflight',9,document.formaflight.anio_desde.value,document.formaflight.mes_desde.value,document.formaflight.dia_desde.value,document.formaflight.anio_hasta.value,document.formaflight.mes_hasta.value,document.formaflight.dia_hasta.value);"
		action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Flights/IResult.aspx?asoc=eaca">
		 <input Type="hidden" name="moneda" value="PE" />
		 <input Type="hidden" name="aerolinea" value="" />
		 <input Type="hidden" name="cabina" value="T" />
		 <input Type="hidden" name="conAjax" value="OFF" />
		 <input Type="hidden" name="termina" value="false" />
		 <input type="hidden" name="cont" value="yes" />
		 <input type="hidden" name="Package" value="YES" />
		 <input type="hidden" name="PackageType" value="SAV" />
		 <input type="hidden" name="wait"  value="1" />
		 <input type="hidden" name="ConResults" id="Hidden1" value="0" />
		 <input type="hidden" name="SoloHotel" id="Hidden2" value="1" />
		 <input Type="hidden" name="Idioma" id="Hidden3" value="ESP" />
		 <input type="hidden" name="Promos" value="" />
		 <input type="hidden" name="LastMin" value="" />
		 <input type="hidden" name="NightFree" value="" />
		 <input type="hidden" name="FOfechaFrom" id="FOfechaFrom" value="17-3-2008" readonly="1" onchange="FechaGet(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde)" />
		 <input type="hidden" name="FOfechaTo" id="FOfechaTo" value="24-3-2008" readonly="1" onchange="FechaGet(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta)" />
			<div class="spWidth">
			<span class="spTT">Tipo de Viaje:</span>
			<select name="TipoVuelo" id="bTipoVuelo" class="ComboP cbFlT" onchange="MuestraOcultaPorObj(this,'one','FlightReturn');">
				<option value="round" selected="selected">Viaje redondo</option>
				<option value="one">Viaje sencillo</option>
			</select>
			</div>
			<div class="spWidth spSp">
			 <span class="spMs">Origen:</span>
			 <input name="Leavingfrom" id="bLeavingfrom" class="inLv" value="Ciudad o Clave IATA" autocomplete="off" size="41" maxlength="120" onfocus="DfltIn(this,'Ciudad o Clave IATA');">
			 <input name="CodeAirport" id="bCodeAirport" type="hidden"  value="" size="41">
			</div>
			<div class="spWidth">
			 <span class="spMs">Destino:</span>
			 <input name="ciudades" id="bciudades" class="inLv" autocomplete="off" value="Ciudad o Clave IATA" size="41" onfocus="DfltIn(this,'Ciudad o Clave IATA');" alt="ajax.off">
			 <input name="Clav_ciudad" id="bClav_ciudad" type="hidden"  value="" size="10">
			</div>
			<div class="spWidth spB left spSp">
				<div>Fecha de Llegada:</div>
					<select name="anio_desde" onchange="javascript:fillMonthsSelect(document.formaflight.anio_desde.value, document.formaflight.mes_desde, document.formaflight.dia_desde, false);ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);" id="anio_desde" class="fad">
						<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
					</select>
					<select id="mes_desde" name="mes_desde" class="fmd" onchange="javascript:fillDaysSelect(document.formaflight.anio_desde.value, document.formaflight.mes_desde.value, document.formaflight.dia_desde, false);ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);"></select>
					<select id="dia_desde" name="dia_desde" class="fdd" onchange="javascript:ManualCambia(document.formaflight.FOfechaFrom,document.formaflight.anio_desde, document.formaflight.mes_desde, document.formaflight.dia_desde);"></select>
					
				</div>
			<br/>
<div id="FlightReturn" class="spWidth spB Left">
		<div>Fecha de Regreso:</div>
		<select name="anio_hasta" onchange="javascript:fillMonthsSelect(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta, document.formaflight.dia_hasta, false);ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="anio_hasta" class="fah">
			<option value="2008">2008</option>
					<option value="2009">2009</option>
					<option value="2010">2010</option>
		</select>
		<select name="mes_hasta" onchange="javascript:fillDaysSelect(document.formaflight.anio_hasta.value, document.formaflight.mes_hasta.value, document.formaflight.dia_hasta, false);ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="mes_hasta" class="fmh"></select>
		<select name="dia_hasta" onchange="javascript:ManualCambia(document.formaflight.FOfechaTo,document.formaflight.anio_hasta, document.formaflight.mes_hasta, document.formaflight.dia_hasta);" id="dia_hasta" class="fdh"></select>
		
</div>
<!--	INICIO ROOM #: [1] -->
<div class="spWidth spRmsX">
	<span class="spOt">Adultos</span><span class="spTtlRgt">Ni&ntilde;os</span><br />
	<input type="hidden" value="no" name="Adult_Only" />
	<input type="hidden" value="1" name="num_cuartos" />
	<span class="CuartosText">Pasajeros:</span>
	<select id="num_adultosF1" name="num_adultos" size="1" class="comboP spLft">
		<option value="1">1</option>
	</select>
	<select id="num_ninosF" name="num_ninos" size="1" onchange="javascript:FRB_ShowNinos1('formaflight',1)" class="comboP">
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
	</select>
</div>
<!--	FIN ROOM #: [1] -->
<div style="display: none;" id="DivTablaNinosF" class="tbNn"><span class="tbTtl">Edad de los Ni&ntilde;os</span>
	<div style="display: none;" id="DivTablaNinosF_1" class="dRooms sprRms">
		<select id="EdadNinoF1" name="EdadNino1" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
		<select id="EdadNinoF2" name="EdadNino2" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
		<select id="EdadNinoF3" name="EdadNino3" size="1" class="CmbEdNn">
			<option value="-1">-?-</option>
			<option value="0"><1</option>
		</select>
	</div>
	<input type="hidden" value="-1" name="EdadNino4" />
	<input type="hidden" value="-1" name="EdadNino5" />
	<input type="hidden" value="-1" name="EdadNino6" />
	<input type="hidden" value="-1" name="EdadNino7" />
	<input type="hidden" value="-1" name="EdadNino8" />
	<span class="note">Favor de especificar la edad de los Ni&ntilde;os (0 - 12 a&ntilde;os).</span>
</div>
<!-- FIN EDADES DE LOS Ni&ntilde;os # 1  -->
<div class="iFSearch">
<a target="_top" href="http://www.e-travelsolution.com.mx/Partners/Reservations/Flights/ISearch.aspx?asoc=eaca">M&aacute;s Opciones</a>
<input type="submit" name="Search" class="btn btn-primary" alt="Buscar" />
</div>
</form>