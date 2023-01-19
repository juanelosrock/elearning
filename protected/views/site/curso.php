<?php if(isset($_GET['curso'])) {
	$idcurso = $_GET['curso'];
	$curso = Cursos::model()->findByPk($idcurso);
	if(!empty($curso)){
?>
<div class="row">
	<div class="col s6 m6">
		<img src="http://localhost/adminelearning/images/curso/<?php echo $curso->imagen ?>" width="400"> 		
	</div>
	<div class="col s6 m6">
		<h3><?php echo $curso->nombre ?></h3>
		<label class="header">tutor: <?php echo $curso->tutor ?></label>	<br/>	
		<label class="header">tiempo: <?php echo $curso->duracion ?></label>	
		<br/>
		<a href="#modal2" class="waves-effect waves-light btn modal-trigger">Ver curso</a>
		<a class="waves-effect waves-light btn red darken-1">Agregar Curso</a>
		<a class="waves-effect waves-light green-text accent-4 "><b>Examen Final</b></a>		
	</div>
	<div class="col s12 m12">
		<h3>Tu progreso en el curso (70%)</h3>
		<div class="progress">
			<div class="determinate" style="width: 70%"></div>
		</div>		
	</div>
	<div class="col s12 m12">
		<ul class="collection with-header">
        <li class="collection-header"><h4>Temario del Curso</h4></li>
        <li class="collection-item"><div>Que es una hora extra<a href="#modal1" class="secondary-content modal-trigger"><i class="material-icons">done_all</i></a></div></li>
        <li class="collection-item"><div>Cuando Aplican las horas extras<a href="#!" class="secondary-content"><i class="material-icons">check</i></a></div></li>
        <li class="collection-item"><div>Legislacion<a href="#!" class="secondary-content"><i class="material-icons ">send</i></a></div></li>
        <li class="collection-item"><div>Como proceder para liquidarlas<a href="#!" class="secondary-content"><i class="material-icons ">send</i></a></div></li>
      </ul>	
	</div>
	
	  <div id="modal1" class="modal">
		<div class="modal-content">
		  <h4>Que es una hora extra</h4>
		  <div class="video-container">
			<iframe width="853" height="480" src="//www.youtube.com/embed/Q8TXgCzxEnw?rel=0" frameborder="0" allowfullscreen></iframe>
		  </div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
		</div>
	  </div>
	  
	  <div id="modal2" class="modal">
		<div class="modal-content">
		  <h4><?php echo $curso->nombre ?></h4>
		  <div class="video-container">
			<p><?php echo $curso->descripcion ?></p>
			<img src="http://localhost/adminelearning/images/curso/<?php echo $curso->imagen ?>" width="400"> 
		  </div>
		</div>
		<div class="modal-footer">
		  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
		</div>
	  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();	
  });
</script>
<?php } }else{
	header('Location: '.Yii::app()->createUrl('/site/page', array('view'=>'planes')));
} ?>


