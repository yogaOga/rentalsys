<?php
/* @var $this MSeksiController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mseksis',
);

$this->menu=array(
	array('label'=>'Create MSeksi', 'url'=>array('create')),
	array('label'=>'Manage MSeksi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Mseksis</h1>
<div class="bloc">
    <div class="title">Mseksis</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>