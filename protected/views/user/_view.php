<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_th')); ?>:</b>
	<?php echo CHtml::encode($data->name_th); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname_th')); ?>:</b>
	<?php echo CHtml::encode($data->surname_th); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_eng')); ?>:</b>
	<?php echo CHtml::encode($data->name_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname_eng')); ?>:</b>
	<?php echo CHtml::encode($data->surname_eng); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bd_date')); ?>:</b>
	<?php echo CHtml::encode($data->bd_date); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id_card')); ?>:</b>
	<?php echo CHtml::encode($data->id_card); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_no')); ?>:</b>
	<?php echo CHtml::encode($data->add_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_street')); ?>:</b>
	<?php echo CHtml::encode($data->add_street); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_province')); ?>:</b>
	<?php echo CHtml::encode($data->add_province); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_postcode')); ?>:</b>
	<?php echo CHtml::encode($data->add_postcode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone_number')); ?>:</b>
	<?php echo CHtml::encode($data->phone_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile_number')); ?>:</b>
	<?php echo CHtml::encode($data->mobile_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email_address')); ?>:</b>
	<?php echo CHtml::encode($data->email_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('receive_data')); ?>:</b>
	<?php echo CHtml::encode($data->receive_data); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_login_time')); ?>:</b>
	<?php echo CHtml::encode($data->last_login_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>