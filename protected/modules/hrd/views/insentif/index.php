<?php
/* @var $this InsentifController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Insentifs',
);

$this->menu=array(
	array('label'=>'Create Insentif', 'url'=>array('create')),
	array('label'=>'Manage Insentif', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Insentifs</h1>
<div class="bloc">
    <div class="title">Insentifs</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>