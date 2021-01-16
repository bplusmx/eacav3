<div id="search-tours" class="static-tabs-content" style="display: none;">
     <form id="tours-form" name="formatour" method="post" action="/searchactivities/">
         <input type="hidden" name="GAcat" value="SearchTours">
         <input type="hidden" name="TOfechaFrom" id="TOfechaFrom" value="8-3-2014">
       <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
       <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
       <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
       <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
       <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
       <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
         <input type="hidden" name="ClaveDestino" id="ClaveDestino" value="0">
         <input type="hidden" name="wait" value="true">
         <input type="hidden" name="asoc" value="">
         <fieldset class="tour-box">
             <ul>
                 <li class="destiny-search">
                     <label for="ajtours">Destino / Nombre de la Actividad</label>
                     <input type="text" name="ajtours" value="" id="ajtours" class="icon-origin required ui-autocomplete-input" maxlength="120" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                     <input type="hidden" id="ajtoursh" value="" name="ajtoursh">
                 </li>
                 <li>
                     <label for="check-in-tours">Llegada</label>
                     <input type="text" id="check-in-tours" name="check-in-tours" class="icon-calendar hasDatepicker">
                 </li>
             </ul>
         </fieldset>
    <input type="hidden" name="Moneda" value="PE">
    <input type="hidden" name="MonedaPresenta" value="PE">
         <fieldset class="line-divider">
             <button type="submit" id="btnSubmit">
                 <span>Buscar</span>
             </button>
         </fieldset>
     </form>
</div>