<div class="row">
    <div class="col-sm-8">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs custom-nav-tabs green-bg">
            <li style="width: 40%"><h4>Lo nuevo</h4></li>
          <li style="width: 30%" class="active"><a href="#eventos" data-toggle="tab">Eventos</a></li>
          <li style="width: 30%"><a href="#noticias" data-toggle="tab">Noticias</a></li>
        </ul>


        <!-- Tab panes -->
        <div class="tab-content featured-box">
          <div class="tab-pane active" id="eventos">
                <?php get_template_part('partials/featured-block-2-2-eventos') ?>
          </div>
            <div class="tab-pane" id="noticias">
                <?php get_template_part('partials/featured-block-2-2-noticias') ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <?php include 'editors-pick.php' ?>
    </div>
</div>