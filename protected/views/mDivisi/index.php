<?php
/* @var $this MDivisiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdivisis',
);

$this->menu=array(
	array('label'=>'Create MDivisi', 'url'=>array('create')),
	array('label'=>'Manage MDivisi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Mdivisis</h1>
<div class="bloc">
    <div class="title">Mdivisis</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>