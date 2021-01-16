<form role="form" method="get" action="http://www.e-travelsolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca">
    <input type="hidden" name="GAcat" value="SearchHotels">
  <input type="hidden" name="dia_desde" id="dayArrival" class="dayArrival" value="8">
  <input type="hidden" name="mes_desde" id="monthArrival" class="monthArrival" value="3">
  <input type="hidden" name="anio_desde" id="yearArrival" class="yearArrival" value="2014">
  <input type="hidden" name="dia_hasta" id="dayDeparture" class="dayDeparture" value="12">
  <input type="hidden" name="mes_hasta" id="monthDeparture" class="monthDeparture" value="3">
  <input type="hidden" name="anio_hasta" id="yearDeparture" class="yearDeparture" value="2014">
    <input type="hidden" name="asoc" value="eaca">
    <input type="hidden" name="Destino" value="1">
    <input type="hidden" name="num_cuartos" id="quantity-room" value="1">
    <input type="hidden" name="num_adultos" id="adult_1-room" value="2">
    <input type="hidden" name="num_ninos" id="kid_1" value="0">
    <input type="hidden" name="Moneda" value="PE">
    <input type="hidden" name="MonedaPresenta" value="PE">
    
    <div class="control-group">
        <label for="check-inH" class="control-label">Llegada</label><br>
        <div class="input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
            <input type="text" id="check-inH" name="check-inH" class="icon-calendar hasDatepicker form-control" />
        </div>        
    </div>
    <div class="control-group">
        <label for="check-outH">Salida</label><br>
        <div class="input-group">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-calendar"></span>
            </span>
            <input type="text" id="check-outH" name="check-outH" class="icon-calendar-out hasDatepicker form-control">
        </div>        
    </div>
    <fieldset class="line-divider">
        <button type="submit" id="btnSubmitHotels" class="btn btn-primary btn-lg">Buscar Hoteles</button>
    </fieldset>
</form>