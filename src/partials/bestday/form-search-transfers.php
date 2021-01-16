<div id="search-transfer" class="static-tabs-content" style="display: none;">
     <form id="transfer-form" name="formatransfers" method="post" action="/Traslados/">
         <input type="hidden" name="GAcat" value="SearchTransfers">
       <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
       <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
       <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
       <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
       <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
       <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
         <fieldset>
             <ul>
                 <li class="first">
                     <label for="type-transfer">Tipo de Traslado</label>
                     <select id="type-transfer" name="tipo_traslado">
                         <option value="R" selected="">Viaje Redondo</option>
                         <option value="L">Traslado al Hotel / Ferry</option>
                         <option value="S">Traslado al Aeropuerto / Terminal de Autobus</option>
                     </select>
                 </li>
                 <li class="destiny-search">
                     <label for="ajtraslados">Hotel</label>
                     <input type="text" name="ajtraslados" value="" id="ajtraslados" class="icon-hotel required ui-autocomplete-input" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input id="Clav_Hotel" class="required differentOf" data-other-reference="ajtraslados" type="hidden" value="" name="Clav_Hotel">
                 </li>
                 <li>
                     <ul>
                         <li>
                             <label for="check-in">Fecha de Llegada</label>
                             <input type="text" id="check-in-transfer" name="check-in-transfer" class="icon-calendar hasDatepicker">
                         </li>
                         <li class="last ">
                             <label for="check-out">Fecha de Salida</label>
                             <input type="text" id="check-out-transfer" name="check-out-transfer" class="icon-calendar-out hasDatepicker">
                         </li>
                     </ul>
                 </li>
             </ul>
         </fieldset>
         <fieldset>
             <ul class="roomshotel">
                 <li>
                     <label for="adultPackage">Adultos</label>
                      <select name="num_adultos" id="Adult" class="selectAdults no-adults">
                         <option value="1">1</option>
                         <option value="2" selected="selected">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                      </select>
                 </li>
                 <li>
                     <label for="KidsPackage">Niños (0-17)</label>
                     <select name="num_ninos" id="kid" class="selectKids">
                         <option value="0" selected="selected">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>
                         <option value="5">5</option>
                         <option value="6">6</option>
                         <option value="7">7</option>
                         <option value="8">8</option>
                         <option value="9">9</option>
                     </select>
                 </li>
             </ul>
         </fieldset>
    <input type="hidden" name="Moneda" value="PE">
    <input type="hidden" name="MonedaPresenta" value="PE">
         <fieldset class="line-divider">
             <button type="submit" id="btnSubmitTransfer">
                 <span>Buscar</span>
             </button>
         </fieldset>
     </form>
</div>