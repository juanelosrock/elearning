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

$criteria = new CDbCriteria();
if(isset($_GET['clave'])){
	$clave = $_GET['clave'];
	$criteria->compare('nombre', $clave, true);
}

$planestudio = PlanesDeEstudio::model()->findAll($criteria);

Yii::app()->clientScript->registerScript('busqueda', "
$('#btn-buscar').click(function(){
	var clave = $('#clave-busqueda').val();
	window.location.href = 'page?view=planes&clave=' + clave;
});
");

?>

<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Escribe tu plan de estudio aqui" id="clave-busqueda" type="text" class="validate">
          <label for="first_name">Planes de Estudio</label>
		  
        </div>
		<a id="btn-buscar" class="waves-effect waves-light btn">Buscar</a>
	  </div>
	</form>
</div>

<div class="row">
	<?php if(!empty($planestudio)) {
		foreach($planestudio as $data){?>
    <div class="col s4 m4">
	  <div class="card blue-grey darken-1">
		<div class="card-image">
          <img style="height:200px;" src="http://localhost/adminelearning/images/planestudio/<?php echo $data->imagen ?>">          
        </div>
		<div class="card-content white-text">
		  <span class="card-title"><a style="text-transform: capitalize;" href="<?php echo Yii::app()->createUrl('/site/planestudio',array('plan'=>$data->ID))?>"><?php echo $data->nombre ?></a></span>		
		  <p>
			<?php echo $data->descripcion ?>
		  </p>
		</div>
		<div class="card-action">	
			<?php 
				$ncurso = "Curso";
			if($data->cantcursos > 1){				
				$ncurso = "Cursos";
			} ?>
			<?php echo $data->cantcursos ?> <?php echo $ncurso ?>
		</div>
	  </div>
	</div>	
	<?php } } ?>	
</div>