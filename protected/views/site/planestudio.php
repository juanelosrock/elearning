<?php if(isset($_GET['plan'])) {
	$idplan = $_GET['plan'];
	$plan_estudio = PlanesDeEstudio::model()->findByPk($idplan);
	if(!empty($plan_estudio)){
?>
<div class="row">
	
	<div class="col s12 m12 center-align">
		<h3 style="text-transform: capitalize;"><?php echo $plan_estudio->nombre ?></h3>		
		<br/>
		<h4><?php echo $plan_estudio->descripcion ?></h4>		
	</div>
	<div class="col s12 m12">
		<h3>En este plan de estudios aprenderas</h3>		
		<!--<p>Todo lo relacionado con la gestion humana de la empresa</p>-->
	</div>	
	<div class="col s12 m12">
		<ul class="collection with-header">
        <li class="collection-header"><h4>Cursos Comprendidos</h4></li>
	<?php 
	$criteria = new CDbCriteria();
	$criteria->compare('plan_estudio', $plan_estudio->ID);
	$cursos = Cursos::model()->findAll($criteria);
	if(!empty($cursos)){
		foreach($cursos as $info){
?>
		<li class="collection-item"><div><?php echo $info->nombre ?><a href="<?php echo Yii::app()->createUrl('site/curso', array('curso'=>$info->ID)) ?>" class="secondary-content"><i class="material-icons">directions_run</i></a></div></li>
	<?php } } ?>
        
        <!--<li class="collection-item"><div>Memorandos y debido proceso<a href="#!" class="secondary-content"><i class="material-icons">done_all</i></a></div></li>
        <li class="collection-item"><div>Como solicitar los auxilios de la empresa<a href="#!" class="secondary-content"><i class="material-icons ">done_all</i></a></div></li>
        <li class="collection-item"><div>Como reportar las novedades en la empresa<a href="#!" class="secondary-content"><i class="material-icons ">done_all</i></a></div></li>-->
      </ul>	
	</div>
</div>
<?php } }else{
	header('Location: '.Yii::app()->createUrl('/site/page', array('view'=>'planes')));
} ?>
