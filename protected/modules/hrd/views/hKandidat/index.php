<?php
/* @var $this HKandidatController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hkandidats',
);

$this->menu=array(
	array('label'=>'Create HKandidat', 'url'=>array('create')),
	array('label'=>'Manage HKandidat', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Hkandidats</h1>
<div class="bloc">
    <div class="title">Hkandidats</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>