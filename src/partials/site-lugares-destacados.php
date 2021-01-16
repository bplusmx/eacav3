<section class="col-lg-12 col-md-12 col-sm-12">    
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified custom-nav-tabs oferta">
        <li>Lugares</li>
        <li class="active"><a href="#tramites" data-toggle="tab">Favoritos</a></li>
        <li><a href="#profile" data-toggle="tab">Atractivos</a></li>
        <li><a href="#messages" data-toggle="tab">Cultura</a></li>
        <li><a href="#settings" data-toggle="tab">Comercios</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content featured-box">
      <div class="tab-pane active" id="tramites">
        <?php 
          $featured_box_query_args = array(
              'post_type' => 'eaca_events',
              'posts_per_page' => 5
          );

          include 'tab-layout-1x4.php' 
          ?>
      </div>
      <div class="tab-pane" id="profile">...</div>
      <div class="tab-pane" id="messages">...</div>
      <div class="tab-pane" id="settings">...</div>
    </div>
</section>