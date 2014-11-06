<?php
/* @var $this MEmployeeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Memployees',
);

$this->menu=array(
	array('label'=>'Create MEmployee', 'url'=>array('create')),
	array('label'=>'Manage MEmployee', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Memployees</h1>
<div class="bloc">
    <div class="title">Memployees</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>