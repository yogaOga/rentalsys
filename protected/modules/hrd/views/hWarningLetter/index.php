<?php
/* @var $this HWarningLetterController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hwarning Letters',
);

$this->menu=array(
	array('label'=>'Create HWarningLetter', 'url'=>array('create')),
	array('label'=>'Manage HWarningLetter', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Hwarning Letters</h1>
<div class="bloc">
    <div class="title">Hwarning Letters</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>