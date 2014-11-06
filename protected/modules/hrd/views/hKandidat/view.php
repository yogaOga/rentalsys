<?php
/* @var $this HKandidatController */
/* @var $model HKandidat */

$this->breadcrumbs=array(
	'Hkandidats'=>array('index'),
	$model->kandidat_id,
);

$this->menu=array(
	array('label'=>'List HKandidat', 'url'=>array('index')),
	array('label'=>'Create HKandidat', 'url'=>array('create')),
	array('label'=>'Update HKandidat', 'url'=>array('update', 'id'=>$model->kandidat_id)),
	array('label'=>'Delete HKandidat', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->kandidat_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HKandidat', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Hkandidats</h1>
<div class="bloc">
    <div class="title">View HKandidat #<?php echo $model->kandidat_id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'kandidat_id',
		'kode_kandidat',
		'nama_kandidat',
		'tempatlahir',
		'tgllahir',
		'agama',
		'kelamin',
		'goldarah',
		'kacamata',
		'plus',
		'minus',
		'cylindris',
		'statusnikah',
		'alamat',
		'kota',
		'propinsi',
		'kodepos',
		'telp',
		'hp',
		'noktp',
		'tgldikeluarkan',
		'berlakuktp',
		'nosim',
		'tgldikeluarkansim',
		'berlakusim',
		'email',
		'photo',
		'catatan',
		'userinput',
		'tglinput',
        ),
        )); ?>
    </div>
</div>
