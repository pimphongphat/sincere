<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
	array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_th',
		'surname_th',
		'name_eng',
		'surname_eng',
		'gender',
		'bd_date',
		'id_card',
		'add_no',
		'add_street',
		'add_province',
		'add_postcode',
		'phone_number',
		'mobile_number',
		'email_address',
		'username',
		'email',
		'password',
		'receive_data',
		'last_login_time',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
