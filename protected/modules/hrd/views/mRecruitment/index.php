<?php
/* @var $this MRecruitmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mrecruitments',
);

$this->menu=array(
	array('label'=>'Create MRecruitment', 'url'=>array('create')),
	array('label'=>'Manage MRecruitment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Mrecruitments</h1>
<div class="bloc">
    <div class="title">Mrecruitments</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>