<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */

$this->breadcrumbs = array(
    'Contract Orders' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List ContractOrder', 'url' => array('index')),
    array('label' => 'Manage ContractOrder', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create ContractOrder</div> 
    <div class="content">
        <?php
        $this->renderPartial('_form', array(
            'model' => $model,
            'modelDetail' => $modelDetail,
            'modelDetails' => $modelDetails,
        ));
        ?>		</div>
</div>