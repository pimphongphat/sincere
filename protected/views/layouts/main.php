<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<style type="text/css">
	body {
	background-image: url(../../../images/bg-top.gif);
	background-repeat: repeat-x;
	margin-top: 18px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
    </style>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div align="center"><img src="../../../images/sincere-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/bg-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/bg-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/bg-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/bg-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/bg-logo.gif" width="146" height="130"  alt=""/><img src="../../../images/reme-logo.gif" width="122" height="130"  alt=""/>
  <br />
</div>
	<center><div id="mainmenubar">
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				//array('label'=>'Home', 'url'=>array('/site/index')),
				//array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
    <div id="language"><? echo CHtml::image('images/language.png','language');?> </div>
	</div><!-- mainmenu -->
    </div><!-- mainmenubar --></center>
    
<div id="detail">


<div class="container" id="page"><!-- header -->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

</div><!-- page -->
<center><div id="linefooter" >	
<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->
</div><!-- linefooter --></center>
</div><!-- detail -->
</body>
</html>
