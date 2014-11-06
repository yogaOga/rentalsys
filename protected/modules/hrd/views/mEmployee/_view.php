<?php
/* @var $this MEmployeeController */
/* @var $data MEmployee */
?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
<br />


			<b><?php echo CHtml::encode($data->getAttributeLabel('applicant_id')); ?>:</b>
	<?php echo CHtml::encode($data->applicant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nip')); ?>:</b>
	<?php echo CHtml::encode($data->nip); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nickname')); ?>:</b>
	<?php echo CHtml::encode($data->nickname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_place')); ?>:</b>
	<?php echo CHtml::encode($data->birth_place); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('birth_date')); ?>:</b>
	<?php echo CHtml::encode($data->birth_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blood_type')); ?>:</b>
	<?php echo CHtml::encode($data->blood_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nationality')); ?>:</b>
	<?php echo CHtml::encode($data->nationality); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_address')); ?>:</b>
	<?php echo CHtml::encode($data->street_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('state_id')); ?>:</b>
	<?php echo CHtml::encode($data->state_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('city_id')); ?>:</b>
	<?php echo CHtml::encode($data->city_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('m_employeecol')); ?>:</b>
	<?php echo CHtml::encode($data->m_employeecol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('home_status')); ?>:</b>
	<?php echo CHtml::encode($data->home_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phone')); ?>:</b>
	<?php echo CHtml::encode($data->phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mobile')); ?>:</b>
	<?php echo CHtml::encode($data->mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo_path')); ?>:</b>
	<?php echo CHtml::encode($data->photo_path); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('religion')); ?>:</b>
	<?php echo CHtml::encode($data->religion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hobby')); ?>:</b>
	<?php echo CHtml::encode($data->hobby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driving_licence')); ?>:</b>
	<?php echo CHtml::encode($data->driving_licence); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marital_status')); ?>:</b>
	<?php echo CHtml::encode($data->marital_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('children')); ?>:</b>
	<?php echo CHtml::encode($data->children); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_person_name')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_person_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_relation')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_relation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_ext_reference')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_ext_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_ext_address')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_ext_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_ext_phone')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_ext_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_int_reference')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_int_reference); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_int_position')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_int_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emergency_int_location')); ?>:</b>
	<?php echo CHtml::encode($data->emergency_int_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_at')); ?>:</b>
	<?php echo CHtml::encode($data->updated_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_by')); ?>:</b>
	<?php echo CHtml::encode($data->create_by); ?>
	<br />

	*/ ?>
