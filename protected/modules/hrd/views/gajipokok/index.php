<?php
/* @var $this GajipokokController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gajipokoks',
);

$this->menu=array(
	array('label'=>'Create Gajipokok', 'url'=>array('create')),
	array('label'=>'Manage Gajipokok', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Gajipokoks</h1>
<div class="bloc">
    <div class="title">Gajipokoks</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>