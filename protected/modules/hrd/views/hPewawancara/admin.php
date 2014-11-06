<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */

$this->breadcrumbs=array(
	'Hpewawancaras'=>array('index'),
	'Manage',
);
$this->menu=array(
array('label'=>'List HPewawancara', 'url'=>array('index')),
array('label'=>'Create HPewawancara', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#hpewawancara-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");

?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Manage Hpewawancaras</h1>

<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach($flashMessages as $key => $message) {
        echo '<div class="notif ' . $key . ' bloc">'
                . '<strong>'.$key.'</strong> '.$message.'<a href="#" class="close">x</a></div>';
    }
}
?>

<div class="bloc">
    <div class="title">Actions</div>
    <div class="content">
        <div class="left">
            <?php echo CHtml::link('New', $this->createUrl('Create'), array('class' => 'button')); ?>
            <?php echo CHtml::link('Print', 'JavaScript:popPrint("' . $this->createUrl('Print') . '");', array('class' => 'button black')); ?>        </div>
        <div class="right">
            <form id="search" class="input placeholder">
                <input class="text" type="text" name="q" value="" />
            </form>
        </div>
    </div>
</div>

<div class="bloc">
    <div class="title">Table Hpewawancaras</div> 
    <div class="content">

        <?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
        <div class="search-form" style="display:none">
            <?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
        </div><!-- search-form -->

        <?php $this->widget('zii.widgets.grid.CGridView', array(
        'id'=>'hpewawancara-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'columns'=>array(
        		'id',
		'recruitment_id',
		'kantor_id',
		'departement_id',
		'seksi_id',
		'divisi_id',
		/*
		'jabatan_id',
		'nmpewawancara',
		'catatan',
		*/
        array(
        'class'=>'CButtonColumn',
        ),
        ),
        )); ?>

    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Popup window code
function popPrint(url) {
	popupWindow = window.open(
		url,'popUpWindow','height=700,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
}
</script>