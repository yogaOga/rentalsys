<?php
/* @var $this MRecruitmentController */
/* @var $model MRecruitment */

$this->breadcrumbs=array(
	'Mrecruitments'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MRecruitment', 'url'=>array('index')),
array('label'=>'Manage MRecruitment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Mrecruitments</h1>

<div class="bloc">
    <div class="title">Create MRecruitment</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>