<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	
	
	<!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<style>
body {
  font-family: Verdana;
  font-family: 'Trebuchet MS';
}
.nav-wrapper ul li a{
	color: #616161 !important;
}

.operations{
	font-weight: bold;	
	font-size:25px;
}

.operations li{
	background-color:#eee;
	margin:13px;
	padding-left:0.5em;
}

.portlet-title{
	font-size:25px;
	font-weight: bold;	
}
</style>

<body>

<div class="container-fluid" id="page">
	<nav class="grey lighten-3">
		<div class="nav-wrapper container">			
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'<img src="'.Yii::app()->request->baseUrl.'/images/logo.png" width="150" />', 'url'=>array('/site/index')),
					array('label'=>'Cursos', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Planes de estudio', 'url'=>array('/site/page', 'view'=>'planes')),
					array('label'=>'Agenda', 'url'=>array('/site/page', 'view'=>'agenda')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
				'encodeLabel'=>false,
				'htmlOptions'=>array('class'=>'blue-text text-darken-2'),				
			)); ?>
		</div><!-- mainmenu -->
	</nav>	
	<div class="container row" style="padding-top:3em;">	
	<?php echo $content; ?>
	</div>

</div><!-- page -->

</body>
</html>
