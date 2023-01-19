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

$meses = array('01'=>'Enero','02'=>'Febrero','03'=>'Marzo','04'=>'Abril','05'=>'Mayo','06'=>'Junio','07'=>'Julio','08'=>'Agosto','09'=>'Septiembre','10'=>'Octubre','11'=>'Noviembre','12'=>'Diciembre',)
?>
<div class="row text-center">
    <div class="col s12 m12">
		<blockquote>
      <h4>Agenda DIRE hoy es <?php echo date('j'); ?> de <?php echo $meses[date('m')]; ?> del <?php echo date('Y'); ?></h4>
	  <label>Un resumen de la semana.</label>
    </blockquote>
	</div>
</div>	
<h2 class="header">Cursos</h2>
<div class="col s12 m7">
    <h4 class="header">Proximos a Vencer</h4>
	<ul class="collection">
		<li class="collection-item avatar">	
			<img src="/elearning/images/empresa.jpg" alt="" class="circle">
			<span class="title"><a href="<?php echo Yii::app()->createUrl('site/planestudio') ?>">Gestion Humana</a></span>
			<p><a href="<?php echo Yii::app()->createUrl('site/curso') ?>">Curso liquidacion horas extras</a><br></p>
			<div class="progress">
			  <div class="determinate orange darken-3" style="width: 70%"></div>
			</div>
			<p class="secondary-content"> 5 dias	</p>
		</li>		
	</ul>
</div>
<div class="col s12 m7">
    <h4 class="header">Vencidos</h4>
	<ul class="collection">
		<li class="collection-item avatar">	
			<img src="/elearning/images/empresa.jpg" alt="" class="circle">
			<span class="title"><a href="<?php echo Yii::app()->createUrl('site/planestudio') ?>">Gestion Humana</a></span>
			<p><a href="<?php echo Yii::app()->createUrl('site/curso') ?>">Curso liquidacion horas extras</a><br></p>
			<div class="progress">
			  <div class="determinate red darken-3" style="width: 20%"></div>
			</div>
			<p class="secondary-content red-text darken-3"> 2 dias	</p>
		</li>		
	</ul>
</div>