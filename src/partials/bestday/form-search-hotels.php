<form id="hotels-form" name="formahotel" method="get" action="">
    <input type="hidden" name="GAcat" value="SearchHotels">
  <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
  <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
  <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
  <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
  <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
  <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
    <input type="hidden" name="asoc" value="eaca">
    <input type="hidden" name="cadena" id="fCadena" value="">
    <fieldset class="schedule">
        <ul>
            <li class="destiny-search">
                <label for="ajhoteles">Destino / Hotel</label>
                <input type="text" name="ajhoteles" value="" id="ajhoteles" class="icon-hotel required ui-autocomplete-input ui-corner-all" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true" mouseev="true" keyev="true">
                <input id="ajDestino" class="required differentOf linked" data-other-reference="ajhoteles" data-value="0" type="hidden" value="" name="Destino">
                <input id="ajCiudad" type="hidden" class="required differentOf linked" data-other-reference="ajhoteles" data-value="0" value="" name="Ciudad">
                <input id="ajHotel" type="hidden" class="required differentOf linked" data-other-reference="ajhoteles" data-value="0" value="" name="ajHotel">
                <input id="ClavDestino" type="hidden" value="0" name="ClavDestino">
                <input id="ClavCiudad" type="hidden" value="" name="ClavCiudad">
            </li>
            <li>
                <ul>
                    <li><label for="check-inH">Llegada</label><input type="text" id="check-inH" name="check-inH" class="icon-calendar hasDatepicker"></li>
                    <li class="last"><label for="check-outH">Salida</label><input type="text" id="check-outH" name="check-outH" class="icon-calendar-out hasDatepicker"></li>
                </ul>
            </li>
        </ul>
    </fieldset>
    <fieldset class="roomshotel">
        <ul>
            <li>
            <label for="quantity-room">Cuartos</label>
            <select name="num_cuartos" id="quantity-room" class="room">
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </li>
            <li class="guest-table">
            <table class="huespedes" id="rooms-table" title="ages">
                <thead>
                    <tr>
                        <th></th>
                        <th>Adultos</th>
                        <th>Niño (0-17)</th>
                    </tr>
                </thead>
                <tbody><tr id="hab_1" class="no-rooms"><th></th><td><select name="num_adultos" id="no-adult_1" title="Adultos" class="no-adults"><option value="1">1</option><option value="2" selected="">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option></select></td><td><select name="num_ninos" title="Niños" id="kid_1" class="no-kids"><option value="0" selected="">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option></select></td></tr></tbody>
            </table>
            </li>
        </ul>
    </fieldset>
    <div class="box-edades" id="kidsAgesHotel" style="display: none;">
        <h3 id="tittleAges">Edades de los niños (0-17)</h3>
        <div class="content-ages"><fieldset class="roomshotel rooms-select divRowAge_1"><p>Habitación 1</p> <ul id="ul_1"></ul></fieldset></div>
    </div>
<input type="hidden" name="Moneda" value="PE">
<input type="hidden" name="MonedaPresenta" value="PE">
    <fieldset class="line-divider">
        <button type="submit" id="btnSubmitHotels" class="btn btn-primary">Buscar</button>
    </fieldset>
</form>