<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

$this->breadcrumbs=array(
	'Metas Platos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Mis Cursos', 'url'=>array('index')),
	array('label'=>'Estrenos', 'url'=>array('estreno')),
);
?>
<div class="row text-center">
    <div class="col s12 m12">
		<blockquote>
      <h3>Cursos por Venir</h3>
	  <label>Oferta de cursos por llegar, no te los puedes perder</label>
    </blockquote>
	</div>
</div>
<div class="row">
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/empresa.jpg">          
        </div>
        
        <div class="card-action">
          <h6>Curso liquidacion horas extras</h6>
        </div>
		
		<div class="card-action">
          En 7 dias
        </div>
      </div>
    </div>
	
	<div class="col s4 m4">
	  <div class="card blue-grey darken-1">
		<div class="card-content white-text">
		  <span class="card-title">Curso liquidacion horas extras</span>		  
		</div>
		<div class="card-action">	
			En 7 dias
		</div>
	  </div>
	</div>
</div>

