<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);

$this->menu=array(
	array('label'=>'Mis Cursos', 'url'=>array('index')),
	array('label'=>'Estrenos', 'url'=>array('estreno')),
);
?>
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Escribe tu curso aqui" id="first_name" type="text" class="validate">
          <label for="first_name">Buscar Curso</label>
        </div>
		<a class="waves-effect waves-light btn">Buscar</a>
	  </div>
	</form>
</div>

<div class="row">
    <div class="col s4 m4">
      <div class="card">
        <div class="card-image">
          <a href="<?php echo Yii::app()->createUrl('/site/curso')?>"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/empresa.jpg"></a>
        </div>
        
        <div class="card-action">
          <h6><a href="<?php echo Yii::app()->createUrl('/site/curso')?>">Curso liquidacion horas extras<a/></h6>
        </div>
		
		<div class="card-action">
           6 h 50 m Duracion
        </div>
      </div>
    </div>		
</div>