<form method="post" action="http://www.e-TravelSolution.com.mx/Partners/Reservations/Hotels/List.aspx?asoc=eaca">
    <!-- Destino Acapulco -->
    <input type="hidden" name="Destino" id="Destino" value="1">
    <input type="hidden" name="Moneda" id="Moneda" value="PE">
    <input type="hidden" name="Idioma" id="Idioma" value="ESP">
    <label for="Nombre">
        Nombre del Hotel
        <input value="" maxlength="80" class="form-control" name="Nombre">
    </label>
    
    <div>
        <div>Fecha de Llegada:</div>
        <select name="anio_desde" id="anio_desdeHT">
            <option value="2014">2014</option><option value="2015">2015</option>
        </select>        
        <select name="mes_desde" id="mes_desdeHT">
            <option value="2">Feb</option><option value="3">Mar</option><option value="4">Abr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Ago</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dic</option>
        </select>
        <select name="dia_desde" id="dia_desdeHT">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
        </select>
    </div>
    
    <div>
        <div>Fecha de Regreso:</div>
        <select name="anio_hasta" id="anio_hastaHT">
            <option value="2014">2014</option><option value="2015">2015</option>
        </select>
        <select name="mes_hasta" id="mes_hastaHT">
            <option value="2">Feb</option><option value="3">Mar</option><option value="4">Abr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Ago</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dic</option>
        </select>
        <select name="dia_hasta" id="dia_hastaHT">
            <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
        </select>
    </div>
    <input type="submit" value="Buscar hoteles">
</form>