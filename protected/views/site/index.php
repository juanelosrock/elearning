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
      <h3>Mis Cursos</h3>
	  <label>Continua donde te quedaste</label>
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
          <h6><a href="<?php echo Yii::app()->createUrl('site/curso') ?>">Curso liquidacion horas extras</a></h6>
		  70.0 % 
        </div>
      </div>
    </div>
	
	<div class="col s4 m4">
	  <div class="card blue-grey darken-1">
		<div class="card-content white-text">
		  <span class="card-title">Mas cursos...</span>		  
		</div>
		<div class="card-action">			
		</div>
	  </div>
	</div>
</div>

<div class="row">
	<div class="col s12 m12">
	<ul class="collection">
		<li class="collection-item avatar">	
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/empresa.jpg" alt="" class="circle">
			<span class="title"><a href="<?php echo Yii::app()->createUrl('site/planestudio') ?>">Gestion Humana</a></span>
			<p><a href="<?php echo Yii::app()->createUrl('site/curso') ?>">Curso liquidacion horas extras</a><br/></p>
			<div class="progress">
			  <div class="determinate" style="width: 70%"></div>
			</div>
		</li>		
	</ul>
	</div>
</div>