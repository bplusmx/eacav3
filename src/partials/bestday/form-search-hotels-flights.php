<div id="search-hotel-flight" class="static-tabs-content" style="display: none;">
     <form id="package-form" name="formapackage" method="get" action="/Paquetes/Resultados/">
         <input type="hidden" name="GAcat" value="SearchPackages">
         <input type="hidden" name="wait" value="true">
         <input type="hidden" name="PackageType" id="PackageType" value="HTAV">
         <input type="hidden" name="Package" value="YES">
         <input type="hidden" name="asoc" value="">
         <input type="hidden" name="pBAereopuerto_Destino" value="">
         <input type="hidden" name="TipoVuelo" value="round" id="TipoVuelo">
       <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
       <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
       <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
       <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
       <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
       <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
         <fieldset>
             <ul>
                 <li class="destiny-search">
                     <label for="Leavingfrom">Origen</label>
                     <input type="text" name="Leavingfrom" value="" id="Leavingfrom" class="icon-origin required ui-autocomplete-input" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input type="hidden" class="required" data-other-reference="Leavingfrom" value="" name="CodeAirport" id="bCodeAirport">
                 </li>
                 <li class="destiny-search">
                     <label for="ciudades">Destino</label>
                     <input type="text" name="ciudades" id="ciudades" value="" class="icon-origin required ui-autocomplete-input" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input id="CodeAirportArrive" class="required uneqTo" data-other-reference="ciudades" type="hidden" data-second-input="#bCodeAirport" value="" name="CodeAirportArrive">
                     <input id="Destino" type="hidden" name="Destino" value="0">
                     <input id="Clav_Ciudad" type="hidden" name="Clav_Ciudad" value="">
                 </li>
                 <li>
                     <ul>
                         <li>
                             <label for="check-in-package">Llegada</label>
                             <input type="text" class="icon-calendar hasDatepicker" name="check" id="check-in-package">
                         </li>
                         <li class="last">
                             <label for="check-out-package">Salida</label>
                             <input type="text" class="icon-calendar-out hasDatepicker" name="check" id="check-out-package">
                         </li>
                     </ul>
                 </li>
             </ul>
         </fieldset>
         <fieldset>
             <span class="switchAcordeon">Preferencias Avanzadas<img class="arrows" src="//images.bestday.com/_lib/images/bestday/sprite.gif" alt="Preferencias Avanzadas"> </span>
             <ul class="containerToSwitch">
                 <li class="check-direct-fly">
                     <label for="direct-flight" class="check-direct"><input type="checkbox" id="direct-flight" name="direct">Vuelos Directos</label>
                 </li>
                 <li class="timeon-fly">
                     <ul>
                         <li>
                             <label for="time-departure-flight">Hora de salida</label>
                                 <select id="time-departure-flight" name="FromTime">
                                     <option value="" selected="">Cualquier</option>
                                     <option value="MO">Mañana</option>
                                     <option value="AF">Tarde</option>
                                     <option value="EV">Noche</option>
                                 </select>
                         </li>
                         <li class="inputs-return">
                             <label for="time-return-flight">Hora de regreso</label>
                                 <select id="time-return-flight" name="ToTime">
                                     <option value="" selected="">Cualquier</option>
                                     <option value="MO">Mañana</option>
                                     <option value="AF">Tarde</option>
                                     <option value="EV">Noche</option>
                                 </select>
                         </li>
                     </ul>
                 </li>
                 <li>
                     <label for="type-passenger-flight">Cabina</label>
                     <select id="type-passenger-flight" name="cabina">
                         <option value="0" selected="">Sin Preferencia</option>
                         <option value="T">Turista / Económica</option>
                         <option value="B">Ejecutiva / Bussines</option>
                         <option value="A">Primera Clase</option>
                     </select>
                 </li>
                 <li class="avdMini">
                     <label for="airline-name-flight">Aerolínea</label>
                     <select id="airline-name-flight" name="aerolinea">
                         <option value="">Todas las Aerolíneas</option>
                         <option value="4O">Interjet</option>
                         <option value="5Q">Buquebus</option>
                         <option value="AA">American Airlines</option>
                         <option value="AC">Air Canada</option>
                         <option value="AD">Azul</option>
                         <option value="AF">Air France</option>
                         <option value="AM">Aeromexico</option>
                         <option value="AR">Aerolineas Argentinas</option>
                         <option value="AS">Alaska Airlines</option>
                         <option value="AU">Austral Lineas Aereas</option>
                         <option value="AV">Avianca</option>
                         <option value="AZ">Alitalia</option>
                         <option value="B6">Jet Blue</option>
                         <option value="BA">British Airways</option>
                         <option value="C7">Aerocontinente Chile</option>
                         <option value="CM">Copa Airlines</option>
                         <option value="CO">Continental</option>
                         <option value="DL">Delta Air Lines</option>
                         <option value="EK">Emirates Airlines</option>
                         <option value="EQ">Transportes Aereos Militates Ecuat</option>
                         <option value="ET">Ethiopian Airlines</option>
                         <option value="EY">Etihad Airways</option>
                         <option value="F9">Frontier Airlines</option>
                         <option value="FL">Airtran Airways</option>
                         <option value="G3">Gol</option>
                         <option value="H2">Sky Airlines</option>
                         <option value="HA">Hawaiian Airlines</option>
                         <option value="I2">MUNICH</option>
                         <option value="IB">Iberia Airlines</option>
                         <option value="JJ">TAM Linhas Aéreas</option>
                         <option value="JL">Japan Airlines</option>
                         <option value="JM">Air Jamaica</option>
                         <option value="KE">Korean Air Lines</option>
                         <option value="KL">KLM</option>
                         <option value="LA">LAN Airlines</option>
                         <option value="LH">Lufthansa</option>
                         <option value="LP">LanPeru</option>
                         <option value="LR">LACSA</option>
                         <option value="LX">Swiss</option>
                         <option value="LY">El Al Israel Airlines Limited</option>
                         <option value="MP">Martinair</option>
                         <option value="NH">All Nippon Airways</option>
                         <option value="NK">Spirit Airlines</option>
                         <option value="NW">Northwest</option>
                         <option value="O6">Avianca</option>
                         <option value="OZ">Asiana Air</option>
                         <option value="P1">PUBLIC CHARTERS</option>
                         <option value="P3">PASSAREDO</option>
                         <option value="PU">PLUNA</option>
                         <option value="QF">Qantas Airways Ltd</option>
                         <option value="QR">Qatar Airways</option>
                         <option value="SR">Swiss Air Transport Co Ltd</option>
                         <option value="SY">Sun Country Airlines</option>
                         <option value="T4">Trip</option>
                         <option value="TA">TACA</option>
                         <option value="TK">Turkish Airlines </option>
                         <option value="TP">Tap Air Portugal</option>
                         <option value="UA">United Airlines</option>
                         <option value="UP">Bahamasair</option>
                         <option value="US">US Airways</option>
                         <option value="UX">Air Europa</option>
                         <option value="VB">VivaAerobus</option>
                         <option value="VW">Aeromar</option>
                         <option value="VY">Vueling Airlines</option>
                         <option value="WH">Webjet</option>
                         <option value="WS">Westjet Airlines Ltd</option>
                         <option value="Y4">Volaris</option>
                     </select>
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
         <div>
         </div>
         <fieldset class="line-divider">
             <button type="submit" id="btnSubmitPackage">
                 <span>Buscar</span>
             </button>
         </fieldset>
     </form>
</div>