<?php
global $post;

$venue = get_field('event_venue');
$event_venue = $venue[0];

$start_date = get_field('event_start_date');
$start_hour = get_field('event_start_time_hour');
$start_mins = get_field('event_start_time_minutes');
$start_horario = '';

$end_date = get_field('event_end_date');
$end_hour = get_field('event_end_time_hour');
$end_mins = get_field('event_end_time_minutes');
$end_horario = '';

$event_address = get_field('event_address');
$event_map = get_field('event_map');

$source_url = get_field('event_source');
$tickets_url = get_field('event_tickets_url');

if (!empty($start_hour)){
    $start_horario = $start_hour;
}
    
if (!empty($start_mins )){
    $start_horario .= ':' . $start_mins;
} else {
    $start_horario .= ':00';
}

if (!empty($end_hour)){
    $end_horario = $end_hour;
}
    
if (!empty($end_mins )){
    $end_horario .= ':' . $end_mins;
} else {
    $end_horario .= ':00';
} 
?>
<div class="event-meta bs-callout bs-callout-info" style="border: 2px solid #bce8f1;">
    
<div class="info">

    <h3 style="font-size: 1.5em">Fecha y hora</h3>
    <p>
    <i class="fa fa-calendar"></i> <span itemprop="startDate" content="<?php echo $start_date ?>T<?php echo $start_horario ?>"><?php echo date_i18n('j F, Y', strtotime($start_date)) ?>  
    <?php 
    if (!empty($start_hour)){
        echo '  <i class="fa fa-clock-o"></i> ' . $start_horario;
    }
    ?>
    </span>
    </p>

    <?php if (!empty($end_date)): ?>
    <p><strong>Finaliza el:</strong><br> 
    <i class="fa fa-calendar"></i> <span itemprop="endDate" content="<?php echo $end_date ?>T<?php echo $end_horario ?>"><?php echo date_i18n('j F, Y', strtotime($end_date)) ?>  
    <?php 
    if (!empty($end_hour)){
        echo '  <i class="fa fa-clock-o"></i> ' . $end_horario;
    }
    ?>
    </span>
    </p>
    <?php endif ?>
    
    <?php if (!empty($tickets_url)): ?>
    <p itemprop="tickets" itemscope itemtype="http://data-vocabulary.org/Offer">
        <a itemprop="offerurl" href="<?php echo $tickets_url ?>">Compra boletos para el evento</a>
    </p>
    <?php endif ?>
</div>
    
    <hr style="border-bottom: 1px solid #e5e5e5; width: 98%; margin: 10px auto; padding: 0; display: block">
    
<div itemprop="location" itemscope itemtype="http://schema.org/Place" class="venue" style="width: 98%; margin: 0 auto">    	
    <h3 style="font-size: 1.4em"><i class="fa fa-map-marker"></i>  Lugar</h3>
    
        <a itemprop="url" href="<?php echo get_permalink($event_venue->ID) ?>">
    <?php echo $event_venue->post_title; ?></a>

    <p><?php echo $venue[0]->post_excerpt; ?></p>
    <?php /*
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
          <span itemprop="addressLocality">Philadelphia</span>,
          <span itemprop="addressRegion">PA</span>
        </div>
    */ ?>
</div>
    
</div>