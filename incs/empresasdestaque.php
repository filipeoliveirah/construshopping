<section id="invite" class="pad-lg light-gray-bg">
  <div class="container empresasdestaque">
    <div class="row">
      <h1 class="text-center">Empresas em destaque</h1>
      <h4 class="text-center">Patrocinadas</h4>
    </div>
    <?php $incremento = 0;
    while ($incremento <= 3){?>
    <div class="col-sm-12 col-md-3">
      <div class="thumbnail">
        <img src="img/theme/iStock-586066898-800x500.jpg" alt="" class="img-responsive"/>
        <div class="caption">
          <h3>Construtora Líder</h3>
          <a href="#" class="btn btn-primary" role="button">Visitar</a>
          <?php $incrementostar = 1;
          while ($incrementostar <= 5){?>          
            <i class="fa fa-star empresasdestaque-star" aria-hidden="true"></i>
          <?php $incrementostar++; }?>       
        </div>
      </div>
    </div>
    <?php 
    $incremento++;
    }
    ?>
  </div>
</section>