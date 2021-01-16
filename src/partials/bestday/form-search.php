<?php
/**
 * Search for hotels
 *
 * @package acapulco
 */

?>
<div id="search-forms" class="tab-panel inside">
	 <ul class="static-primarytabs" id="sf-st-primaryTabs" style="height: 233px;">
		 <li class="current" data-target="#search-hotel"><span>Hoteles</span></li>
		 <li data-target="#search-hotel-flight" class="lower"><span>Hotel + Avión</span></li>
		 <li data-target="#search-flight"><span>Vuelos</span></li>
		 <li data-target="#search-tours"><span>Tours</span></li>
		 <li data-target="#search-transfer"><span>Traslados</span></li>
		 <li data-target="#search-cars"><span>Autos</span></li>
	 </ul>
	 <div class="content-search-form">
 <div><img src="//images.bestday.com/_lib/images/bestday/sprite.gif" class="sello esp"></div>
		 <div class="head-search-box">
			 <h2 id="title-header">¡Reserva tu hotel!</h2>
			 <div class="error-msgs-box"></div>
			 <form>
				 <fieldset>
					 <ul class="check-type" id="hotelsCheck">
						 <li>
							 <label for="hotel-only">
							 <input type="radio" name="promotion" value="promo" id="hotel-only" href="#landing-flight" checked="">Sólo Avión</label>
						 </li>
						 <li>
							 <label for="hotel-plane">
							 <input type="radio" name="promotion" value="promo" id="hotel-plane" href="#landing-package">Hotel + Avión</label>
							 <span>¡Ahorra en tu compra!</span>
						 </li>
					 </ul>
					 <h3 class="kind-flight">Tipo de Viaje</h3>
					 <ul class="check-type kind-flight" id="flightCheck">
						 <li>
							 <label for="two-way"><input type="radio" checked="" value="two-way" id="two-way" name="flights">Viaje redondo</label>
						 </li>
						 <li>
							 <label for="one-way"><input type="radio" id="one-way" value="one-way" name="flights">Viaje Sencillo</label>
						 </li>
					 </ul>
				 </fieldset>
			 </form>
		 </div>

		<div id="search-hotel" class="static-tabs-content" style="display:block;">
			<?php include 'bestday/form-search-hotels.php' ?>
		</div>
	 </div>
</div>
