<div id="search-cars" class="static-tabs-content" style="display: none;">
     <form id="cars-form" name="formaCars" method="post" action="/Renta-de-Autos/">
         <input type="hidden" name="GAcat" value="SearchCars">
       <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
       <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
       <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
       <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
       <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
       <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
         <input type="hidden" name="CarfechaFrom" id="CarfechaFrom" value="8-3-2014" readonly="readonly">
         <input type="hidden" name="CarfechaTo" id="CarfechaTo" value="12-3-2014" readonly="readonly">
         <fieldset>
             <ul>
                 <li class="destiny-search">
                     <label for="ajEntregaEn">Ciudad de Entrega:</label>
                     <input type="text" name="ajEntregaEn" value="" id="ajEntregaEn" class="icon-origin required ui-autocomplete-input" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input id="fEntregaEn" class="required differentOf" data-other-reference="ajEntregaEn" type="hidden" value="" name="fEntregaEn">
                     <input id="EntregaEn" type="hidden" value="" name="EntregaEn">
                     <input id="Pais_Sucursal_PickUp" type="hidden" value="" name="Pais_Sucursal_PickUp">
                 </li>
                 <li>
                     <ul>
                         <li>
                             <label for="check-in-cars">Entrega</label>
                             <input type="text" id="check-in-cars" name="check-in-cars" class="icon-calendar hasDatepicker">
                         </li>
                         <li>
                             <label for="time-pick">Horario</label>
                             <select id="time-pick" name="Hora_Entrega">
                                  <option value="0">12:00 AM</option>
                                  <option value="1">01:00 AM</option>
                                  <option value="2">02:00 AM</option>
                                  <option value="3">03:00 AM</option>
                                  <option value="4">04:00 AM</option>
                                  <option value="5">05:00 AM</option>
                                  <option value="6">06:00 AM</option>
                                  <option value="7">07:00 AM</option>
                                  <option value="8" selected="">08:00 AM</option>
                                  <option value="9">09:00 AM</option>
                                  <option value="10">10:00 AM</option>
                                  <option value="11">11:00 AM</option>
                                  <option value="12">12:00 PM</option>
                                  <option value="13">01:00 PM</option>
                                  <option value="14">02:00 PM</option>
                                  <option value="15">03:00 PM</option>
                                  <option value="16">04:00 PM</option>
                                  <option value="17">05:00 PM</option>
                                  <option value="18">06:00 PM</option>
                                  <option value="19">07:00 PM</option>
                                  <option value="20">08:00 PM</option>
                                  <option value="21">09:00 PM</option>
                                  <option value="22">10:00 PM</option>
                                  <option value="23">11:00 PM</option>
                             </select>
                         </li>
                     </ul>
                 </li>
             </ul>
         </fieldset>
         <fieldset>
             <ul>
                 <li class="destiny-search">
                     <label for="ajDevuelveEn">Ciudad de Devolución</label>
                     <input type="text" name="ajDevuelveEn" value="(misma ciudad de entrega)" id="ajDevuelveEn" maxlength="120" class="icon-origin placeholder ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input id="fDevuelveEn" type="hidden" value="" name="fDevuelveEn">
                     <input id="DevuelveEn" type="hidden" value="" name="DevuelveEn">
                 </li>
                 <li>
                     <ul>
                         <li>
                             <label for="check-out-cars">Devolución</label>
                             <input type="text" id="check-out-cars" name="check-out-cars" class="icon-calendar-out hasDatepicker">
                         </li>
                         <li>
                             <label for="time-return-car">Horario</label>
                             <select id="time-return-car" name="Hora_Devolucion">
                                  <option value="0">12:00 AM</option>
                                  <option value="1">01:00 AM</option>
                                  <option value="2">02:00 AM</option>
                                  <option value="3">03:00 AM</option>
                                  <option value="4">04:00 AM</option>
                                  <option value="5">05:00 AM</option>
                                  <option value="6">06:00 AM</option>
                                  <option value="7">07:00 AM</option>
                                  <option value="8" selected="">08:00 AM</option>
                                  <option value="9">09:00 AM</option>
                                  <option value="10">10:00 AM</option>
                                  <option value="11">11:00 AM</option>
                                  <option value="12">12:00 PM</option>
                                  <option value="13">01:00 PM</option>
                                  <option value="14">02:00 PM</option>
                                  <option value="15">03:00 PM</option>
                                  <option value="16">04:00 PM</option>
                                  <option value="17">05:00 PM</option>
                                  <option value="18">06:00 PM</option>
                                  <option value="19">07:00 PM</option>
                                  <option value="20">08:00 PM</option>
                                  <option value="21">09:00 PM</option>
                                  <option value="22">10:00 PM</option>
                                  <option value="23">11:00 PM</option>
                             </select>
                         </li>
                     </ul>
                 </li>
             </ul>
         </fieldset>
    <input type="hidden" name="Moneda" value="PE">
    <input type="hidden" name="MonedaPresenta" value="PE">
         <fieldset class="line-divider">
             <button type="submit" id="btnSubmitCars">
                 <span>Buscar</span>
             </button>
         </fieldset>
     </form>
</div>