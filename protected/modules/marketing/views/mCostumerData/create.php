<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */

$this->breadcrumbs=array(
	'Mcostumer Datas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCostumerData', 'url'=>array('index')),
	array('label'=>'Manage MCostumerData', 'url'=>array('admin')),
);
?>

  
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		
                </div>
	