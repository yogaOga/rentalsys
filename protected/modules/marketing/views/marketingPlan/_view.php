<?php
/* @var $this MarketingPlanController */
/* @var $data MarketingPlan */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id_marketing_plan')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_marketing_plan), array('view', 'id'=>$data->id_marketing_plan)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('Nama_Marketing')); ?>:</b>
	<?php echo CHtml::encode($data->Nama_Marketing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Marketing_Items')); ?>:</b>
	<?php echo CHtml::encode($data->Marketing_Items); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Start_End_Date')); ?>:</b>
	<?php echo CHtml::encode($data->Start_End_Date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Durasi_Pekerjaan')); ?>:</b>
	<?php echo CHtml::encode($data->Durasi_Pekerjaan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Skala_Prioritas')); ?>:</b>
	<?php echo CHtml::encode($data->Skala_Prioritas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estimasi_Hasil')); ?>:</b>
	<?php echo CHtml::encode($data->Estimasi_Hasil); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Result_Final')); ?>:</b>
	<?php echo CHtml::encode($data->Result_Final); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Note_Manager')); ?>:</b>
	<?php echo CHtml::encode($data->Note_Manager); ?>
	<br />

	*/ ?>
