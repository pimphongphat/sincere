<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name_th'); ?>
		<?php echo $form->textField($model,'name_th',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_th'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname_th'); ?>
		<?php echo $form->textField($model,'surname_th',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'surname_th'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name_eng'); ?>
		<?php echo $form->textField($model,'name_eng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname_eng'); ?>
		<?php echo $form->textField($model,'surname_eng',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'surname_eng'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bd_date'); ?>
		<?php echo $form->textField($model,'bd_date'); ?>
		<?php echo $form->error($model,'bd_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_card'); ?>
		<?php echo $form->textField($model,'id_card',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'id_card'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_no'); ?>
		<?php echo $form->textField($model,'add_no',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_street'); ?>
		<?php echo $form->textField($model,'add_street',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_province'); ?>
		<?php echo $form->textField($model,'add_province',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_province'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'add_postcode'); ?>
		<?php echo $form->textField($model,'add_postcode',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'add_postcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mobile_number'); ?>
		<?php echo $form->textField($model,'mobile_number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'mobile_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'receive_data'); ?>
		<?php echo $form->textField($model,'receive_data'); ?>
		<?php echo $form->error($model,'receive_data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_login_time'); ?>
		<?php echo $form->textField($model,'last_login_time'); ?>
		<?php echo $form->error($model,'last_login_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->