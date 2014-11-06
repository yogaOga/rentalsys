<?php
/* @var $this MRecruitmentController */
/* @var $model MRecruitment */

?>
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
    //    		'recruitment_id',
		'year_recruitment',
		'name',
		'office',
	//	'departemen',
	//	'seksi',
	//	'divisi',
		'occuption',
		'type_selection',
		'media_promotion',
		'note',
        ),
        )); ?>
